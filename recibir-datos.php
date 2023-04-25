<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['mensaje'];

    $header = 'From: ' . $correo . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $mensaje .= "Su e-mail es: " . $correo . " \r\n";
    $mensaje .= "Teléfono de contacto: " . $telefono . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
    $mensaje .= "Tema: " . $tema . " \r\n";
    $mensaje .= "Enviado el: " . date('d/m/Y', time());

    $para = 'jorgemgl@outlook.es';
    $asunto = 'Contacto de la pagna ';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header("Location:index.html");
?>
