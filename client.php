<?php

// Dirección del servidor SOAP
$uri = 'http://localhost:8000/';  // Asegúrate de que el puerto sea el correcto

// Crear un cliente SOAP
$client = new SoapClient(null, array('location' => $uri, 'uri' => $uri));

// Llamar al método 'sayHello' del servicio SOAP
$response = $client->sayHello('Mundo');

// Mostrar la respuesta
echo $response;
?>
