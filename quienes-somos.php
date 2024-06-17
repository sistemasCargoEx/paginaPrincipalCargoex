<?php
/**
 * Template Name: Página Quienes Somos
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
<?php $image = get_field('imagen_hero');
if (!empty($image)) : ?>
<div class="hero-quienes-somos version-escritorio" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: 511px; background-size: cover; background-position: center;">
	<div class="container">
		<div class="row hero-quienes-somos animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-6 hero-left-quienes-somos">
				<h1 class="titulo-hero-quienes-somos animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-hero-quienes-somos animate__animated animate__fadeInUp">
				    <?php echo get_field('parrafo_hero'); ?>	
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15 animate__animated animate__fadeInUp"><?php echo get_field('texto_boton_hero'); ?> <i class="bi bi-arrow-right-short"></i></a>
			</div>
			<div class="col-6">
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>

<?php $image = get_field('imagen_hero_mobile');
if (!empty($image)) : ?>
<div class="hero-quienes-somos version-mobile" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: auto; margin-bottom: 30px; background-size: cover; background-position: center;">
	<div class="container">
		<div class="row hero-quienes-somos animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-12 hero-left-quienes-somos">
				<h1 class="titulo-hero-quienes-somos animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-hero-quienes-somos animate__animated animate__fadeInUp">
					<?php echo get_field('parrafo_hero'); ?>
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15 animate__animated animate__fadeInUp"><?php echo get_field('texto_boton_hero'); ?> <i class="bi bi-arrow-right-short"></i></a>
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>
<div class="container mb-4">
		<div class="row diferenciacion">	
				<div class="col-12">
					<h2 class="text-center titulo-seccion-diferenciacion"><?php echo get_field('titulo_seccion_diferenciacion'); ?></h2>
				</div>
		
		<div class="col-12 p-0">

			<div class="carousel carousel-diferenciacion">
				<div class="carousel-card-qs" >
					<div class="contenedor-texto-carousel-card-qs">
					<h2 class="titulo-card"><?php echo get_field('titulo_diferenciacion_uno'); ?></h2>
					<p class="parrafo-card"><?php echo get_field('parrafo_diferenciacion_uno'); ?></p>
					</div>
					<?php $image = get_field('imagen_diferenciacion_uno');
                    if (!empty($image)) : ?>
					<div class="contenedor-imagen-carousel-card-qs" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
					</div>
	  				<?php endif; ?>
				</div>
				<div class="carousel-card-qs" >
					<div class="contenedor-texto-carousel-card-qs">
					<h2 class="titulo-card"><?php echo get_field('titulo_diferenciacion_dos'); ?></h2>
					<p class="parrafo-card"><?php echo get_field('parrafo_diferenciacion_dos'); ?></p>
					</div>
					<?php $image = get_field('imagen_diferenciacion_dos');
                    if (!empty($image)) : ?>
					<div class="contenedor-imagen-carousel-card-qs" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
					</div>
	  				<?php endif; ?>
				</div>
				<div class="carousel-card-qs" >
					<div class="contenedor-texto-carousel-card-qs">
					<h2 class="titulo-card"><?php echo get_field('titulo_diferenciacion_tres'); ?></h2>
					<p class="parrafo-card"><?php echo get_field('parrafo_diferenciacion_tres'); ?></p>
					</div>
					<?php $image = get_field('imagen_diferenciacion_tres');
                    if (!empty($image)) : ?>
					<div class="contenedor-imagen-carousel-card-qs" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
					</div>
	  				<?php endif; ?>
				</div>
				<div class="carousel-card-qs" >
					<div class="contenedor-texto-carousel-card-qs">
					<h2 class="titulo-card"><?php echo get_field('titulo_diferenciacion_cuatro'); ?></h2>
					<p class="parrafo-card"><?php echo get_field('parrafo_diferenciacion_cuatro'); ?></p>
					</div>
					<?php $image = get_field('imagen_diferenciacion_cuatro');
                    if (!empty($image)) : ?>
					<div class="contenedor-imagen-carousel-card-qs" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
					</div>
	  				<?php endif; ?>
				</div>
				<div class="carousel-card-qs" >
					<div class="contenedor-texto-carousel-card-qs">
					<h2 class="titulo-card"><?php echo get_field('titulo_diferenciacion_cinco'); ?></h2>
					<p class="parrafo-card"><?php echo get_field('parrafo_diferenciacion_cinco'); ?></p>
					</div>
					<?php $image = get_field('imagen_diferenciacion_cinco');
                    if (!empty($image)) : ?>
					<div class="contenedor-imagen-carousel-card-qs" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
					</div>
	  				<?php endif; ?>
				</div>
			</div>
	    </div>
	</div>
</div>

<div class="fondo version-escritorio" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/contenedor-contacto.png'); width: 100%; height: auto; padding-top: 30px; padding-bottom: 30px; background-size: cover; background-position: center;     justify-content: center;
    align-items: center;
    flex-direction: column;">
    
    <div class="container">
    	<div class="row">
    		<div class="col-12 d-flex justify-content-center align-items-center flex-column">
    			<h2 class="titulo-seccion-lideres">
    				<?php echo get_field('titulo_seccion_directorio'); ?>
    			</h2>
    			<p class="subtitulo-seccion-lideres">
    				<?php echo get_field('parrafo_seccion_directorio'); ?>
    			</p>
    		</div>
    	</div>
    </div>
    
    
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-12 p-0 cards-anchor">
    			
    			<div class="card-anchor">
    				<div class="perfil-anchor">
				    <?php $image = get_field('imagen_directorio_uno');
                    if (!empty($image)) : ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
					<?php endif; ?>    
					<?php $image = get_field('imagen_directorio_uno_hover');
                    if (!empty($image)) : ?>    
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
	  				<?php endif; ?>
    				</div>
    				<div class="card-info">
    					<h2><?php echo get_field('titulo_directorio_uno'); ?></h2>
    					<h3><?php echo get_field('cargo_directorio_uno'); ?></h3>
    					<span class="linea-card-info"></span>
    					<p>
                            <?php echo get_field('parrafo_directorio_uno'); ?>
    					</p>
    					<!--<div class="card-links">-->
    					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_uno'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_uno'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
    					<!--</div>-->
    				</div>
    			</div>
    
    			<div class="card-anchor">
    				<div class="perfil-anchor">
				    <?php $image = get_field('imagen_directorio_dos');
                    if (!empty($image)) : ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
					<?php endif; ?>    
					<?php $image = get_field('imagen_directorio_dos_hover');
                    if (!empty($image)) : ?>    
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
	  				<?php endif; ?>
    				</div>
    				<div class="card-info">
    					<h2><?php echo get_field('titulo_directorio_dos'); ?></h2>
    					<h3><?php echo get_field('cargo_directorio_dos'); ?></h3>
    					<span class="linea-card-info"></span>
    					<p>
                            <?php echo get_field('parrafo_directorio_dos'); ?>
    					</p>
    					<!--<div class="card-links">-->
    					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_dos'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php //  echo get_field('linkedin_directorio_dos'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
    					<!--</div>-->
    				</div>
    			</div>
    			
    			<div class="card-anchor">
    				<div class="perfil-anchor">
				    <?php $image = get_field('imagen_directorio_tres');
                    if (!empty($image)) : ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
					<?php endif; ?>    
					<?php $image = get_field('imagen_directorio_tres_hover');
                    if (!empty($image)) : ?>    
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
	  				<?php endif; ?>
    				</div>
    				<div class="card-info">
    					<h2><?php echo get_field('titulo_directorio_tres'); ?></h2>
    					<h3><?php echo get_field('cargo_directorio_tres'); ?></h3>
    					<span class="linea-card-info"></span>
    					<p>
                            <?php echo get_field('parrafo_directorio_tres'); ?>
    					</p>
    					<!--<div class="card-links">-->
    					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_tres'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_tres'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
    					<!--</div>-->
    				</div>
    			</div>
    			
    			<div class="card-anchor">
    				<div class="perfil-anchor">
				    <?php $image = get_field('imagen_directorio_cuatro');
                    if (!empty($image)) : ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
					<?php endif; ?>    
					<?php $image = get_field('imagen_directorio_cuatro_hover');
                    if (!empty($image)) : ?>    
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
	  				<?php endif; ?>
    				</div>
    				<div class="card-info">
    					<h2><?php echo get_field('titulo_directorio_cuatro'); ?></h2>
    					<h3><?php echo get_field('cargo_directorio_cuatro'); ?></h3>
    					<span class="linea-card-info"></span>
    					<p>
                            <?php echo get_field('parrafo_directorio_cuatro'); ?>
    					</p>
    					<div class="card-links d-none">
    						<a class="custom-btn btn-15" href="<?php echo get_field('conectemos_directorio_cuatro'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php echo get_field('linkedin_directorio_cuatro'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>
    					</div>
    				</div>
    			</div>
    			
    		</div>
    	</div>
    </div>
    
</div>

<div class="fondo version-mobile" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/bg-nav-mobile.jpg'); width: 100%; height: auto; padding-bottom:30px; background-size: cover; background-position: center;     justify-content: center;
    align-items: center;
    flex-direction: column;">
    
    <div class="container">
    	<div class="row">
    		<div class="col-12 d-flex justify-content-center align-items-center flex-column">
    			<h2 class="titulo-seccion-lideres">
    				<?php echo get_field('titulo_seccion_directorio'); ?>
    			</h2>
    			<p class="subtitulo-seccion-lideres">
    				<?php echo get_field('parrafo_seccion_directorio'); ?>
				</p>
    		</div>
    	</div>
    </div>
    
    
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-12 p-0 cards-anchor">

            			<div class="card-anchor">
            				<div class="perfil-anchor">
        				    <?php $image = get_field('imagen_directorio_uno');
                            if (!empty($image)) : ?>
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
        					<?php endif; ?>    
        					<?php $image = get_field('imagen_directorio_uno_hover');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
        	  				<?php endif; ?>
            				</div>
            				<div class="card-info">
            					<h2><?php echo get_field('titulo_directorio_uno'); ?></h2>
            					<h3><?php echo get_field('cargo_directorio_uno'); ?></h3>
            					<span class="linea-card-info"></span>
            					<p>
                                    <?php echo get_field('parrafo_directorio_uno'); ?>
            					</p>
            					<!--<div class="card-links">-->
            					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_uno'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_uno'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
            					<!--</div>-->
            				</div>
            			</div>
            
            			<div class="card-anchor">
            				<div class="perfil-anchor">
        				    <?php $image = get_field('imagen_directorio_dos');
                            if (!empty($image)) : ?>
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
        					<?php endif; ?>    
        					<?php $image = get_field('imagen_directorio_dos_hover');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
        	  				<?php endif; ?>
            				</div>
            				<div class="card-info">
            					<h2><?php echo get_field('titulo_directorio_dos'); ?></h2>
            					<h3><?php echo get_field('cargo_directorio_dos'); ?></h3>
            					<span class="linea-card-info"></span>
            					<p>
                                    <?php echo get_field('parrafo_directorio_dos'); ?>
            					</p>
            					<!--<div class="card-links">-->
            					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_dos'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_dos'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
            					<!--</div>-->
            				</div>
            			</div>
            			
            			<div class="card-anchor">
            				<div class="perfil-anchor">
        				    <?php $image = get_field('imagen_directorio_tres');
                            if (!empty($image)) : ?>
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
        					<?php endif; ?>    
        					<?php $image = get_field('imagen_directorio_tres_hover');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
        	  				<?php endif; ?>
            				</div>
            				<div class="card-info">
            					<h2><?php echo get_field('titulo_directorio_tres'); ?></h2>
            					<h3><?php echo get_field('cargo_directorio_tres'); ?></h3>
            					<span class="linea-card-info"></span>
            					<p>
                                    <?php echo get_field('parrafo_directorio_tres'); ?>
            					</p>
            					<!--<div class="card-links">-->
            					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_tres'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_tres'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
            					<!--</div>-->
            				</div>
            			</div>
            			
            			<div class="card-anchor">
            				<div class="perfil-anchor">
        				    <?php $image = get_field('imagen_directorio_cuatro');
                            if (!empty($image)) : ?>
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-uno">
        					<?php endif; ?>    
        					<?php $image = get_field('imagen_directorio_cuatro_hover');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="perfil-dos">
        	  				<?php endif; ?>
            				</div>
            				<div class="card-info">
            					<h2><?php echo get_field('titulo_directorio_cuatro'); ?></h2>
            					<h3><?php echo get_field('cargo_directorio_cuatro'); ?></h3>
            					<span class="linea-card-info"></span>
            					<p>
                                    <?php echo get_field('parrafo_directorio_cuatro'); ?>
            					</p>
            					<!--<div class="card-links">-->
            					<!--	<a class="custom-btn btn-15" href="<?php // echo get_field('conectemos_directorio_cuatro'); ?>">Conectemos <i class="bi bi-arrow-right-short"></i></a> <a href="<?php // echo get_field('linkedin_directorio_cuatro'); ?>" class="perfil-lk"><i class="bi bi-linkedin"></i></a>-->
            					<!--</div>-->
            				</div>
            			</div>
    		        </div>
    		        
    		    </div>

    </div>
</div>

<!--<div class="fondo version-escritorio" style="background-image: url('<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Mancha-Roja-Testimonios.png'); width: 100%; height: 506px; background-size: cover; background-position: center;   background-color:#eee;    display: flex;-->
<!--    justify-content: center;-->
<!--    align-items: center; ">-->
	

<!--<div class="container appear" >-->
<!--	<div class="row testimonios">		-->
<!--		<div class="col-6">-->
<!--			<h2 class="titulo-seccion-testimonio">Voces que Impulsan Nuestra Excelencia Logística</h2>-->
<!--			<p class="subtitulo-seccion-testimonio">Descubre cómo en CargoEx, <strong>la excelencia logística no solo transforma envíos, sino también vidas</strong>. Explora testimonios inspiradores de nuestro equipo.</p>-->
<!--			<a href="<?php // bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15">Contáctanos <i class="bi bi-arrow-right-short"></i></a>-->
<!--		</div>-->

<!--		<div class="col-6 ">	-->
	
<!--			<div class="slider">-->
<!--			  <div class="slider-content">-->
<!--			    <div class="card animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<img src="<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Testimonios-01.png" alt="Matt Cannon">-->
<!--				  	<div class="info"> -->
<!--				      <h2>Matt Cannon</h2>-->
<!--				      <p>Head of Marketing</p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--			      	<hr>-->
<!--			      	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores eius mollitia ut modi quo quibusdam quasi nihil officiis sunt odio. Dicta ipsum cupiditate eaque saepe, ad quasi porro ratione, a?</p>-->
<!--			      	<hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p>Nombre de la compañía</p>-->
<!--			      </div>-->
			      

<!--			    </div>-->
<!--			    <div class="card animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<img src="<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Testimonios-01.png" alt="Matt Cannon">-->
<!--				  	<div class="info"> -->
<!--				      <h2>Matt Cannon</h2>-->
<!--				      <p>Head of Marketing</p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--			      	<hr>-->
<!--			      	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores eius mollitia ut modi quo quibusdam quasi nihil officiis sunt odio. Dicta ipsum cupiditate eaque saepe, ad quasi porro ratione, a?</p>-->
<!--			      	<hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p>Nombre de la compañía</p>-->
<!--			      </div>-->
			      

<!--			    </div>-->
<!--			    <div class="card animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<img src="<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Testimonios-01.png" alt="Matt Cannon">-->
<!--				  	<div class="info"> -->
<!--				      <h2>Matt Cannon</h2>-->
<!--				      <p>Head of Marketing</p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--			      	<hr>-->
<!--			      	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores eius mollitia ut modi quo quibusdam quasi nihil officiis sunt odio. Dicta ipsum cupiditate eaque saepe, ad quasi porro ratione, a?</p>-->
<!--			      	<hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p>Nombre de la compañía</p>-->
<!--			      </div>-->
			      

<!--			    </div>-->
<!--			  </div>-->
<!--			  <button class="boton-slider prev"><i class="bi bi-arrow-left-short"></i></button>-->
<!--			  <button class="boton-slider next"><i class="bi bi-arrow-right-short"></i></button>-->
<!--			</div>-->
<!--		</div>-->
<!--    </div>-->
<!--</div>	-->
<!--</div>	-->
<!--<div class="fondo version-mobile" style="background-image: url('<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Mancha-Roja-Testimonios.png'); width: 100%; height: auto; background-size: cover; background-position: center;   background-color:#eee;    display: flex;-->
<!--    justify-content: center;-->
<!--    align-items: center; ">-->
	
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--	        <h2 class="titulo-seccion-testimonio"><?php // echo get_field('titulo_seccion_revolucion'); ?></h2>-->
<!--			<p class="subtitulo-seccion-testimonio"><?php // echo get_field('parrafo_seccion_revolucion'); ?></p>-->
<!--			<a href="<?php // bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta btn-15">Conversemos <i class="bi bi-arrow-right-short"></i></a>-->
		    
<!--		    <div class="slider">-->
<!--              <div class="slider-content mt-5">-->
<!--                <div class="card-nuevo animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<?php // $image = get_field('imagen_slider_revolucion_uno'); if (!empty($image)) : ?>-->
<!--                        <img src="<?php // echo esc_url($image['url']); ?>" alt="<?php // echo esc_attr($image['alt']); ?>" >-->
<!--                    <?php // endif; ?>-->
<!--				  	<div class="info"> -->
<!--				      <h2><?php // echo get_field('titulo_slider_revolucion_uno'); ?></h2>-->
<!--				      <p><?php // echo get_field('subtitulo_slider_revolucion_uno'); ?></p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--	      	      <hr>-->
<!--                    <p><?php // echo get_field('parrafo_slider_revolucion_uno'); ?></p>-->
<!--                  <hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p><?php // echo get_field('nombre_de_la_compania_slider_revolucion_uno'); ?></p>-->
<!--			      </div>-->
<!--			    </div>-->
<!--			    <div class="card-nuevo animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<?php // $image = get_field('imagen_slider_revolucion_dos'); if (!empty($image)) : ?>-->
<!--                        <img src="<?php // echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >-->
<!--                    <?php // endif; ?>-->
<!--				  	<div class="info"> -->
<!--				       <h2><?php // echo get_field('titulo_slider_revolucion_dos'); ?></h2>-->
<!--				      <p><?php // echo get_field('subtitulo_slider_revolucion_dos'); ?></p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--			      	<hr>-->
<!--                    <p><?php // echo get_field('parrafo_slider_revolucion_dos'); ?></p>			      	-->
<!--                    <hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p><?php // echo get_field('nombre_de_la_compania_slider_revolucion_dos'); ?></p>-->
<!--			      </div>-->
<!--			    </div>-->
<!--			    <div class="card-nuevo animate__animated animate__fadeIn">-->
<!--			      <div class="cabecera animate__animated animate__fadeInUp">-->
<!--			      	<?php // $image = get_field('imagen_slider_revolucion_tres'); if (!empty($image)) : ?>-->
<!--                        <img src="<?php // echo esc_url($image['url']); ?>" alt="<?php // echo esc_attr($image['alt']); ?>" >-->
<!--                    <?php // endif; ?>-->
<!--				  	<div class="info"> -->
<!--				      <h2><?php // echo get_field('titulo_slider_revolucion_tres'); ?></h2>-->
<!--				      <p><?php // echo get_field('subtitulo_slider_revolucion_tres'); ?></p>-->
<!--			      	</div> -->
<!--			      </div>-->
<!--			      <div class="cuerpo animate__animated animate__fadeInUp">-->
<!--			      	<hr>-->
<!--                    <p><?php //echo get_field('parrafo_slider_revolucion_tres'); ?></p>-->
<!--			      	<hr>-->
<!--			      </div>-->
<!--			      <div class="pie animate__animated animate__fadeInUp">-->
<!--			      	<p><?php // echo get_field('nombre_de_la_compania_slider_revolucion_tres'); ?></p>-->
<!--			      </div>-->
<!--			    </div>-->
<!--              </div>-->
<!--              <button class="boton-slider prev prev-nuevo"><i class="bi bi-arrow-left-short"></i></button>-->
<!--              <button class="boton-slider next next-nuevo"><i class="bi bi-arrow-right-short"></i></button>-->
<!--            </div>-->

<!--	    </div>-->
<!--	</div>-->
<!--</div>-->

<!--</div>	-->

<div class="fondo" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/cuadricula-galeria.png'); width: 100%; height: auto; background-size: cover; background-position: center; padding-bottom: 30px;justify-content:center; align-items:center; flex-direction:column;">
	<div class="container appear">
		<div class="row">		
			<div class="col-12 d-flex justify-content-center align-items-center flex-column">
				<h2 class="text-center titulo-excelencia-seccion">Logística, infraestructura y nuestro valioso equipo humano</h2>
				<p class="subtitulo-seccion-excelencia">Descubre cómo en CargoEx, <strong>la excelencia cobra vida en cada detalle </strong>.</p>
			</div>
		</div>	
	</div>	
	<div class="container-fluid ">
		<div class="row ">	
			<div class="slider-qs version-escritorio">
			  	<div class="slider-content">	
					<div class="contenedor animate__animated animate__fadeIn" style="">
						<div class="category_container">
							<div class="content">
							<?php $image = get_field('qs_galeria_uno');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
        	  				<?php endif; ?>
        	  				<?php $image = get_field('qs_galeria_uno_copy');
                            if (!empty($image)) : ?>    
        					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
        	  				<?php endif; ?>
							</div>
							<div class="content version-escritorio" style="--active: 1;    width: calc(60% - var(--gap))!important;">
							    <video autoplay muted  loop playsinline preload="metadata" class="professio_image"> 
                        		    <source src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/institucional-cargoex.mp4" type="video/mp4">
                        	    </video>
							</div>
							<!--<div class="content version-mobile" >-->
							<!--    <video autoplay muted  loop playsinline preload="metadata" class="professio_image"> -->
       <!--                 		    <source src="<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/institucional-cargoex.mp4" type="video/mp4">-->
       <!--                 	    </video>-->
							<!--</div>-->
							<div class="content">
								<?php $image = get_field('qs_galeria_tres');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_tres_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_cuatro');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_cuatro_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
						</div>
					<div class="category_container">
							<div class="content">
								<?php $image = get_field('qs_galeria_cinco');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_cinco_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_seis');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_seis_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_siete');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_siete_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_ocho');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_ocho_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="contenedor animate__animated animate__fadeIn " style="display: none;">
						<div class="category_container">
							<div class="content">
								<?php $image = get_field('qs_galeria_nueve');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_nueve_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_diez');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_diez_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_once');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_once_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_doce');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_doce_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
						</div>
						<div class="category_container">
							<div class="content">
								<?php $image = get_field('qs_galeria_trece');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_trece_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_catorce');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_catorce_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_quince');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_quince_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
							<div class="content">
								<?php $image = get_field('qs_galeria_dieciseis');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="professio_image">
            	  				<?php endif; ?>
            	  				<?php $image = get_field('qs_galeria_dieciseis_copy');
                                if (!empty($image)) : ?>    
            					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="profile_image">
            	  				<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				
				

				<div class="contenedor-botones-slider">
					<button class="prev"><i class="bi bi-arrow-left-short"></i></button>
				  	<button class="next"><i class="bi bi-arrow-right-short"></i></button>					
				</div>

			
			</div>
		
		    <div class="slider-qs version-mobile">
    			  	<div class="slider-content">
        				<div class="contenedor-mobile animate__animated animate__fadeIn" style="">
    						<div class="category_container">
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/atencion-clientes.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/atencion-clientes.jpg" class="profile_image" alt="Profile">
    							</div>
    							<div class="content">
    							    <video autoplay="" muted="" loop="" playsinline="" preload="metadata" class="professio_image"> 
                            		    <source src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/institucional-cargoex.mp4" type="video/mp4">
                            	    </video>
    							</div>
    						</div>
    					    <div class="category_container">
    					        <div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/callcenter-24hrs.jpg" class="professio_image" alt="Profession">
								    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/callcenter-24hrs.jpg" class="profile_image" alt="Profile">
    							</div>
    							
    							<div class="content">
    							    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/carga-refrigerada.jpg" class="professio_image" alt="Profession">
								    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/carga-refrigerada.jpg" class="profile_image" alt="Profile">
    							</div>
    							
						    </div>
				        </div>
				        <div class="contenedor-mobile animate__animated animate__fadeIn" style="">
    						<div class="category_container">
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/conectividad-tiemporeal.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/conectividad-tiemporeal.jpg" class="profile_image" alt="Profile">
    							</div>
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/ventas-cargoex.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/ventas-cargoex.jpg" class="profile_image" alt="Profile">
    							</div>
    						</div>
    					    <div class="category_container">
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/filosofia-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/filosofia-cargoex.jpg" class="profile_image" alt="Profile">
    							</div>
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/flota-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/flota-cargoex.jpg" class="profile_image" alt="Profile">
    							</div>
						    </div>
				        </div>
				        
				        <div class="contenedor-mobile animate__animated animate__fadeIn" style="">
    						<div class="category_container">
							<div class="content">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/grupo-humano-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/grupo-humano-cargoex.jpg" class="profile_image" alt="Profile">
							</div>
							<div class="content">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/inclusion-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/inclusion-cargoex.jpg" class="profile_image" alt="Profile">
							</div>
    						</div>
    					    <div class="category_container">
    							<div class="content">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/tecnologia-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/tecnologia-cargoex.jpg" class="profile_image" alt="Profile">
							</div>
							<div class="content">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/logistica-cargoex.jpg" class="professio_image" alt="Profession">
								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/logistica-cargoex.jpg" class="profile_image" alt="Profile">
							</div>
						    </div>
				        </div>
				        <div class="contenedor-mobile animate__animated animate__fadeIn" style="">
    						<div class="category_container">
    				            <div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/logistica-envios.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/logistica-envios.jpg" class="profile_image" alt="Profile">
    							</div>
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/jovenes-cargoex.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/jovenes-cargoex.jpg" class="profile_image" alt="Profile">
    							</div>
    				        </div>
    				        <div class="category_container">
    				            <div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/ramal-santiago.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/ramal-santiago.jpg" class="profile_image" alt="Profile">
    							</div>
    							<div class="content">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/envios-zonanorte.jpg" class="professio_image" alt="Profession">
    								<img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/galeria/envios-zonanorte.jpg" class="profile_image" alt="Profile">
    							</div>
    				        </div>
    				    </div>
				    </div>
				    <div class="contenedor-botones-slider">
					<button class="prev"><i class="bi bi-arrow-left-short"></i></button>
				  	<button class="next"><i class="bi bi-arrow-right-short"></i></button>					
				</div>
				</div>
		
		</div>
	</div>
</div>
</main>
<?php
get_footer();
?>