<?php
// Verificar si se recibió una solicitud POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name-form"];
    $email = $_POST["email-form"];
    $message = $_POST["message-form"];

    // Construir el cuerpo del correo electrónico
    $subject = "Mensaje de sitio web";
    $body .= "\nNombre: $name\n";
    $body .= "Correo electronico: $email\n";
    $body .= "Mensaje: $message`\n";

    // Correo electrónico
    $to = "contacto@elcreadorweb.com";

    // Encabezados adicionales
    $headers = "De: $email" . "\r\n";

    // Enviar el correo electrónico
    if (mail($to, $subject, $body, $headers,  "-futf-8")) {
        echo "success";
    } else {
        echo "error";
    }
    
} else {
    // Si no se recibió una solicitud POST, redirigir al formulario
    header("Location: calculator_view.php");
    exit();
}
