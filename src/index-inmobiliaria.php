<?php

require_once 'inmobiliaria.php';

// Prueba f1:
echo "\n". "Prueba filtrar Por Tipo Operacion igual Alquiler\n";
$inmueblesAlquiler = filtrarPorTipoOperacion2($inmuebles, true);
// print_r($inmueblesAlquiler);
foreach($inmueblesAlquiler as $inmueble) {
    echo "- {$inmueble->titulo} | {$inmueble->direccion} |{$inmueble->precio}€ |{$inmueble->is_alquiler}\n";
}


// Prueba f2:
echo "\n". "Prueba filtrar Numero Habitaciones Mayores Que \n";
$habitacionesMinima = filtrarNumeroHabitacionesMayoresQue($inmuebles, 3);
// print_r($habitacionesMinima);
foreach($habitacionesMinima as $inmueble) {
    echo "- {$inmueble->titulo} | {$inmueble->direccion} | Numero Habitaciones: {$inmueble->habitaciones}\n";
}
?>
