<?php
session_start();
/*Estilos Globales*/
add_post_type_support('page', 'excerpt');

function global_framework() {
    // Enlaces de estilo en el orden deseado
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('leaflet', 'https://unpkg.com/leaflet/dist/leaflet.css');
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/core/css/style.css', array(), null, 'all');
    wp_enqueue_style('mobile', get_template_directory_uri() . '/core/css/mobile.css', array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'global_framework');


/*global styles*/


/*global scripts*/


function globals_script() {
    if (!is_admin()) {
        // wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBITfQPAHSXfc_Lw09kwU1TlwJVbJJwMtY&callback=initMaps', array(), null, true);
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_register_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true);
        wp_register_script('leaflet', 'https://unpkg.com/leaflet/dist/leaflet.js', array(), null, true);
        wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), '3.9.1', true);
        wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
        wp_register_script('global-js', get_template_directory_uri() . '/core/js/global.js', array(), null, true);



        // wp_enqueue_script('google-maps');
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('slick-carousel');
        wp_enqueue_script('leaflet');
        wp_enqueue_script('gsap');
        wp_enqueue_script('popper');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('global-js');
    }
}

add_action("wp_enqueue_scripts", "globals_script", 1);

add_action('wp_enqueue_scripts', 'custom_add_recaptcha_to_form');
function custom_add_recaptcha_to_form() {
    wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LcJidgpAAAAAHO3uWlKC52_ZiWxg5LkumccG09X', [], null, true);
}


add_action('wp_footer', 'add_recaptcha_script');
function add_recaptcha_script() {
?>    
<script>
        document.addEventListener('DOMContentLoaded', function() {
            grecaptcha.ready(function() {
                var form = document.getElementById('formulario');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    grecaptcha.execute('6LcJidgpAAAAAHO3uWlKC52_ZiWxg5LkumccG09X', {action: 'submit'}).then(function(token) {
                        var recaptchaResponse = document.getElementById('recaptchaResponse');
                        recaptchaResponse.value = token;
                        form.submit();
                    });
                });
            });
        });
</script>
<?php
}


/*global scripts*/



/*extracto*/
function tn_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);


/* Archivos Core */ 
// include get_template_directory() . '/core/archivo.php';


add_filter('get_the_archive_title', function ($title) {

    if (is_category()) {

        $title = single_cat_title('', false);
    }

    return $title;
});

// Contact
add_action('phpmailer_init', 'configurar_smtp_phpmailer');
function configurar_smtp_phpmailer($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'mail.cargoex.cl';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465; // SSL: 465, TLS: 587
    $phpmailer->Username   = 'no-reply@cargoex.cl';
    $phpmailer->Password   = 'marathon1315';
    $phpmailer->SMTPSecure = 'ssl'; // Cambiar a 'tls' si usas el puerto 587
    $phpmailer->From       = 'no-reply@cargoex.cl';
    $phpmailer->FromName   = 'CargoEx';
    $phpmailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ),
    );
}

add_action( 'admin_post_custom_contact_form', 'custom_contact_form_handler' );
add_action( 'admin_post_nopriv_custom_contact_form', 'custom_contact_form_handler' );

function custom_contact_form_handler() {
    // Verificar si el formulario ha sido enviado
    if ( isset( $_POST['nombre'] ) && isset( $_POST['email'] ) && isset( $_POST['mensaje'] ) ) {
        // Procesar los datos del formulario
        $nombre = sanitize_text_field( $_POST['nombre'] );
        $email = sanitize_email( $_POST['email'] );
        $mensaje = sanitize_textarea_field( $_POST['mensaje'] );

        // Aquí puedes realizar cualquier acción necesaria, como enviar un correo electrónico o guardar en una base de datos
    
        // Por ejemplo, enviar un correo electrónico de notificación
        $to = 'jolaguibel@cargoex.cl';
        $subject = 'Mensaje importante de ' . $nombre . ' - Responder a la brevedad - https://www.cargoex.cl';
        $body = "Nombre: $nombre<br>";
        $body .= "Email: $email<br>";
        $body .= "Mensaje: $mensaje";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        // Añade los parámetros adicionales necesarios para la configuración SMTP
        // $headers = array('Content-Type: text/html; charset=UTF-8','X-Mailer: PHP/' . phpversion());
        
        wp_mail( $to, $subject, $body, $headers );
        
        // Redirigir a la página actual con un parámetro de confirmación en la URL
        wp_redirect( add_query_arg( 'confirmacion', '1', $_SERVER['HTTP_REFERER'] ) );
        exit();
    } else {
        // Si el formulario no ha sido enviado, redirigir de vuelta a la página del formulario
        wp_redirect( home_url() );
        exit();
    }
}

// Action hook para manejar el segundo formulario
add_action( 'admin_post_custom_contact_form_second', 'custom_contact_form_handler_second' );
add_action( 'admin_post_nopriv_custom_contact_form_second', 'custom_contact_form_handler_second' );

function custom_contact_form_handler_second() {
    // Verificar si el formulario ha sido enviado
    if ( isset( $_POST['nombreapellido'] ) && isset( $_POST['nombreempresa'] ) && isset( $_POST['telefono'] ) && isset( $_POST['email'] ) ) {
        // Procesar los datos del formulario
        $nombreapellido = sanitize_text_field( $_POST['nombreapellido'] );
        $nombreempresa = sanitize_text_field( $_POST['nombreempresa'] );
        $telefono = sanitize_text_field( $_POST['telefono'] );
        $email = sanitize_email( $_POST['email'] );

        // enviar un correo electrónico de notificación
        $to = 'jolaguibel@cargoex.cl';
        $subject = 'Cotización solicitada por ' . $nombreapellido . ' - Llamar a la brevedad - https://www.cargoex.cl';
        $body = "Nombre y Apellido: $nombreapellido<br>";
        $body .= "Nombre Empresa: $nombreempresa<br>";
        $body .= "Teléfono: $telefono<br>";
        $body .= "Email: $email";
        // $headers = array('Content-Type: text/html; charset=UTF-8','X-Mailer: PHP/' . phpversion());
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        wp_mail( $to, $subject, $body, $headers );

        // Redirigir a la página actual con un parámetro de confirmación en la URL
        wp_redirect( add_query_arg( 'confirmacioncontact', '1', $_SERVER['HTTP_REFERER'] ) );
        exit();
    } else {
        // Si el formulario no ha sido enviado, redirigir de vuelta a la página del formulario
        wp_redirect( home_url() );
        exit();
    }
}



//defer JS
function defer_parsing_of_js($url)
{
    if (is_user_logged_in()) return $url; //don't break WP Admin
    if (FALSE === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);



