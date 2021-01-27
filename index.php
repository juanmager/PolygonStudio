<?php
if (isset($_POST['submit'])) {
    // ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
    // error_reporting( E_ALL ); # REMOVE // FOR DEBUG
    $from = "juanmagit@gmail.com"; // Email con el dominio del Hosting para evitar SPAM
    $fromName = "PolygonStudio"; // Nombre que saldrá en el email recibido
    $to = "juanmagit@gmail.com"; // Dirección donde se enviará el formulario
    // $subject = $_POST['validarAsunto']; // Asunto del Formulario

    /* Componemos el mensaje */
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['validarNombre'] . " " . $_POST['validarApellidos'] . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['validarNombre'] . "\r\n";
    $fullMessage .= "Apellidos: " . $_POST['validarApellidos'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['validarEmail'] . "\r\n";
    // $fullMessage .= "Teléfono: " . $_POST['validarTelefono'] . "\r\n";
    // $fullMessage .= "Tema: " . $_POST['validarTema'] . "\r\n";
    // $fullMessage .= "Asunto: " . $_POST['validarAsunto'] . "\r\n";
    $fullMessage .= "Mensaje: " . $_POST['validarMensaje'] . "\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

    /* Creamos las cabeceras del Email */
    $headers = "Organization: RPF WEB\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['validarEmail'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    /* Enviamos el Formulario*/
    if (mail($to, $fullMessage, $headers)) {
        echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
    }
}
?>

<!-- <?php

// print_r($_POST);
// die;

// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $email = $_POST['email'];
// $mensaje = $_POST['mensaje'];

// echo "Nombre recibido: ", $nombre, "<br />";
// echo "Apellido recibido: ", $apellido, "<br />";
// echo "Email recibido: ", $email, "<br />";
// echo "Mensaje recibido: ", $mensaje, "<br />";

// ?> -->





<!-- // $n = $_POST["nombre"];
// $e = $_POST["edad"];

// echo "Mi nombre es ".$n." y tengo ".$e." anios"; -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>




