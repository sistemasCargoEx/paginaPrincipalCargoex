<?php
/**
 * Template Name: Página Cobertura
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
<div class="hero-quienes-somos version-escritorio" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: 540px; background-size: cover; background-position: center;">
	<div class="container">
		<div class="row hero-cobertura animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-6 hero-left-cobertura">
				<h1 class="titulo-hero-cobertura animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-hero-cobertura animate__animated animate__fadeInUp">
					<?php echo get_field('parrafo_hero'); ?>
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta-red-contacto btn-16 animate__animated animate__fadeInUp"><?php echo get_field('texto_boton_hero'); ?> <i class="bi bi-arrow-right-short"></i></a>
			</div>
			<div class="col-6">
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>
<?php $image = get_field('imagen_hero_mobile');
if (!empty($image)) : ?>
<div class="hero-cobertura version-mobile" style="background-image: url('<?php echo esc_url($image['url']); ?>'); width: 100%; height: 753px; background-size: cover; background-position: center;">
	<div class="container">
		<div class="row hero-cobertura animate__animated animate__fadeIn">
			<!-- HERO - Columnas divididas en 2 -->
			<div class="col-12 hero-left-cobertura">
				<h1 class="titulo-hero-cobertura animate__animated animate__fadeInUp">
					<?php echo get_field('titulo_hero'); ?>
				</h1>
				<h2 class="subtitulo-hero-cobertura animate__animated animate__fadeInUp">
                    <?php echo get_field('parrafo_hero'); ?>
				</h2>
				<a href="<?php bloginfo( 'wpurl' ); ?>/contacto/?#formulario" class="custom-cta-red-contacto btn-16 animate__animated animate__fadeInUp"><?php echo get_field('texto_boton_hero'); ?> <i class="bi bi-arrow-right-short"></i></a>
			</div>
		</div>		
	</div>
</div>
<?php endif; ?>
<div class="fondo" style="background:#fff; width: 100%; height: auto; background-size: cover; background-position: center;">
<div class="container">
	<div class="row">
   
		            <div class="col-12  d-flex justify-content-center align-items-center flex-column">
		            	<h2 class="titulo-seccion-explora">Explora Nuestra Red Nacional: Desde Arica hasta Punta Arenas</h2>

		             </div>
		            

	</div>
</div>
</div>

<div class="fondo" style="height: auto; padding-bottom: 30px;">

    <div class="container ">
    <div class="row">
      <div class="col-12 mt-3 d-flex justify-content-center align-items-center flex-column">
        <form class="formulario-explora">
        <select id="regionSelector" class="form-select">
          <option value="Arica">Arica</option>
          <option value="Iquique">Iquique</option>
          <option value="Antofagasta">Antofagasta</option>
          <option value="Calama">Calama</option>
          <option value="La Serena">La Serena</option>
          <option value="Valparaíso">Valparaíso</option>
          <option value="Quillota">Quillota</option>
          <option value="Viña del Mar">Viña del Mar</option>
          <option value="Rancagua">Rancagua</option>
          <option value="Santiago" selected>Santiago</option>
          <option value="Talca">Talca</option>
          <option value="Chillán">Chillán</option>
          <option value="Los Ángeles">Los Ángeles</option>
          <option value="Curicó">Curicó</option>
          <option value="Concepción">Concepción</option>
          <option value="Temuco">Temuco</option>
          <option value="Valdivia">Valdivia</option>
          <option value="Osorno">Osorno</option>
          <option value="Puerto Montt">Puerto Montt</option>
          <option value="Coyhaique">Coyhaique</option>
          <option value="Punta Arenas">Punta Arenas</option>
        </select>
        </form>
      </div>
      <div class="col-12 d-flex justify-content-center align-items-center flex-column">
        
        <p class="mt-5 arrastra">*Arrastra para ver todos los ramales</p>
        <div id="ramalinfo-container">
            <ul id="ramalinfo">
                <!-- Tus elementos <li> aquí -->
            </ul>
        </div>
        
        <p id="regionInfo" class="mt-3"></p>
      </div>
      <div class="col-12 mx-auto" style="width:91%; padding-bottom: 30px;">
        <div id="mapa-uno"></div>
      </div>
    </div>
</div>
</div>



</main>
<?php
get_footer();
?>