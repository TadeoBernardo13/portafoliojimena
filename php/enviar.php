<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = 'Formulario Rellenado';
$mensaje = "Nombre: " . $nombre . "<br> Email: $email<br> Mensaje:" . $_POST['mensaje'];


if (mail('tbgbg1234@gmail.com', $asunto, $mensaje)) {
    echo "Correo enviado";
}
?>