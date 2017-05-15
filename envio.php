<?php 
error_reporting(0); 
$nombre = $_POST['name']; 
$correo = strip_tags($_POST['mail']);
$edad=$_POST['edad']; 
$telefono = strip_tags($_POST['tel']);
$anhos= $_POST['experiencia'];
$descripcion=$_POST['descrip']; 

$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha); 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-type: text/html; charset=UTF-8\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "Enviado el " . date('j/n/Y', time()); 

//Correo de destino; donde se enviará el correo.
$correoDestino = "jorge.torres@target.com.ni";
$asunto = 'Registro'; 

mail($correoDestino, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 
