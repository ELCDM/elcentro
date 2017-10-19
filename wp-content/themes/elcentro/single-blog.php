<?php

get_header('interior'); 
the_post();

//Set Cookie para visita
$vistauno = $_COOKIE['vista'];
$value = 1;
setcookie("vista", $value, time()+900);

//Evaluar si existe la primer vista
$exist = $wpdb->get_row( "SELECT * FROM los_mas_vistos WHERE post_id =".$post->ID );
$vistas = $exist->vistas;
$una_vista_mas =  $vistas+1;
if ($exist->id > 0 && $vistauno < 1){
  //SI YA ESXITE LA VISTA AUMENTA LA CUENTA';
  $wpdb->replace( 'los_mas_vistos',
    array(
      'id' => $exist->id,
      'post_id' => $post->ID,
      'vistas' => $una_vista_mas
      ),
    array(
      '%d',
      '%d',
      '%d'
      )
    );
}else if($vistauno < 1){
//Si NO EXISTE LA VISTA CREA LA VISTA';
  $wpdb->insert('los_mas_vistos',
    array(
      'id' => 'NULL',
      'post_id' => $post->ID,
      'vistas' => 1
      ),
    array(
      '%d',
      '%d',
      '%d'
      )
    );
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/el-centro-de-marketing-blog.webflow.css">

<div class="fondodesidebar"></div>

<img class="imgblog" sizes="(max-width: 1037px) 100vw, 1037px" src="<?php bloginfo('template_url')?>/images/imagendeblog.png" srcset="<?php bloginfo('template_url')?>/images/imagendeblog-p-500x129.png 500w, <?php bloginfo('template_url')?>/images/imagendeblog-p-800x206.png 800w, <?php bloginfo('template_url')?>/images/imagendeblog.png 1037w">

<main class="content-home content-inter contentblog contenticons">
  <div class="contentcenter w-clearfix">
    <div class="contenttitul">
      <h1 class="tituldeblog">CONTENIDO DE INTERÉS</h1>
    </div>
    <div class="contentblog w-clearfix">
      <?php
      $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interna-blog');
      $exist = $wpdb->get_row( "SELECT * FROM los_mas_vistos WHERE post_id =".$post->ID );
      $vistas = $exist->vistas;
      ?>
      <div class="contentbloge inteblogcont w-clearfix">
        <img class="imginterblog" sizes="(max-width: 702px) 90vw, (max-width: 767px) 632px, (max-width: 991px) 57vw, 55vw" src="<?php echo $post_thumbnail[0]; ?>" srcset="<?php echo $post_thumbnail[0]; ?>">
        <div class="fechasyredesint w-clearfix">

          <div class="compartir w-clearfix">
            <div class="compartirtext">Compartir</div>
            <a class="comredes w-inline-block popup" href="http://twitter.com/share"></a>
            <div class="linea"></div>
            <a class="comredes fb w-inline-block" href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
          </div>

          <div class="datosed datosinter w-clearfix">
            <div class="views"><?php echo $vistas; ?> visitas</div>
            <div class="fech views"><?php echo get_the_time('j F, Y'); ?></div>
          </div>
        </div>
        <h1 class="interblogtit titulointerblog"><?php the_title(); ?></h1>
        <div class="textdelblog"><?php the_content(); ?></div>
          <div class="comentarios">
            <?php comments_template(); ?>
          </div>
        </div>
        <?php get_sidebar('blog'); ?>
      </div>
    </div>
  </main>


  <?php

  get_footer();

