<div class="sidebarcat w-clearfix">
  <div class="categorias w-clearfix">
    <h2 class="categorias">Categorias</h2>
    <?php
    $terms = get_terms('category');
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
      foreach ( $terms as $term ) {
        $term_link = get_term_link( $term );
        if($term->term_id != 1){
          ?>
          <a class="unactext w-clearfix" href="<?php echo $term_link; ?>"><?php echo $term->name; ?><span class="cant">(<?php echo $term->count; ?>)</span></a>
          <?php
        }
      }

    }

    ?>


  </div>
  <div class="tabsrecientes w-tabs" data-duration-in="300" data-duration-out="100">
    <div class="w-clearfix w-tab-menu">
      <a class="unaficha w-inline-block w-tab-link" data-w-tab="Tab 1">
        <div class="textrecientes">Recientes</div>
      </a>
      <a class="unaficha w--current w-inline-block w-tab-link" data-w-tab="Tab 2">
        <div class="textrecientes">Más vistos</div>
      </a>
    </div>
    <div class="tabscont w-tab-content">
      <div class="w-clearfix w-tab-pane" data-w-tab="Tab 1">
       <?php
       $argslide = array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'order' => 'DESC'
        );
       $blogs = new WP_Query($argslide);
       while ($blogs->have_posts()):$blogs->the_post();
       $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
       $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail-blog');
       $thumb_tilte = get_post(get_post_thumbnail_id())->post_title;
       ?>

       <a href="<?php the_permalink(); ?>" class="unblogdetab w-clearfix">
         <img class="imgdeblogtab" src="<?php echo $post_thumbnail[0]; ?>">
         <div class="texttabs w-clearfix">
          <h4 class="tituldeblogtab"><?php the_title(); ?></h4>
          <div class="fechatab"><?php echo get_the_time('j F, Y'); ?></div>
        </div>
      </a>

      <?php
      endwhile;
      wp_reset_postdata();
      ?>

    </div>
    <div class="w--tab-active w-tab-pane" data-w-tab="Tab 2">
      <?php
      $post_vistos = $wpdb->get_results(
        "
        SELECT post_id
        FROM los_mas_vistos
        ORDER BY vistas DESC;
        "
        );
      foreach ( $post_vistos as $post_visto )
      {
        $post_thumbnail_v = wp_get_attachment_image_src(get_post_thumbnail_id($post_visto->post_id), 'thumbnail-blog');
        ?>
        <a href="<?php the_permalink(); ?>"  class="unblogdetab w-clearfix">
        <img class="imgdeblogtab" src="<?php echo $post_thumbnail_v[0]; ?>">
          <div class="texttabs w-clearfix">
            <h4 class="tituldeblogtab"><?php the_title(); ?></h4>
            <div class="fechatab"><?php echo get_the_time('j F, Y'); ?></div>
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="ctacontent">
    <h3 class="tituls">te interesa conocer las propuestasque tenemos para tu marca</h3><a class="ctahazunacita hazunac w-button" href="<?php bloginfo('home')?>/contactanos">Haz una cita</a>
  </div>
</div>
