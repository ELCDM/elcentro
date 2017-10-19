<?php
require_once "../../../../wp-config.php";
global $wpdb, $post;
$fecha = date("Y-m-d H:i:s");
$notas_quehay = intval($_REQUEST['num']);

$num_notas = $notas_quehay + 2;
$query = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page'=> $num_notas, 'offset' => $notas_quehay ) );
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
