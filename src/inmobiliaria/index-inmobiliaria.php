<?php

require_once 'inmobiliaria.php';


$inmuebles=[
    new Inmueble ("Titulo1", "Direccion1", 1500, 2, true),
    new Inmueble ("Titulo2", "Direccion2", 2500, 3, true),
    new Inmueble ("Titulo3", "Direccion3", 150000, 2, false),
    new Inmueble ("Titulo4", "Direccion4", 250000, 4, false),
];

$catalogo = new Catalogo($inmuebles);


// Prueba f1:
echo "\n". "Prueba filtrar Por Tipo Operacion igual Alquiler\n";
$inmueblesAlquiler = $catalogo->filtrarPorTipoOperacion(true);
// print_r($inmueblesAlquiler);
foreach($inmueblesAlquiler as $inmueble) {
    echo "- {$inmueble->getTitulo()} | {$inmueble->getDireccion()} | {$inmueble->getPrecio()}€ | " .($inmueble->isAlquiler() ? 'Alquiler' : 'Venta') . "\n";
    //  {$inmueble->isAlquiler() ? } \n";
}


// Prueba f2:
echo "\n". "Prueba filtrar Numero Habitaciones Mayores Que \n";
$min_habitaciones = $catalogo->filtrarPorNumeroHabitaciones(3);
// print_r($habitacionesMinima);
foreach($min_habitaciones as $inmueble) {
    echo "- {$inmueble->getTitulo()} | {$inmueble->getDireccion()}| Numero Habitaciones: {$inmueble->getHabitaciones()}\n";
}
?>
