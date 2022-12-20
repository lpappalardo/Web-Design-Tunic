<?php

$enviarMail= 'lautaro.pappalardo@davinci.edu.ar';
//guardo en una variable el mail a donde vamos a enviar la info del formulario


$asunto='Mail  enviado desde misitio.com';
//guardamos en otra variable el "titulo" del mail

$contenidoMensaje='';
//creamos una variable vacia para guardar los datos enviados

if(isset($_GET['nombre'])){
	
	$nombre=$_GET['nombre'];	
}

if(isset($_GET['correo'])){
	
	$correo=$_GET['correo'];
}

if(isset($_GET['mensaje'])){
	
	$mensaje=$_GET['mensaje'];
}

$contenidoMensaje="$nombre,$correo, $mensaje";

//campos OBLIGATORIOS que requiere el servidor

$mail_headers = "MIME-Version: 1.0/r/n"; 
$mail_headers .= "Content-type: text/html; charser-iso-8859-1/r/n"; 
$mail_headers .= "From: misitio.com";

mail($enviarMail,$asunto,$mensaje,$mail_headers); 

header("Location: gracias.html");




?>