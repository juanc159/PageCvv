<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "virgendelvalle.intl.school@gmail.com"; // Cambia esto al correo al que deseas enviar el mensaje.
    $headers = "From: $email" . "\r\n";
    $message = "Nombre: $name\nCorreo: $email\nAsunto: $subject\nMensaje:\n$message";

    mail($to, $subject, $message, $headers);
}
?>
