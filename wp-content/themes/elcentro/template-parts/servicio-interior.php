	<?php
/**
* Template Name: Servicio Interior
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
the_post();
get_header('interior');
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
?>
<main class="content-home content-inter contenticons contserv">
      <div class="centerservinte contentcenter w-clearfix"><a class="backservicios w-button"  href="<?php bloginfo('home')?>/?page_id=10">Servicios</a>
        <div class="servicint titlubox">
          <h1 class="titulservic"><?php the_title(); ?></h1>
        </div>
        
        <?php the_content(); ?>
        <div class="ctaintercontet">
          <h2 class="titulcta"><?php echo get_post_meta( $post->ID , "wpcf-text-cta" , true ); ?></h2><a class="hazunacita w-button" href="<?php bloginfo('home')?>/?page_id=12">HAZ UNA CITA</a>
        </div>
      </div>
    </main>
    <div class="imgcampanias imgserv" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>
<?php
get_footer();
?>