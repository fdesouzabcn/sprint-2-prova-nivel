<?php

declare(strict_types=1);

Class Tarea{
    public function __construct(
        private string $nombreTarea, 
        private string $alumno, 
        private int $nivel,
        private string $repositorio,
    ){}

    public function getAlumno(): string {
        return $this->alumno;
    }

    public function getName(): string{
        return $this->nombreTarea;
    }   

    public function getNivel(): int{
        return $this->nivel;
    }

    public function getRepositorio(): string{
        return $this->repositorio;
    }

}

function filtrarPorAlumno (array $tareas, string $alumno): array {
    $resultado =[];

    foreach($tareas as $tarea){
        if($tarea->getAlumno() === $alumno) {
            $resultado[]=$tarea;
        }
    } 
    return $resultado;
}

function tareaConMasEntregas (array $tareas): mixed {
    $countTareas= [];

    foreach($tareas as $tarea){
        $nombre = $tarea->getName();

        if(isset($countTareas[$nombre])){
            $countTareas[$nombre]++;
        } else{
            $countTareas[$nombre]=1;
        } 
    }
    arsort($countTareas);
    return $countTareas; 

}

function filtrarOnlyTareasConMasEntregas($tareas):array{
    $countTareas = tareaConMasEntregas($tareas);
    $maxCount = max($countTareas);
    $tareaMasRepetida = [];

    foreach($countTareas as $nombre => $value){
        if($value === $maxCount){
            $tareaMasRepetida[$nombre] = $value;
        }
    }
    return $tareaMasRepetida;
}