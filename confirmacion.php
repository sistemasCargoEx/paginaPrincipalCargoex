<?php
/**
 * Template Name: Página Confirmación
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

<div class="fondo version-escritorio" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Pop-Up-ContactoCargoEx.webp'); background-size:cover; background-position:center; width:100%; height:100vh;">
        <div class="contenedor-no-content" style="    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
            
            <p style="margin: 0;
    color: #fff;
    font-size: 60px;
    font-weight: lighter;">¡UPS!</p>
    
    <img class="" style="width: 45%;
    height: auto;" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/404.png" alt="Sello 23 años de experiencia">
    
    <p style="    width: 710px;
    text-align: center;
    font-size: 18px;
    color: #fff;">
        La página que buscas no la hemos encontrado, pero no te preocupes, <strong>¡somos unos expertos rastreando envíos! Regresa al inicio y continuemos esta aventura logística juntos. ¡No te pierdas en el camino!</strong>
    </p>
    <a class="custom-btn btn-15" href="<?php bloginfo( 'wpurl' ); ?>">Volver al inicio <i class="bi bi-arrow-right-short"></i></a>
        </div>
</div>
<div class="fondo version-mobile" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/Web/img/contenedor-contacto.png');background-size:cover;background-position:center;width:100%;height: 85vh;">
        <div class="contenedor-no-content" style="
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
    ">
            
            <p style="
    margin: 0;
    color: #fff;
    font-size: 40px;
    font-weight: lighter;
    ">¡UPS!</p>
    
    <img class="" style="
    width: 81%;
    height: auto;
    " src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/404.png" alt="Sello 23 años de experiencia">
    
    <p style="
    width: 100%;
    text-align: center;
    font-size: 14px;
    color: #fff;
    ">
        La página que buscas no la hemos encontrado, pero no te preocupes, <strong>¡somos unos expertos rastreando envíos! Regresa al inicio y continuemos esta aventura logística juntos. ¡No te pierdas en el camino!</strong>
    </p>
    <a class="custom-btn btn-15" href="<?php bloginfo( 'wpurl' ); ?>" style="width: 75%;">Volver al inicio <i class="bi bi-arrow-right-short"></i></a>
        </div>
</div>
</main>
<?php
get_footer();
