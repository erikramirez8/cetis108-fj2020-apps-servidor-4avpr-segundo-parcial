<?php
/**
 * Tipos de datos
 * 
 * integer, string, boolean, array, object, double, null, unknown type, class
 * Los tipos de datos se asignan por inferencia
 */

$entero = 10;
$nombre = "Bidkar";
$booleano = true;
$arreglo1 = array("uno","dos","tres");
$arreglo2 = ["uno","dos","tres"];
class Usuario {
    public $nombre;
    public $apellido;
}
$objeto = new Usuario();
$decimal = 198.23;
$nulo = null;

// Conocer el tipo de dato de una variable
echo 'La variable $entero es tipo '.gettype($entero);

// Cambiar el tipo de dato de una variable
// 1.- Asignar un nuevo valor de tipo del nuevo dato que se requiere
$entero = "123";
echo 'La variable $entero es tipo '.gettype($entero);
// 2.- Utilizar la función settype()
settype($entero, "integer");
echo 'La variable $entero es tipo '.gettype($entero);
echo $entero;