<?php
// send-message.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "tu-correo@example.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar tu mensaje.";
    }
}
?>

