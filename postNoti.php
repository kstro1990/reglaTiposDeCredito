<?php

$data = file_get_contents('php://input');
echo $data;



$elJson= $data;

$url = 'https://afix.proyectosgulupa.com/wp-json/placetopay-payment/v2/callback/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $elJson);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8', 'User-Agent: cUrl Testing'));
$result = curl_exec($ch);
$respuestaJson = json_decode($result);

echo $respuestaJson; 

 ?>
