	<?php
/**
* Template Name: Contáctanos
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
the_post();
get_header('interior');
?>
<div class="contactimg"></div>
<main class="content-home content-inter contenticons contserv">
  <div class="centermktt contentcenter contentcont w-clearfix">
    <div class="cuadra1 titulydatcont w-clearfix">
      <div class="contitul servicint titlubox">
        <h1 class="tituldecont titulservic">Tu comunicación es importante para nosotros</h1>
      </div>
      <div class="contencont"><a href="tel:22198614">2219-8614</a></div>
      <div class="contencont correo"><a href="mailto:info@elcentrodemarketing.com">INFO@ELCENTRODEMARKETING.COM</a></div>
    </div>
    <div class="titulydatcont">
      <div class="formcontacto">
        <form class="w-clearfix" data-name="Email Form" id="contacto_form" name="contacto_form" method="post">
          <div class="uncampo">
            <label class="textcont" for="name">Nombre *</label>
            <input class="inputcont w-input" data-name="Name" id="nombre_contacto" maxlength="256" name="nombre_contacto" type="text">
          </div>
          <div class="uncampo">
            <label class="textcont" for="name-2">Apellido *</label>
            <input class="inputcont w-input" data-name="Name 2" id="apellido_contacto" maxlength="256" name="apellido_contacto" type="text">
          </div>
          <div class="uncampo uncampofull">
            <label class="textcont" for="name-3">Correo electrónico *</label>
            <input class="inputcont w-input" data-name="Name 3" id="correo_contacto" maxlength="256" name="correo_contacto" type="email">
          </div>
          <div class="uncampo uncampofull">
            <label class="textcont" for="name-4">Mensaje *</label>
            <textarea class="inputcont textarea w-input" id="comentario_contacto" maxlength="5000" name="comentario_contacto"></textarea>
            <div class="captcha">
              <div id="captcha" class="g-recaptcha" data-sitekey="6Lf97QkUAAAAAPVkaVxPYwDYQi1NIy2ek0S4jSvu">
              </div>  
            </div>
            <input type="hidden" name="no" id="no" value="">
            <input type="hidden" name="contacto" value="true">
            <label class="textcont" for="name-4">* Campos obligatorios.</label>
          </div>
          <input id="enviarcontacto" class="enviar w-button" type="button" value="ENVIAR">
        </form>

      </div>
    </div>
  </div>
</main>
<?php
get_footer();
?>