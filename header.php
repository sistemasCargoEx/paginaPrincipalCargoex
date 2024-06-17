<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CargoEx
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cargo EX - Tu Socio Logístico de Confianza</title>
	<meta name="description" content="Cargo EX ofrece soluciones logísticas integrales para satisfacer tus necesidades de transporte. Contáctanos hoy para obtener servicios de calidad y confiabilidad.">
	<meta name="keywords" content="Cargo logística, transporte, soluciones logísticas, envíos, distribución">
	<meta name="author" content="Cargo EX">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="geo.region" content="CL">
	<meta name="geo.placename" content="Chile">
	<link rel="canonical" href="<?php bloginfo( 'wpurl' ); ?>">
	<link rel="alternate" hreflang="es" href="https://www.cargoex.cl">
	<link rel="icon" href="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/favicon/CargoEX.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Inicio header Escritorio -->
<header class="header animate__animated animate__fadeInDown version-escritorio" id="header">
	<!-- Menú principal -->
	<nav class="navbar navbar-expand-lg">
	  <div class="container">
	  	<!-- Logotipo -->
	    <a class="navbar-brand" href="<?php bloginfo( 'wpurl' ); ?>"><img id="logo" class="logo" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/svg/CargoEx-Logo.svg" alt="CargoEx"></a>
	    <!-- Navegacion -->
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link nav-nuevo" href="<?php bloginfo( 'wpurl' ); ?>">
	          	Home 
	          </a>

	        </li>
	        <li class="nav-item">
	          <a class="nav-link nav-nuevo" href="<?php bloginfo( 'wpurl' ); ?>/quienes-somos/">Quienes&nbsp;Somos </a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link nav-nuevo" href="<?php bloginfo( 'wpurl' ); ?>/servicios/">Servicios </a>
	        </li>
	   		<li class="nav-item">
	          <a class="nav-link nav-nuevo" href="<?php bloginfo( 'wpurl' ); ?>/cobertura/">Cobertura </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link nav-nuevo" href="<?php bloginfo( 'wpurl' ); ?>/contacto/">Contacto</a>
	        </li>
	        <li class="nav-item nav-cta">
	         <a class="custom-btn btn-15" href="https://app.cargoex.cl/clientes/public/login" target="_blank">Acceso&nbsp;Clientes <i class="bi bi-arrow-right-short"></i></a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
</header>
<!-- Inicio Header Mobile -->
<div class="menu-mobile version-mobile animate__animated animate__fadeInDown">
    <a class="navbar-brand" href="<?php bloginfo( 'wpurl' ); ?>"><img class="logo" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/svg/CargoEx-Logo.svg" alt="CargoEx"></a>
    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
</div>
    <div class="overlay version-mobile" id="overlay">
      <nav class="overlay-menu">
        <ul>
          <li><a href="<?php bloginfo( 'wpurl' ); ?>" class="menu-nav">Home</a></li>
          <li><a href="<?php bloginfo( 'wpurl' ); ?>/quienes-somos/" class="menu-nav">Quienes&nbsp;Somos</a></li>
          <li><a href="<?php bloginfo( 'wpurl' ); ?>/servicios/" class="menu-nav">Servicios</a></li>
          <li><a href="<?php bloginfo( 'wpurl' ); ?>/cobertura/" class="menu-nav">Cobertura</a></li>
          <li><a href="<?php bloginfo( 'wpurl' ); ?>/contacto/" class="menu-nav">Contacto</a></li>
            <li class="d-flex justify-content-center align-items-center"><a href="https://app.cargoex.cl/clientes/public/login" target="_blank" class="custom-btn btn-15">Acceso&nbsp;Clientes <i class="bi bi-arrow-right-short"></i></a></li>
        </ul>
      </nav>
    </div>
<!-- Fin Header Mobile -->
