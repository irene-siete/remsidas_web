<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$message=$_POST['message'];
$age=$_POST['age'];

$titulo = 'ole';

$mensaje= "El nombre recibido es " . $firstName . "<br/>"."El apellido recibido es " . $lastName . "<br/>"."El email recibido es " . $email . "<br/>"."El genero recibido es " . $gender . "<br/>"."El mensaje recibido es " . $message . "<br/>"."La edad recibida es " . $age . "<br/>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'To:'.$email. "\r\n";
$cabeceras .= 'From: Recordatorio <vladimir_putin@gmail.com>' . "\r\n";
mail($para, $título, $mensaje, $cabeceras);
?>
