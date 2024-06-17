<?php
/**
 * Template Name: Página Contacto
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
<div class="hero-quienes-somos version-escritorio" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: 460px; background-size: cover; background-position: center; border-bottom:1px solid #eee;">
	<div class="container">
		<div class="row hero-cobertura animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-6 hero-left-cobertura">
				<h1 class="titulo-pagina-contacto animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-pagina-contacto animate__animated animate__fadeInUp">
                    <?php echo get_field('parrafo_hero'); ?>
				</h2>
				
			</div>
			<div class="col-6">
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>
<?php $image = get_field('imagen_hero_mobile');
if (!empty($image)) : ?>
<div class="hero-quienes-somos version-mobile" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: 530px; background-size: cover; background-position: center; border-bottom:1px solid #eee;">
	<div class="container">
		<div class="row hero-cobertura animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-12 hero-contacto">
				<h1 class="titulo-pagina-contacto animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-pagina-contacto animate__animated animate__fadeInUp">
                    <?php echo get_field('parrafo_hero'); ?>
				</h2>
				
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>

<div class="fondo" id="formulario" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Cuadricula-porque-elegirnos.webp'); width: 100%; height: auto; padding-bottom:30px; padding-top:30px; background-size: cover; background-position: center;">
<div class="container">
	<div class="row ">
		
		<div class="col-12 d-flex justify-content-center align-items-center flex-column">
			<p class="pre-titulo-contacto" style="color:#878787;"><?php echo get_field('subtitulo_seccion_contactanos'); ?></p>

			<h2 class="titulo-seccion-contacto-cto"><?php echo get_field('titulo_seccion_contactanos'); ?></h2>

			<p class="subtitulo-seccion-contacto-cto">
                <?php echo get_field('parrafo_seccion_contactanos'); ?>
			</p>	
		</div>

		<div class="col-2" id="mobile-none">
		</div>
		<div class="col-8" id="col-mobile-contacto">
			<form class="text-center" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
			  <div class="mb-3">
			    <input type="text" class="form-control" id="nombreapellido"  name="nombreapellido" placeholder="Nombre y Apellido" style="background-color:#EEEEEE; color:#878787;" required>
			  </div>
			  <div class="mb-3">
			    <input type="text" class="form-control" id="nombreempresa" name="nombreempresa" placeholder="Nombre Empresa" style="background-color:#EEEEEE; color:#878787;" required>
			  </div>
			  <div class="mb-3">
			    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="9 1111 1111" style="background-color:#EEEEEE; color:#878787;" pattern="[0-9]{1,12}" maxlength="9" title="Por favor, ingresa solo números (máximo 9 dígitos sin contar +56)" required>
			  </div>
			  <div class="mb-3">
			  	<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" autocomplete="email" style="background-color:#EEEEEE; color:#878787;" required>
			  </div>

  			  <p class="texto-rojo">¡Te llamaremos en 10 minutos para comenzar la revolución en tu logística!</p>


			  <div class="d-flex justify-content-center align-items-center">
			  	<button type="submit" class="custom-cta-red-contacto btn-16">Enviar <i class="bi bi-arrow-right-short"></i> </button>
                 <input type="hidden" name="action" value="custom_contact_form_second">
                     <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

			  </div>
			  <!-- <input type="submit" class="custom-cta-form" value="Enviar"> -->
			  
			</form>
		</div>
		<div class="col-2" id="mobile-none"></div>
	</div>
</div>
</div>

<div class="fondo version-escritorio" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Mancha-Roja-Testimonios.png'); width: 100%; height: auto;     padding-top: 40px;
    padding-bottom: 40px; background-size: cover; background-position: center;   background-color:#eee;    display: flex;
    justify-content: center;
    align-items: center; ">
    <div class="container">
    	<div class="row">
    		<div class="col-12 text-center">
    			<h2 class="titulo-seccion-conectate">
    				<?php echo get_field('ttitulo_seccion_conectate'); ?>
    			</h2>
    			<p class="subtitulo-seccion-conectate">
    				<?php echo get_field('parrafo_seccion_conectate'); ?>
    			</p>

    			<hr>

    			<div class="contenedor-seccion-conectate-cto">
    				<a href="mailto:<?php echo get_field('info_correo'); ?>" class="email"><?php echo get_field('info_correo'); ?></a>
    				<p class="mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp;<a href="tel:<?php echo get_field('telefono_solo_ventas'); ?>" class="texto-footer"><?php echo get_field('telefono_solo_ventas'); ?> <span style="font-size:13px;">(Solo Ventas)</span>.</a> </p>
    				<p class="mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp; <a href="tel:<?php echo get_field('telefono_contacto'); ?>" class="texto-footer"><?php echo get_field('telefono_contacto'); ?></a></p>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<div class="fondo version-mobile" style="background-image: url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/Mancha-Roja-Testimonios.png');     padding-bottom: 50px;
    padding-top: 30px; width: 100%; height: auto; background-size: cover; background-position: center;   background-color:#eee;    display: flex;
    justify-content: center;
    align-items: center; ">
    <div class="container">
    	<div class="row">
    		<div class="col-12 text-center">
    			<h2 class="titulo-seccion-conectate">
    				<?php echo get_field('ttitulo_seccion_conectate'); ?>
    			</h2>
    			<p class="subtitulo-seccion-conectate">
    				<?php echo get_field('parrafo_seccion_conectate'); ?>
    			</p>

    			<hr>

    			<div class="contenedor-seccion-conectate-cto">
    				<a href="mailto:<?php echo get_field('info_correo'); ?>" class="email"><?php echo get_field('info_correo'); ?></a>
    				<p class=" phone-call"><i class="bi bi-telephone-fill"></i>&nbsp;<a href="tel:<?php echo get_field('telefono_solo_ventas'); ?>" class="texto-footer"><?php echo get_field('telefono_solo_ventas'); ?> <span style="font-size:13px;">(Solo Ventas)</span>.</a> </p>
    				<p class="mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp; <a href="tel:<?php echo get_field('telefono_contacto'); ?>" class="texto-footer"><?php echo get_field('telefono_contacto'); ?></a></p>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</main>
<?php
get_footer();
?>