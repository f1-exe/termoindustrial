<?php
include 'funciones/funciones.php';

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $nombre = strip_tags(trim($_POST["nombre"]));
				$nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        // Check that data was sent to the mailer.
        if ( empty($nombre) OR empty($mensaje) OR empty($telefono) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "*Todos los campos del formulario son obligatorios, asegúrese de llenarlos antes de volver a enviar el formulario.";
            exit;
        }

        // Send the email.
        if (enviarCorreoContacto($nombre,$telefono,$email,$mensaje)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Gracias! Tu mensaje de contacto ha sido enviado exitosamente.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Algo salió mal y no pudimos enviar tu mensaje, refresca el navegador e intenta nuevamente.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hubo un porblema con tu mensaje de contacto, asegúrate de enviarlo presionando el boton y no de otra manera.";
    }

?>
