	<?php
/**
* Template Name: Servicios
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
the_post();
get_header('interior'); ?>
<main class="content-home content-inter contenticons contserv">
      <div class="centermktt contentcenter w-clearfix">
        <div class="titlubox titulserv">
          <h1 class="htitulse titulservic">SERVICIOS</h1>
        </div>
        <div class="textdeservicios">Todos nuestros servicios están enfocados para la conversión de usuarios a clientes, para que su marca pueda ver un verdadero retorno de su inversión, por esto nosotros transformamos su contenido en:</div>
        <div class="contentservice conteserv w-clearfix">
          <div class="grideservicios servgrid w-clearfix">
            <a class="servicio-web w-clearfix w-inline-block" data-ix="hoverservicio" href="<?php bloginfo('home')?>/?page_id=14"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-web.jpg">
              <div class="hoverservice"></div>
              <h4 class="textservice">Plataformas <br>Web</h4>
            </a>
            <div class="servicio-centro w-clearfix">
              <a class="servicio-campanias w-clearfix w-inline-block" data-ix="new-interaction2" href="<?php bloginfo('home')?>/?page_id=18"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-campania.jpg">
                <div class="hoverarriba hoverservice"></div>
                <h4 class="textservice">Campañas <br>publicitarias</h4>
              </a>
              <a class="documentos w-clearfix w-inline-block" data-ix="hoverservicio3" href="<?php bloginfo('home')?>/?page_id=21"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-documentos.jpg">
                <div class="hoverabajo hoverarriba hoverservice"></div>
                <h4 class="textservice">Documentos Impresos<br>y Digitales</h4>
              </a>
            </div>
            <div class="servicio-derecha w-clearfix"><a class="servicios-redes w-inline-block" data-ix="hoverser3" href="<?php bloginfo('home')?>/?page_id=28"><h4 class="textservice">Redes sociales</h4><img src="<?php bloginfo('template_url')?>/images/servicio-redes.jpg"><div class="hoverarriba hoverright hoverservice"></div></a>
              <a class="serviciorelacionespub w-clearfix w-inline-block" data-ix="hoverser3" href="<?php bloginfo('home')?>/?page_id=31"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-eventospublicitarios.jpg">
                <h4 class="textservice">Montaje de eventos<br>y relaciones públicas</h4>
                <div class="hoverarriba hoverright hoverservice"></div>
              </a>
            </div>
          </div>
          <div class="circuloservice"></div>
        </div>
      </div>
    </main>

<?php
get_footer();  ?>