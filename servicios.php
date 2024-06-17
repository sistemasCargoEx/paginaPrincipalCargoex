<?php
/**
 * Template Name: Página Servicios
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>
<main>
<div class="contenedor-video-hero version-escritorio">
	<video autoplay muted  loop playsinline preload="metadata"> <!-- shortcuts: autoplay muted  -->
		<source src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/video/servicios-banner.mp4" type="video/mp4">
	</video>
	<div class="row hero-servicios animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-6 ">
				<h1 class="hero-servicios-titulo animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_seccion_servicios'); ?>
				</h1>
				<h2 class="hero-servicios-parrafo animate__animated animate__fadeInUp">
					<?php echo get_field('parrafo_seccion_servicios'); ?>
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15 animate__animated animate__fadeInUp">Conversemos <i class="bi bi-arrow-right-short"></i></a>
			</div>
			
		</div>
</div>

<div class="contenedor-video-hero version-mobile">
	<video autoplay muted  loop playsinline preload="metadata"> <!-- shortcuts: autoplay muted  -->
		<source src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/video/servicios-banner.mp4" type="video/mp4">
	</video>
	<div class="row hero-servicios animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-12">
				<h1 class="hero-servicios-titulo animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_seccion_servicios'); ?>
				</h1>
				<h2 class="hero-servicios-parrafo animate__animated animate__fadeInUp">
					<?php echo get_field('parrafo_seccion_servicios'); ?>
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15 animate__animated animate__fadeInUp">Conversemos <i class="bi bi-arrow-right-short"></i></a>
			</div>
			
		</div>
</div>

<div class="version-escritorio">
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="faq_main_container">
				<div class="faq_container">
					<div class="faq_question" id="logistica">
					  <div class="faq_question-text">
					    <div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Logistica-Distribucion-Inversa.webp" alt="Logística de distribución inversa"> 
					    </div>
					    <h3><?php echo get_field('titulo_slider_uno'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   	<div class="row">
					    	<div class="col-5">
					    	    <?php $image = get_field('imagen_slider_uno');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_uno'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="enviosTerrestres">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Envios-Terrestres-Expresos-Nacionales.webp" alt="Envíos Terrestres Expresos Nacionales">
					    </div>
					     <h3><?php echo get_field('titulo_slider_dos'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-5">
					    		<?php $image = get_field('imagen_slider_dos');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_dos'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestros&nbsp;Envíos <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="enviosAereos">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
							<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Envios-Aereos-Nacionales.webp" alt="Envíos Aereos Nacionales">
						</div>
					    <h3><?php echo get_field('titulo_slider_tres'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-5">
					    		<?php $image = get_field('imagen_slider_tres');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_tres'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestros&nbsp;Envíos <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="transporteEspecies">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Transporte-Especies-Valoradas.webp" alt="Transporte de Especies Valoradas">
					    </div>
					    <h3><?php echo get_field('titulo_slider_cuatro'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-5">
					    		<?php $image = get_field('imagen_slider_cuatro');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
                                <p class="texto-acordion-servicios">
					    		   <?php echo get_field('parrafo_slider_cuatro'); ?>
					    		</p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestros&nbsp;Envíos <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="distribucionSantiago">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Distribucion-Santiago.webp" alt="Distribución dentro de santiago">
						</div>
					     <h3><?php echo get_field('titulo_slider_cinco'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
	  				   <div class="row">
					    	<div class="col-5">
					    		<?php $image = get_field('imagen_slider_cinco');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_cinco'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="transporteRefrigerada">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Transporte-carga-refrigerada.webp" alt="Transporte de carga refrigerada">
					    </div>
					    <h3><?php echo get_field('titulo_slider_seis'); ?></h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-5">
					    		<?php $image = get_field('imagen_slider_seis');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-7 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_seis'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="#formulario">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="version-mobile">
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="faq_main_container">
				<div class="faq_container">
					<div class="faq_question" id="logistica">
					  <div class="faq_question-text">
					    <div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Logistica-Distribucion-Inversa.webp" alt="Logística de distribución inversa"> 
					    </div>
					    <h3>Logística de Distribución y Logística Inversa</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   	<div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_uno');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_uno'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="enviosTerrestres">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Envios-Terrestres-Expresos-Nacionales.webp" alt="Envíos Terrestres Expresos Nacionales">
					    </div>
					     <h3>Envíos Terrestres Expresos Nacionales (24, 48, 72 horas)</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_dos');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_dos'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestros&nbsp;Envíos <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="enviosAereos">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
							<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Envios-Aereos-Nacionales.webp" alt="Envíos Aereos Nacionales">
						</div>
					    <h3>Envíos Aéreos Nacionales</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_tres');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><strong><?php echo get_field('parrafo_slider_tres'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestros&nbsp;Envíos <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="transporteEspecies">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Transporte-Especies-Valoradas.webp" alt="Transporte de Especies Valoradas">
					    </div>
					    <h3>Transporte de Especies Valoradas</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_cuatro');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios">
					    		    <?php echo get_field('parrafo_slider_cuatro'); ?>
					    		</p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="distribucionSantiago">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Distribucion-Santiago.webp" alt="Distribución dentro de santiago">
						</div>
					     <h3>Distribución dentro de Santiago</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
	  				   <div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_cinco');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_cinco'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="faq_container">
					<div class="faq_question" id="transporteRefrigerada">
					  <div class="faq_question-text">
					  	<div class="contenedor-faq-img">
					    	<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Iconos-Transporte-carga-refrigerada.webp" alt="Transporte de carga refrigerada">
					    </div>
					    <h3>Transporte de carga refrigerada (medicamentos).</h3>
					  </div>
					  <div class="icon">
					    <div class="icon-shape"></div>
					  </div>
					</div>
					<div class="answercont">
					  <div class="answer">
					   <div class="row">
					    	<div class="col-12">
					    		<?php $image = get_field('imagen_slider_seis');
                                if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="imagen-acordion-servicios">
                                <?php endif; ?>
					    	</div>
					    	<div class="col-12 contenedor-info-acordion-servicios">
					    		<p class="texto-acordion-servicios"><?php echo get_field('parrafo_slider_seis'); ?></p>
					    		<span class="linea-card-info"></span>
					    		<a class="custom-btn-servicios btn-15" href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contrata&nbsp;Nuestro&nbsp;Servicio <i class="bi bi-arrow-right-short"></i></a>
					    	</div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="fondo" id="formulario" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/contenedor-contacto.webp'); width: 100%; height: auto; padding-bottom:30px; padding-top:30px; background-size: cover; background-position: center;">
<div class="container appear">
	<div class="row">
		
		<div class="col-12 d-flex justify-content-center align-items-center flex-column">
			<p class="pre-titulo-contacto">CONTÁCTANOS</p>

			<h2 class="titulo-seccion-contacto-servicios">¡Optimiza tu Logística con Nosotros!</h2>

			<p class="subtitulo-seccion-contacto-servicios">
				Contrata nuestros servicios hoy y experimenta soluciones a medida, eficientes y seguras para tus envíos y distribución. <strong>Transformamos la logística en una experiencia confiable y satisfactoria</strong>. Haz clic en contratar ahora, para conocer más sobre cómo podemos potenciar tu cadena de suministro.
			</p>	
		</div>
        
		<div class="col-2" id="mobile-none">
		</div>
		<div class="col-8" id="col-mobile-contacto">
			<form class="text-center" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
			  <div class="mb-3">
			    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre y Apellido" required>
			  </div>
			  <div class="mb-3">
			  	<input type="email" class="form-control" id="email" name="email"  placeholder="ejemplo@gmail.com" autocomplete="email" required>
			  </div>
			  <div class="mb-3">
			  	<textarea type="text" class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Por favor escribe tu mensaje aquí"></textarea>
			  </div>

			  <div class="d-flex justify-content-center align-items-center">
			  	<button type="submit" class="custom-cta-red-contacto btn-16">Contrata&nbsp;Ahora <i class="bi bi-arrow-right-short"></i> </button>
                <input type="hidden" name="action" value="custom_contact_form">
			  </div>
			  <!-- <input type="submit" class="custom-cta-form" value="Enviar"> -->
			  
			</form>
		</div>
		<div class="col-2" id="mobile-none"></div>
	</div>
</div>
</div>

</main>
<?php
get_footer();
?>