<?php
// Clase con el método que será expuesto en el servicio SOAP
class HelloWorld {
    public function sayHello() {
        return "Hello, World from SOAP in PHP!";
    }
}

// Configuración del servidor SOAP
$options = [
    'uri' => 'http://localhost:8000/',
];

// Crear y configurar el servidor SOAP
$server = new SoapServer(null, $options);
$server->setClass('HelloWorld');

// Manejar las solicitudes SOAP
$server->handle();
