<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número de seguimiento del formulario
    $numero_seguimiento = $_POST["numero_seguimiento"];

    // Realizar la solicitud cURL con el número de seguimiento proporcionado
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://app.cargoex.cl/app/cargoex/app/consultaOdApiSimple',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array("OD" => $numero_seguimiento)),
        CURLOPT_HTTPHEADER => array(
            'X-API-KEY: 55IcsddHxiy2E3q653RpYtb',
            'Content-Type: text/plain'
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);

    // Decodificar el JSON a un array asociativo
    $data = json_decode($response, true);

    // Generar el HTML para el popup
    echo '<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">';
    echo '<div class="modal-dialog" role="document">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h5 class="modal-title" id="infoModalLabel">Información de la Orden</h5>';
    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    echo '<div class="modal-body">';
    // Imprimir la información requerida
    if (isset($data["msj"][0])) {
        echo "<p><strong>ESTADO DE LA ORDEN:</strong> " . $data["msj"][0]["ESTADO_DESCRIPCION"] . "</p>";
        echo "<p><strong>ULTIMO ESTADO:</strong> " . $data["msj"][0]["ULTIMO_ESTADO"] . "</p>";
        echo "<p><strong>FECHA DEL EVENTO:</strong> " . $data["msj"][0]["FECHA_EVENTO"] . "</p>";
        echo "<p><strong>NOMBRE RECEPTOR:</strong> " . $data["msj"][0]["NOMBRE_RECEPTOR"] . "</p>";
        echo "<p><strong>RUT RECEPTOR:</strong> " . $data["msj"][0]["RUT_RECEPTOR"] . "</p>";
    } else {
        echo "<p>No se encontraron datos para el número de seguimiento proporcionado.</p>";
    }
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
