<?php
/**
 * Funciones con matrices
 * 
 * array()
 */

// c# var nombres = new string[5];
// definir una matriz de cadenas de texto
// Matriz indexada
$nombres = array("Mariam","Jose Carlos","Mileido");
var_dump($nombres);
// Imprima el valor de la primera posición de $nombres
echo $nombres[0];
// Imprima todos los valores de la matriz $nombres uno en cada línea
// echo $nombres[0]."\n";
// echo $nombres[1]."\n";
// echo $nombres[2]."\n";
// count() sizeof()
$nombres_length = count($nombres);
for ($i=0; $i<$nombres_length; $i++) {
    echo $nombres[$i]."\n";
}

// Matriz asociativa
// $matriz = array(key=>value,key=>value,key=>value,etc)
$alumno = array(
    "nombres"=>"Mariam",
    "apellidos"=>"Castillo Rojo",
    "correo"=>"mariam@castillo.com"
);
echo "Hola soy ".$alumno["nombres"]." ".$alumno["apellidos"]." y mi correo es ".$alumno["correo"];

// Matriz multidimensional
$alumno2 = array(
    "nombres"=>"Jose Carlos",
    "apellidos"=>"Ramirez",
    "correo"=>"jc@ramirez.com"
);
$alumno3 = array(
    "nombres"=>"Mileido",
    "apellidos"=>"Villegas",
    "correo"=>"mileido@villegas.com"
);
$alumnos = array($alumno, $alumno2, $alumno3);
// Imprima los nombres del alumno2 desde la matriz multidimensional
echo $alumnos[1]["nombres"]." ".$alumnos[1]["apellidos"]."\n";
// Imprima el nombre completo de los alumnos
foreach ($alumnos as $a) {
    echo $a["nombres"]." ".$a["apellidos"]."\n";
}

// Ordena la matriz nombres e imprime el resultado
foreach ($nombres as $nombre) {
    echo $nombre."\n";
}
sort($nombres);
foreach ($nombres as $nombre) {
    echo $nombre."\n";
}

// Suma los valores de una matriz de enteros
$enteros = array(1,3,6,7,3,27,10);
echo "La suma de los enteros en la matriz es: ".array_sum($enteros)."\n";

