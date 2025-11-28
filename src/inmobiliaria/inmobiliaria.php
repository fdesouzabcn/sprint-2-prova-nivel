<?php

declare (strict_types=1);
Class Inmueble {
    public function __construct(
        private string $titulo, 
        private string $direccion, 
        private float $precio, 
        private int $habitaciones, 
        private bool $is_alquiler,
    ){}
    
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }
    
    public function getPrecio(): float {
        return $this->precio;
    }

    public function getHabitaciones(): int {
        return $this->habitaciones;
    }

        public function isAlquiler(): bool {
        return $this->is_alquiler;
    }
}

Class Catalogo {
    public function __construct(
        private array $inmuebles,
    )
    {}
    
    public function filtrarPorTipoOperacion(bool $is_alquiler): array{
        $lista_inmuebles = [];

        foreach($this->inmuebles as $inmueble) {
            if($inmueble->isAlquiler() === $is_alquiler) {
                $lista_inmuebles[] = $inmueble;
            }
        }
        return $lista_inmuebles;
    }

    public function filtrarPorNumeroHabitaciones(int $habitacionesMinima): array {
        $lista_inmuebles = [];

        foreach($this->inmuebles as $inmueble) {
            if ($inmueble->getHabitaciones() >= $habitacionesMinima){
                $lista_inmuebles[]=$inmueble;
            }
        }
        return $lista_inmuebles;
    }
}

?>