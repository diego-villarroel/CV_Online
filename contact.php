<?php

//Campos HTML
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Datos para el correo
$recipient = "diego.n.villarroel@gmail.com";
$subject = "CV Contact Form";

$mail = "De: $name \n";
$mail .= "Correo: $email \n";
$mail .= "Mensaje: $message";

mail($recipient, $subject, $mail);
header("Location:mensaje-de-envio.html")

echo "Thank You!";
?>
