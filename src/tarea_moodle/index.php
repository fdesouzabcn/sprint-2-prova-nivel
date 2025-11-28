<?php

require_once 'tarea.php';

$tareas=[
    new Tarea ("Name1", "Alumno1", 1,"www.git.com"),
    new Tarea ("Name2", "Alumno1", 1,"www.git.com"),
    new Tarea ("Name1", "Alumno2", 1,"www.git.com"),
    new Tarea ("Name2", "Alumno2", 2,"www.git.com"),
    new Tarea ("Name2", "Alumno2", 2,"www.git.com"),
    // new Tarea ("Name1", "Alumno3", 3,"www.git.com"),
];


echo "\n". "Prueba filtrar Por Alumno\n";
$filtroTareasAlumno = filtrarPorAlumno($tareas, "Alumno1");
// print_r($filtroTareasAlumno);
foreach($filtroTareasAlumno as $tarea){
    echo "- Tarea: {$tarea->getName()} | Nivel: {$tarea->getNivel()} | {$tarea->getRepositorio()} | {$tarea->getAlumno()} \n";
}

echo "\n". "Prueba retornar lista tareas con mas entregas (DESC)\n";
$resultadoDesc = tareaConMasEntregas($tareas);
// print_r($resultadoDesc);
foreach($resultadoDesc as $key => $value){
    echo "- $key: $value\n";
}

echo "\n". "Prueba filtrar solo por las tareas con mas entregas\n";
$tareasTop = filtrarOnlyTareasConMasEntregas($tareas);
// print_r($tareasTop);
foreach($tareasTop as $key => $value){
    echo "- $key: $value\n";
}

?>