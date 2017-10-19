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
        <div class="aqui_las_notas">
         <?php
         $count_posts = wp_count_posts('blog');
         $blogs = intval($count_posts->publish);
         $num_notas = 3;
         $query = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page'=> $num_notas ) );
         while ($query->have_posts()):$query->the_post();
         $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'archivo-blog');
         $thumb_tilte = get_post(get_post_thumbnail_id())->post_title;
         $exist = $wpdb->get_row( "SELECT * FROM los_mas_vistos WHERE post_id =".$post->ID );
         $vistas = $exist->vistas;
         ?>

         <div class="unblogarchive w-clearfix"><img class="imgdeblogarch" src="<?php echo $post_thumbnail[0]; ?>">
          <div class="contentdeunblog w-clearfix">
            <div class="datosed w-clearfix">
              <div class="views"><?php if($vistas >= 3){ echo ' '.$vistas; } else { echo " 3"; }?> visitas</div>
              <div class="fech views"><?php echo get_the_time('j F, Y'); ?></div>
            </div>
            <h1 class="tituldelblogs"><?php the_title(); ?></h1>
            <div class="extracblog"><?php the_excerpt(); ?></div>
            <a class="leermasbot w-button" href="<?php the_permalink(); ?>">Leer más</a>
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
      <?php if($blogs > 3 ) { ?>
      <a id="cargarmas" class="cargarmasnotas w-button" num_notas="<?php echo $num_notas; ?>" href="#">Cargar más notas</a>
      <?php } ?>
    </div>
  
<?php get_sidebar('blog'); ?>
  </div>
</div>
</main>





<?php

get_footer();
