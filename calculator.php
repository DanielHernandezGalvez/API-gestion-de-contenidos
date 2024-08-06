<?php

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sections = $_POST["sections"];
  $images = $_POST["images"];
  $wordpress = $_POST["wordpress"];
  $contact_form = $_POST["contact-form"];
  $dominio = $_POST["dominio"];
  $host = $_POST["host"];
  $english = $_POST["english"];
  $functions = $_POST["functions"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $final_price = $sections + $images + $wordpress + $contact_form
    + $dominio + $host + $english;

  // Construir el cuerpo del correo electrónico
  $subject = "Solicitud de cotizacion de sitio web";
  $body = "Cantidad de secciones: $sections\n";
  $body .= "Cantidad de imágenes: $images\n";
  $body .= "Actualizar contenido por cuenta propia: $wordpress\n";
  $body .= "Formulario de contacto $contact_form\n";
  $body .= "Dominio $dominio\n";
  $body .= "Hospedaje $host\n";
  $body .= "Pagina en ingles $english\n";
  $body .= "Otras funcionalidades: $functions\n";
  $body .= "\nNombre: $name\n";
  $body .= "Correo electronico: $email\n";
  $body .= "Mensaje: $message`\n";
  $body .= "Total: $final_price";

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
