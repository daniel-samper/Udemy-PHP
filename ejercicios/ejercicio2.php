<?php

/* 
 * Escribir un programa que añada valores a un array mientras que su longitud
 * sea menor de 120 y luego mostrarlo por pantalla
 */

$coleccion = array();

for ($i = 0; $i < 120; $i++){
    array_push($coleccion, "elemento-".$i);
}
var_dump($coleccion);