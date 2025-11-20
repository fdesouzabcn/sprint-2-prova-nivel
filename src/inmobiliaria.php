<?php

declare(strict_types=1);

class Inmueble {

    public function __construct(
        public string $titulo,
        public string $direccion,
        public float $precio,
        public int $habitaciones,
        public bool $is_alquiler,
    ) 
    {}       
    
}

$inmuebles = [
    new Inmueble("Titulo_1", "Direcion_1", 250000.0, 4, false),
    new Inmueble("Titulo_2", "Direcion_2", 150000.0, 2, false),
    new Inmueble("Titulo_3", "Direcion_3", 1000.0, 3, true),
    new Inmueble("Titulo_4", "Direcion_4", 1200.0, 5, true),
];

function filtrarPorTipoOperacion2(array $inmuebles, bool $is_alquiler): array {
    $lista_inmuebles = [];
    
    foreach ($inmuebles as $inmueble ) {
        if($inmueble->is_alquiler === $is_alquiler) {
            $lista_inmuebles[] = $inmueble;
        }
    }
    return $lista_inmuebles;
}

function filtrarNumeroHabitacionesMayoresQue (array $inmuebles, int $habitaciones): array {
    $lista_inmuebles=[];
    
    foreach ($inmuebles as $inmueble ) {
        if($inmueble->habitaciones >= $habitaciones) {
            $lista_inmuebles[] = $inmueble;
        }
    }
    return $lista_inmuebles;
}
?>