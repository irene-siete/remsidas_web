<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$message=$_POST['message'];
$age=$_POST['age'];

echo"<h2>Informacion recibida desde PHP</h2>";
echo"El nombre recibido es " . $firstName . "<br/>";
echo"El apellido recibido es " . $lastName . "<br/>";
echo"El email recibido es " . $email . "<br/>";
echo"El genero recibido es " . $gender . "<br/>";
echo"El mensaje recibido es " . $message . "<br/>";
echo"La edad recibida es " . $age . "<br/>";

?>