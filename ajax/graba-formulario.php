<?php

	
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
require  $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php';

$conNom 	= $_POST['nombre'];
$conApe 	= $_POST['apellido'];
$conHab 	= $_POST['habfield'];	
$conTie 	= $_POST['timefield'];	
$conMai 	= $_POST['mail'];
$conPai 	= $_POST['pais'];
$conCiu 	= $_POST['ciudad'];
$conCom 	= $_POST['comentarios'];


$data = 	array( 
		'conNom' 	=> $conNom,
		'conApe' 	=> $conApe,	
		'conHab' 	=> $conHab,								
		'conTie'	=> $conTie,
		'conMai' 	=> $conMai,
		'conPai' 	=> $conPai,	
		'conCiu' 	=> $conCiu,								
		'conCom'	=> $conCom
	);
	
print_r($data);

$wpdb->insert( 
	'contacto', $data
);	
/*

	$to 	 = 'contacto@acktib.com';
	$message = '<html><body>';
	$message .= '<div>';
	$message .= "<p>De:  <strong>".$conNom." ".$conApe." </strong></p>";  
	$message .= "<p>Correo: <strong>".$conMail." </strong></p>";  
	$message .= "<p>Mensaje:</p>"; 
	$message .= "<p> <strong>".$conTxt." </strong></p>";  
	$message .= "</div>";
	$message .= "</body></html>";
	$headers = array('Content-Type: text/html; charset=UTF-8');
	
	
	$subject = 'Contacto Acktib';
	$headers = "From: " . "<no-reply@acktib.com> Web Acktib" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($to, $subject, $message, $headers);
*/


	echo 'ok';

?>