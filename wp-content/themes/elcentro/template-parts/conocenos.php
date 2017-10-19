	<?php
/**
* Template Name: Conocenos
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
the_post();
get_header('interior');
?>
<img class="conocenosimg" sizes="(max-width: 703px) 100vw, 703px" src="<?php bloginfo('template_url')?>/images/conocenos.png" srcset="<?php bloginfo('template_url')?>/images/conocenos-p-500x480.png 500w, <?php bloginfo('template_url')?>/images/conocenos.png 703w">
<main class="content-home content-inter contenticons">
      <div class="contentcenter w-clearfix">
        <h1 class="conocenostitle">CONÓCENOS</h1>
        <div class="textconocenos">Hoy los consumidores se informan mucho más, antes de realizar una compra.</div>
        <div class="textoconocen w-clearfix">
          <h2 class="textprincipal">Cada vez es más complicado conectar con tu público objetivo y vivimos en una etapa en que las marcas deben de humanizar su mensaje, ya que la publicidad y estrategias tradicionales ya no son suficientes para alcanzar los objetivos.</h2>
          <div class="textconcos">Por esto nace El Centro de Marketing de Contenidos, una agencia que se centra en buscar que tu marca inspire, se innove, sea útil, resonante y amena a través de &nbsp;la creación de contenido que aporten valor real a tus consumidores utilizando canales de comunicación acorde a tu marca y presupuesto.
            <br>
            <br>Todo este trabajo lo realiza un equipo de profesionales que esta a tu disposición en las áreas de marketing estratégico, marketing digital, diseño gráfico, desarrolladores de contenidos, programadores, planificadores de medios, entre otros.</div>
          <div class="ctaconocenoscont w-clearfix">
            <h2 class="textdectaconocenos">Te interesa conocer las propuestas que tenemos para tu marca</h2><a class="ctahazunacita w-button" href="<?php bloginfo('home'); ?>/?page_id=12">Haz una cita</a>
          </div>
        </div>
      </div>
    </main>
<?php
get_footer();
?>