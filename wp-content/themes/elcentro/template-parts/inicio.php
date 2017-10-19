	<?php
/**
* Template Name: Inicio
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
the_post();
get_header();
?>

<main class="content-home contenticons w-clearfix">
	<div class="center-content w-clearfix">
		<div class="marketingdecontenido">
			<h2 class="subtitle">MARKETING DE CONTENIDO</h2>
			<div class="_3pilarescontent w-clearfix">
				<a class="unpilar w-inline-block" href="<?php bloginfo('home'); ?>/?page_id=8"><img class="imgpilar" src="<?php bloginfo('template_url')?>/images/imgpliar1.png">
				</a>
				<div class="coneccion"></div>
				<a class="pilar2 unpilar w-inline-block" href="<?php bloginfo('home'); ?>/?page_id=8"><img class="imgpilar" src="<?php bloginfo('template_url')?>/images/imgpliar2.png">
				</a>
				<div class="coneccion"></div>
				<a class="pilar2 unpilar w-inline-block" href="<?php bloginfo('home'); ?>/?page_id=8"><img class="imgpilar" src="<?php bloginfo('template_url')?>/images/imgpliar3.png">
				</a>
				<div class="textos w-clearfix">
					<div class="textpilares">A través de un enfoque estratégico&nbsp;</div>
					<div class="textpilares txt2">Se crea y distribuye contenido valioso</div>
					<div class="textpilares">Para atraer y fidelizar clientes potenciales</div>
				</div>
			</div>
		</div>
		<div class="conocemarketing w-clearfix" data-ix="ctahome">
			<div class="line"></div><img class="ctaimg" src="<?php bloginfo('template_url')?>/images/ctaimg.png">
			<h2 class="textcta">conoce como el<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; marketing de contenido te puede ayudar a mejorar</h2><a class="ctabut w-button" href="<?php bloginfo('home'); ?>/?page_id=8">Ir</a>
		</div>
	</div>
	<div class="servicios">
		<h2 class="serviciostitle subtitle">transformamos tu contenido en:</h2>
		<div class="grideservicios w-clearfix">
			<a class="servicio-web w-clearfix w-inline-block" data-ix="hoverservicio" href="<?php bloginfo('home'); ?>/?page_id=14"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-web.jpg">
				<div class="hoverservice"></div>
				<h4 class="textservice">Plataformas <br>Web</h4>
			</a>
			<div class="servicio-centro w-clearfix">
				<a class="servicio-campanias w-clearfix w-inline-block" data-ix="new-interaction2" href="<?php bloginfo('home'); ?>/?page_id=18"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-campania.jpg">
					<div class="hoverarriba hoverservice"></div>
					<h4 class="textservice">Campañas <br>publicitarias</h4>
				</a>
				<a class="documentos w-clearfix w-inline-block" data-ix="hoverservicio3" href="<?php bloginfo('home'); ?>/?page_id=21"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-documentos.jpg">
					<div class="hoverabajo hoverarriba hoverservice"></div>
					<h4 class="textservice">Documentos Impresos<br>y Digitales</h4>
				</a>
			</div>
			<div class="servicio-derecha w-clearfix"><a class="servicios-redes w-inline-block" data-ix="hoverser3" href="<?php bloginfo('home'); ?>/?page_id=28"><h4 class="textservice">Redes sociales</h4><img src="<?php bloginfo('template_url')?>/images/servicio-redes.jpg"><div class="hoverarriba hoverright hoverservice"></div></a>
			<a class="serviciorelacionespub w-clearfix w-inline-block" data-ix="hoverser3" href="<?php bloginfo('home'); ?>/?page_id=31"><img class="imgservicio" src="<?php bloginfo('template_url')?>/images/servicio-eventospublicitarios.jpg">
				<h4 class="textservice">Montaje de eventos<br> y relaciones públicas</h4>
				<div class="hoverarriba hoverright hoverservice"></div>
			</a>
		</div>
	</div><img class="circulo" sizes="(max-width: 767px) 88vw, (max-width: 991px) 58vw, 595px" src="<?php bloginfo('template_url')?>/images/circulo.png" srcset="<?php bloginfo('template_url')?>/images/circulo-p-500x580.png 500w, <?php bloginfo('template_url')?>/images/circulo.png 595w">
</div>
<div class="contenidodeinteres w-clearfix">
	<h2 class="titulblog">CONTENIDO DE INTERÉS</h2>
	<div class="textdesc">Lo más nuevo en marketing</div><a class="linvertodo" href="#">VER TODO</a>
	<div class="_3itemsblog w-clearfix">
		<a class="unblog w-clearfix w-inline-block" data-ix="bloghover" href="#"><img class="imgbloghome" src="<?php bloginfo('template_url')?>/images/imgblog1.png">
			<h2 class="titulbloghome">dolor sit amet, conseadipiscing eli</h2>
			<div class="desctext">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
		</a>
		<a class="unblog w-clearfix w-inline-block" data-ix="bloghover" href="#"><img class="imgbloghome" src="<?php bloginfo('template_url')?>/images/imgblog2.png">
			<h2 class="titulbloghome">dolor sit amet, conseadipiscing eli</h2>
			<div class="desctext">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
		</a>
		<a class="ult unblog w-clearfix w-inline-block" data-ix="bloghover" href="#"><img class="imgbloghome" src="<?php bloginfo('template_url')?>/images/imgblog3.png">
			<h2 class="titulbloghome">dolor sit amet, conseadipiscing eli</h2>
			<div class="desctext">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
		</a>
	</div>
</div>
</main>
<?php
get_footer();
?>