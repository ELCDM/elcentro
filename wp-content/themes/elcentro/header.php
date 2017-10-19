<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/webflow.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/el-centro-de-marketing.webflow.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/js/source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.core.css" />

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/alertify.default.css" id="toggleCSS"/>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script type="text/javascript">
		WebFont.load({
			google: {
				families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,900","Roboto Condensed:300,300italic,regular,italic,700,700italic"]
			}
		});
    var templateurl = '<?php bloginfo('template_url'); ?>';
    var home = '<?php bloginfo('home'); ?>';
	</script>
	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js" type="text/javascript"></script>
	<link href="<?php bloginfo('template_url'); ?>/icon.png" rel="shortcut icon" type="image/x-icon">
	<link href="<?php bloginfo('template_url'); ?>/icon.png" rel="apple-touch-icon">
	<?php wp_head(); ?>
</head>

<body class="all" <?php body_class(); ?>>
  <div class="_1218p w-clearfix">
    <header class="header w-clearfix">
      <div class="menu w-clearfix">
        <a class="botonheader w-clearfix w-inline-block" data-ix="botnomenu" href="#">
          <div class="linea1"></div>
          <div class="linea2"></div>
          <div class="linea3"></div>
        </a>
        <div class="menuitems w-clearfix">
        <a class="itemmenu" data-ix="menuhove" href="<?php bloginfo('home')?>/?page_id=6">Conócenos</a>
        <a class="itemmenu" data-ix="menuhove" href="<?php bloginfo('home')?>/?page_id=8">Marketing de contenido</a>
        <a class="itemmenu" data-ix="menuhove" href="<?php bloginfo('home')?>/?page_id=10">servicios</a>
        <a class="blogmenu itemmenu" data-ix="menuhove" href="#">contenido de interés</a>
        <a class="itemmenu" data-ix="menuhove" href="<?php bloginfo('home')?>/?page_id=12">Contáctanos</a>
        </div>
      </div>
      <div class="slider-home w-slider" data-animation="cross" data-autoplay="1" data-delay="4000" data-disable-swipe="1" data-duration="500" data-easing="ease-in-out-circ" data-infinite="1">
        <div class="w-slider-mask">
          <div class="slide-cmk w-slide"><img class="imgslider" sizes="(max-width: 1218px) 100vw, 1218px" src="<?php bloginfo('template_url')?>/images/slide-basedelposicionamiento.png" srcset="<?php bloginfo('template_url')?>/images/slide-basedelposicionamiento-p-500x241.png 500w, <?php bloginfo('template_url')?>/images/slide-basedelposicionamiento-p-800x385.png 800w, <?php bloginfo('template_url')?>/images/slide-basedelposicionamiento-p-1080x520.png 1080w, <?php bloginfo('template_url')?>/images/slide-basedelposicionamiento.png 1218w">
          </div>
          <div class="slide-cmk w-slide"><img class="imgslider" sizes="(max-width: 1218px) 100vw, 1218px" src="<?php bloginfo('template_url')?>/images/slide-especialistasencontenido.png" srcset="<?php bloginfo('template_url')?>/images/slide-especialistasencontenido-p-500x241.png 500w, <?php bloginfo('template_url')?>/images/slide-especialistasencontenido-p-800x385.png 800w, <?php bloginfo('template_url')?>/images/slide-especialistasencontenido-p-1080x520.png 1080w, <?php bloginfo('template_url')?>/images/slide-especialistasencontenido.png 1218w">
          </div>
          <div class="slide-cmk w-slide"><img class="imgslider" sizes="(max-width: 1218px) 100vw, 1218px" src="<?php bloginfo('template_url')?>/images/slide-marketingdecontenido.png" srcset="<?php bloginfo('template_url')?>/images/slide-marketingdecontenido-p-500x241.png 500w, <?php bloginfo('template_url')?>/images/slide-marketingdecontenido-p-800x385.png 800w, <?php bloginfo('template_url')?>/images/slide-marketingdecontenido-p-1080x520.png 1080w, <?php bloginfo('template_url')?>/images/slide-marketingdecontenido.png 1218w">
          </div>
          <div class="slide-cmk w-slide"><img class="imgslider" sizes="(max-width: 1218px) 100vw, 1218px" src="<?php bloginfo('template_url')?>/images/slide-marketingestrategico.png" srcset="<?php bloginfo('template_url')?>/images/slide-marketingestrategico-p-500x241.png 500w, <?php bloginfo('template_url')?>/images/slide-marketingestrategico-p-800x385.png 800w, <?php bloginfo('template_url')?>/images/slide-marketingestrategico-p-1080x520.png 1080w, <?php bloginfo('template_url')?>/images/slide-marketingestrategico.png 1218w">
          </div>
          <div class="slide-cmk w-slide"><img class="imgslider" sizes="(max-width: 1218px) 100vw, 1218px" src="<?php bloginfo('template_url')?>/images/slide-tumarcatieneunahistoria.png" srcset="<?php bloginfo('template_url')?>/images/slide-tumarcatieneunahistoria-p-500x241.png 500w, <?php bloginfo('template_url')?>/images/slide-tumarcatieneunahistoria-p-800x385.png 800w, <?php bloginfo('template_url')?>/images/slide-tumarcatieneunahistoria-p-1080x520.png 1080w, <?php bloginfo('template_url')?>/images/slide-tumarcatieneunahistoria.png 1218w">
          </div>
        </div>
        <div class="displaynone w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="displaynone w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="w-round w-slider-nav"></div>
      </div><a href="<?php bloginfo('home'); ?>"><img class="logocentrodemarketing" src="<?php bloginfo('template_url')?>/images/logo.png"></a>
      <div class="slider-home-text w-slider" data-animation="slide" data-autoplay="1" data-delay="4000" data-duration="500" data-easing="ease-in-out" data-infinite="1">
        <div class="w-clearfix w-slider-mask">
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">Marketing de Contenido,<br>base del posicionamiento<br>presente y futuro de tu marca</h1>
          </div>
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">Especialistas en <br>desarrollo de <br>contenido</h1>
          </div>
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">El Marketing de contenido<br>debe transmitir historias<br>de gran impacto</h1>
          </div>
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">Hoy el contenido es<br>el centro de cualquier<br>estrategia de marketing</h1>
          </div>
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">Especialistas en <br>desarrollo de <br>contenido</h1>
          </div>
          <div class="textslide w-clearfix w-slide">
            <h1 class="textdeslidehome">Tu Marca tiene una<br>historia que tus clientes<br>merecen conocer</h1>
          </div>
        </div><a class="ctaslider w-button" href="<?php bloginfo('home'); ?>/?page_id=6">Conoce más de nosotros</a>
        <div class="displaynone w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="displaynone w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="displaynone w-round w-slider-nav"></div>
      </div>
    </header>