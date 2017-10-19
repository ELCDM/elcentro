<?php

get_header('interior'); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/el-centro-de-marketing-blog.webflow.css">
<div class="fondodesidebar"></div>
<main class="content-home content-inter contentblog contenticons">
  <div class="contentcenter w-clearfix">
    <div class="contenttitul">
      <h1 class="tituldeblog">CONTENIDO DE INTERÉS</h1>
    </div>
    <div class="contentblog w-clearfix">
      <div class="contentbloge w-clearfix">
<h2 class="tituldeblog"><?php single_term_title(); ?></h2>
<?php if ( have_posts() ) :   
      while ( have_posts() ) : the_post(); 
      $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'archivo-blog');
      $thumb_tilte = get_post(get_post_thumbnail_id())->post_title;
      $exist = $wpdb->get_row( "SELECT * FROM los_mas_vistos WHERE post_id =".$post->ID );
      $vistas = $exist->vistas;
      ?>
      
        <div class="unblogarchive w-clearfix">
        <img class="imgdeblogarch" src="<?php echo $post_thumbnail[0]; ?>">
          <div class="contentdeunblog w-clearfix">
            <div class="datosed w-clearfix">
              <div class="views">124 visitas</div>
              <div class="corazon views">18</div>
              <div class="fech views"><?php echo get_the_time('j F, Y'); ?></div>
            </div>
            <h1 class="tituldelblogs"><?php the_title(); ?></h1>
            <div class="extracblog"><?php the_excerpt(); ?></div>
            <a class="leermasbot w-button" href="<?php the_permalink(); ?>">Leer más</a>
          </div>
        </div>
<?php 
 endwhile;
    endif;
?>
        <a class="cargarmasnotas w-button" href="#">Cargar más notas</a>
      </div>

      <?php get_sidebar('blog'); ?>
    </div>
  </div>
</main>

<?php

get_footer();

