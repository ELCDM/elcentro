<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer class="footer">
      <div class="center-content w-clearfix">
        <div class="desctext textelcentro">El Centro de Marketing 2016. Todos los derechos reservados.</div>
        <div class="redes w-clearfix">
          <!--<a class="twtit w-inline-block" data-ix="redes" href="#"></a>
          <a class="insta w-inline-block" data-ix="redes" href="#"></a>-->
          <a class="fb w-inline-block" data-ix="redes" href="#"></a>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/webflow.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/action.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/source/jquery.fancybox.js?v=2.1.5"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/alertify.min.js"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php wp_footer(); ?>
</body>
</html>
