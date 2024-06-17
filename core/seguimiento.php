<!-- Modal Contacto Seguimiento -->
<div class="modal fade bd-example-modal-lg show" id="modalSeguimiento" tabindex="-1" aria-labelledby="exampleModalSeguimiento" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:24px;">
            <div class="modal-body" style="background-color:#eee; background-size:cover; background-position:center; width:100%; height:500px; border-top-left-radius:24px; border-top-right-radius:24px;">
                <p>Último estado: <?php echo $data['ESTADO_DESCRIPCION']; ?></p>
                <p>Fecha del evento: <?php echo $data['FH_GESTION']; ?></p>
                <p>Nombre receptor: <?php echo $data['NOMBRE']; ?></p>
                <p>RUT receptor: <?php echo $data['RUT']; ?></p>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
                <button type="button" class="custom-cta-red-contacto btn-16" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>