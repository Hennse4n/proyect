<?php
$person_name = $_POST['person_name'];
$person_Lname = $_POST['person_Lname'];
$person_mail = $_POST['person_mail'];
$msg = $_POST['msg'];

$header = 'From: '. $person_mail. "\r\n";
$header = "X-Mailer: PHP/". phpversion(). "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$msg = "Este mensaje fue enviado por: ". $person_name. $person_Lname. "\r\n";
$msg = "Con el correo: ". $person_mail. "\r\n";
$msg = "Con el asunto de: ". $_POST['msg']. "\r\n";
$msg = "Con fecha de: ". date('d/m/y', time()). "\r\n";

$para = 'hennsen1287@gmail.com';
$asunto = 'Asunto del Mensaje';

mail($para, $asunto, utf8_decode($msg)$header);
header("Location:C:\Users\henns\OneDrive\Escritorio\Archivos\ARCHIVOS HTML\Proyecto\my_mail.html");
?>