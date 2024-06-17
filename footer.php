<?php
/**
 * The template for displaying the footer
 */
?>
<footer>
<div class="version-escritorio">    	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p class="titulo-footer">Menú</p>
				<nav class="nav-menu-footer">
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Home'))); ?>">Home</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Quienes Somos'))); ?>">Quienes&nbsp;Somos</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Servicios'))); ?>">Servicios</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Cobertura'))); ?>">Cobertura</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contacto</a>
				</nav>
			</div>
			<div class="col-md-3 ">
				<p class="titulo-footer">Contáctanos</p>
				<nav class="nav-menu-footer">
					<a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@cargoex.cl" target="_blank" class="email-footer">
						info@cargoex.cl 
					</a>
				</nav>
				<p class="titulo-footer mt-3">Síguenos en</p>
				<nav class="nav-menu-footer">
				<a href="https://www.linkedin.com/company/transportes-cargoex/" class="link-footer" target="_blank">
					<i class="bi bi-linkedin"></i> 
					<span  class="linkedin-footer">Linkedin</span> 
				</a>
				</nav>
			</div>
			<div class="col-md-3 borde-footer">
				<p class="titulo-footer">Canales de atención</p>
				<p class="mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp;<a href="tel:+56933710221" class="texto-footer">+569 3371 0221 <span style="font-size:13px;">(Solo Ventas)</span>.</a> </p>
				<p class="pt-3 mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp; <a href="tel:+56227522477" class="texto-footer">+562 2752 2477</a></p>
				<p class="pt-3 mb-0 map-hover"><i class="bi bi-geo-alt-fill"></i>&nbsp; <a href="https://maps.app.goo.gl/KQSgPTpzdhcj1fTU7" target="_blank" class="texto-footer">Av Marathon 1315, Ñuñoa</a></p>
				<a class="custom-btn btn-15 mt-3" href="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2024/04/politica.pdf">Políticas <i class="bi bi-arrow-right-short"></i></a>
			</div>
			<div class="col-md-3 borde-footer" >
				<div class="doble-imagen-footer">
					<img class="logo-footer" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/svg/CargoEx-Logo.svg" alt="CargoEx">
					<img class="sello-footer" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/sello-cargoex.png" alt="Sello 23 años de experiencia">
				</div>
				
				<p class="copyrights">Copyright &copy; 2024 CargoEX Todos los derechos reservados</p>
			</div>
			
		</div>
	</div>
</div>
<div class=" version-mobile"> 
	<div class="container">
		<div class="row">
			<div class="col-12 mb-4 mt-4 d-flex justify-contenc-center align-items-center flex-column">
				<p class="titulo-footer">Menú</p>
				<nav class="nav-menu-footer">
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Home'))); ?>">Home</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Quienes Somos'))); ?>">Quienes&nbsp;Somos</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Servicios'))); ?>">Servicios</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Cobertura'))); ?>">Cobertura</a>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('Contacto'))); ?>">Contacto</a>
				</nav>
				<div class="borde-footer"></div>
			</div>
			<div class="col-12 text-center mb-4 d-flex justify-contenc-center align-items-center flex-column">
				<p class="titulo-footer">Contáctanos</p>
				<nav class="nav-menu-footer">
					<a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=info@cargoex.cl" target="_blank" class="email-footer">
						info@cargoex.cl 
					</a>
				</nav>
				<p class="titulo-footer mt-3">Síguenos en</p>
				<nav class="nav-menu-footer">
				<a href="https://www.linkedin.com/company/transportes-cargoex/" class="link-footer" target="_blank">
					<i class="bi bi-linkedin"></i> 
					<span class="linkedin-footer">Linkedin</span> 
				</a>
				</nav>
				<div class="borde-footer"></div>
			</div>
			<div class="col-12 text-center mb-3 d-flex justify-contenc-center align-items-center flex-column">
				<p class="titulo-footer">Canales de atención</p>
				<p class="mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp;<a href="tel:+56933710221" class="texto-footer">+569 3371 0221 (Solo Ventas).</a> </p>
				<p class="pt-3 mb-0 phone-call"><i class="bi bi-telephone-fill"></i>&nbsp; <a href="tel:+56227522477" class="texto-footer">+562 2752 2477</a></p>
				<p class="pt-3 mb-0 map-hover"><i class="bi bi-geo-alt-fill"></i>&nbsp; <a href="https://maps.app.goo.gl/KQSgPTpzdhcj1fTU7" target="_blank" class="texto-footer">Av Marathon 1315, Ñuñoa</a></p>
				<a class="custom-btn btn-15 mt-3 mb-4" href="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2024/04/politica.pdf">Políticas <i class="bi bi-arrow-right-short"></i></a>
				<div class="borde-footer"></div>
			</div>
			<div class="col-12 text-center d-flex justify-content-center align-items-center flex-column">
				<div class="doble-imagen-footer">
					<img class="logo-footer" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/svg/CargoEx-Logo.svg" alt="CargoEx">
					<img class="sello-footer" src="<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/sello-cargoex.png" alt="Sello 23 años de experiencia">
				</div>
				<div class="borde-footer"></div>
				<p class="copyrights">Copyright © 2024 CargoEX Todos los derechos reservados</p>
			</div>
			
		</div>
	</div>
</div>
</footer>
<div class="fondo mt-5 version-escritorio" style="background: linear-gradient(to left, #041562 0%, #2770FF 100%); width: 100%; height: 60px; background-size: cover; background-position: center;    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 5px solid #DA251C; ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<p class="text-end">Sitio desarrollado por <a href="https://www.estudiorako.cl/" target="_blank">@estudiorako</a></p>
			</div>
		</div>
	</div>
</div>
<div class="fondo  version-mobile" style="background: linear-gradient(to left, #041562 0%, #2770FF 100%); width: 100%; height: 60px; background-size: cover; background-position: center;    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 5px solid #DA251C; ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<p class="copyestudio">Sitio desarrollado por <a href="https://www.estudiorako.cl/" target="_blank">@estudiorako</a></p>
			</div>
		</div>
	</div>
</div>

<!-- Modal Contacto normal-->
<div class="modal fade bd-example-modal-lg" id="modalContactForm" tabindex="-1" aria-labelledby="exampleModalContactForm" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius:24px;">
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
      <div class="modal-body"  style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Pop-Up-ContactoCargoEx.webp'); background-size:cover; background-position:center; width:100%; height:488px; border-top-left-radius:24px; border-top-right-radius:24px;">
      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Contacto normal-->
<div class="modal fade bd-example-modal-lg" id="modalContactFormMobile" tabindex="-1" aria-labelledby="exampleModalContactFormMobile" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius:24px;">
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
      <div class="modal-body"  style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Pop-Up-ContactoCargoEx-Mobile.webp'); background-size:cover; background-position:center; width:100%; height:436px; border-top-left-radius:24px; border-top-right-radius:24px;     background-repeat: no-repeat;">
      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Contacto telefónico -->
<div class="modal fade bd-example-modal-lg" id="modalContactFormTelefonico" tabindex="-1" aria-labelledby="exampleModalContactFormTelefonico" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius:24px;">
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
      <div class="modal-body"  style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Pop-Up-CallCenterCargoEx.webp'); background-size:cover; background-position:center; width:100%; height:488px; border-top-left-radius:24px; border-top-right-radius:24px;     background-repeat: no-repeat;">
      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Contacto telefónico -->
<div class="modal fade bd-example-modal-lg" id="modalContactFormTelefonicoMobile" tabindex="-1" aria-labelledby="exampleModalContactFormTelefonicoMobile" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="border-radius:24px;">
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
      <div class="modal-body"  style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Pop-Up-CallCenterCargoEx-Mobile.webp'); background-size:cover; background-position:center; width:100%; height:436px; border-top-left-radius:24px; border-top-right-radius:24px;     background-repeat: no-repeat;">
      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Error Envío Formulario -->
<!--<div class="modal fade bd-example-modal-lg" id="modalErrorEnvioFormulario" tabindex="-1" aria-labelledby="exampleModalErrorEnvioFormulario" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-dialog-centered modal-lg">-->
<!--    <div class="modal-content" style="border-radius:24px;">-->
      <!--<div class="modal-header">-->
      <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      <!--</div>-->
<!--      <div class="modal-body"  style="background-image:url('<?php // bloginfo( 'wpurl' ); ?>/wp-content/themes/cargoex-theme-v1-0/core/images/img/Banner.jpg'); background-size:cover; background-position:center; width:100%; height:500px; border-top-left-radius:24px; border-top-right-radius:24px;">-->
<!--      </div>-->
<!--      <div class="modal-footer d-flex justify-content-center align-items-center">-->
<!--        <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<?php wp_footer(); ?>
</body>
</html>