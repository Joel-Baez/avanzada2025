<?php
$nombre = "Ana"; //string
$apellido = "Gomez"; //string

echo $nombre . " " . $apellido . "<br>";
echo "$nombre $apellido <br>";
echo '$nombre $apellido <br>';
$edad = 32; //int
$promedio = 3.5; //float
$mayoredad = true; //false bool 
$ejemplo = null; //cuando tdoavia no quiero inicializar una variable

$numeros = array(1, 2, 3, 4, 5, 6);
$numeros= [1, 2, 3, 4, 5, 6];
$lista = ["a", 12, 12.3, true, null,[]]; //arrays ordenados
echo $numeros[0] ."". $numeros[1] ."<br>";

$persona = [
    "nombre"  => "juan", //Asignacion de variables 
    "apellido" => "perez", //Asignacion de variables
    "edad" => 25, //Asignacion de variables
    "numeros" => [2, 4, 6, 8] //Asignacion de variables
];
echo $persona["nombre"] . "<br>";

define(constant_name: "TITULO", value:"holaphp");
echo TITULO . "<br>";

const SUB_TITULO ="GAZZ PRBO";
echo SUB_TITULO . "<br>";


?>
