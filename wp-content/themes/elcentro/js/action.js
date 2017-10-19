var $ = jQuery.noConflict();
$(document).ready(function () {

//MENU
$('.botonheader').click(function(){
  $('.menu').toggleClass('gra');
  $('.botonheader').toggleClass('corr');
});


  //ENVIO DE FORMULARIO VALIDADOS
  function reset() {
    $("#toggleCSS").attr("href", templateurl + "/css/alertify.default.css");
    alertify.set({
      labels: {
        ok: "OK",
        cancel: "Cancel"
      },
      delay: 5000,
      buttonReverse: false,
      buttonFocus: "ok"
    });
  }
  function Enviar(boton, nombre, apellido, correo, valcorreo, telefono, detalles, departamento, direccion, comentario, sexo, edad, captcha, form, redirect) {
    $(boton).click(function () {
      var tel = $(telefono).val();
      if ($(nombre).val().length < 1 && nombre != '#no' ) {
        reset();
        alertify.error("Ingrese su nombre.");
        return false;

      } else if ($(apellido).val().length < 1 && correo != '#no') {
        reset();
        alertify.error("Ingrese su Apellido");
        return false;

      } else if ($(correo).val().length < 1 && correo != '#no') {
        reset();
        alertify.error("Ingrese su correo.");
        return false;

      } else if ($(valcorreo).val().length > 1 && IsEmail($(valcorreo).val()) == false && valcorreo != '#no') {
        reset();
        alertify.error("Correo Invalido.");
        return false;

      } else if ($(telefono).val().length < 1 && telefono != '#no') {
        reset();
        alertify.error("Ingrese su teléfono.");
        return false;

      } else if ($.isNumeric(tel) == false && telefono != '#no') {
        reset();
        alertify.error("Su teléfono es Invalido.");
        return false;

      } else if ($(detalles).val().length < 1 && detalles != '#no') {
        reset();
        alertify.error("Coloque los detalles de lo que necesita.");
        return false;

      } else if ($(departamento).val().length < 1 && departamento != '#no') {
        reset();
        alertify.error("Seleccione un departamento.");
        return false;

      } else if ($(direccion).val().length < 1 && direccion != '#no') {
        reset();
        alertify.error("Ingrese su dirección.");
        return false;

      } else if ($(comentario).val().length < 1 && comentario != '#no') {
        reset();
        alertify.error("Coloque un comentario.");
        return false;

      } else if (!$(sexo).is(':checked') && sexo != '#no') {
        reset();
        alertify.error("Coloque su sexo.");
        return false;

      } else if ($(edad).val().length < 1 && edad != '#no') {
        reset();
        alertify.error("Coloque su edad.");
        return false;

      } else if($('#g-recaptcha-response').val() == '')  {
        reset();
        alertify.error("Complete la casilla de verificación.");
        return false;

      } else {
        var contform = $(form).serialize();
        $.ajax({
          type: "POST",
          url: templateurl + "/inc/emailSenderCore.php",
          data: contform
        })
        .done(function (data) {
          //alert(data);
          if (data == 10) {
            $("input[type=text], textarea, input[type=email]").val("");
            $("select").prop('selectedIndex', -1);
            if(redirect != '#no'){
              window.location = redirect;
            }
            reset();
            alertify.success('¡Gracias por comunicarse, enseguida estaremos en contacto!');
            return false;
          }
        });
      }
    });
    //termina function
  }

  //ENVIO DE CONTACTO
  Enviar('#enviarcontacto', '#nombre_contacto', '#apellido_contacto', '#correo_contacto', '#correo_contacto', '#no', '#no', '#no', '#no', '#comentario_contacto', '#no', '#no', '#captcha', '#contacto_form', "#no");

// POP UP DE TWITTER
$('.popup').click(function(event) {
  var width  = 575,
  height = 400,
  left   = ($(window).width()  - width)  / 2,
  top    = ($(window).height() - height) / 2,
  url    = this.href,
  opts   = 'status=1' +
  ',width='  + width  +
  ',height=' + height +
  ',top='    + top    +
  ',left='   + left;
  window.open(url, 'twitter', opts);
  return false;
});

//CARGAR MAS NOTAS
$('#cargarmas').click(function(){
  var num_notas = parseInt($(this).attr('num_notas'));
  //alert(num_notas);
  $.ajax({
    type: "POST",
    url: templateurl + "/inc/masnotas.php",
    data: { num: num_notas }
  })
  .done(function (data) {
    $('.aqui_las_notas').append(data);
    $('#cargarmas').attr('num_notas', num_notas+2);
  });
});
//FORM DE COMENTARIOS
$('.form-submit #submit').attr('type','button');
$('.form-submit #submit').click(function () {
  var urlaction = $('#commentform').attr('action');

  if ($('#comment').val().length < 1 && '#comment' != '#no' ) {
    reset();
    alertify.error("Ingrese su comentario.");
    return false;

  } else if ($('#author').val().length < 1 && '#author' != '#no') {
    reset();
    alertify.error("Ingrese su nombre.");
    return false;  

  } else if ($('#email').val().length < 1 && '#email' != '#no') {
    reset();
    alertify.error("Ingrese su correo.");
    return false;

  } else if ($('#email').val().length > 1 && IsEmail($('#email').val()) == false && '#email' != '#no') {
    reset();
    alertify.error("Correo Invalido.");
    return false;

  } else {
    var contform = $('#commentform').serialize();
    $.ajax({
      type: "POST",
      url: urlaction,
      data: contform
    });

    $("#email").val("");
    $("#author").val("");
    $("#comment").val("");
    reset();
    alertify.success('¡Gracias por su comentario!');
    location.reload();
    return false;
  }
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!regex.test(email)) {
    return false;
  } else {
    return true;
  }
}
});