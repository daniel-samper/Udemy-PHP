<?php

/* 
Programa que compruebe si una variable está vacía y si lo está, eellenarla con
 * texto en minúsculas y mostrarlo en mayúsculas y negrita

 */
echo "<h1>Ejercicio 3</h1>";

$cadena;

if (isset($cadena) == false){
    $cadena = "texto cualquiera";
}else{
    echo "La variable no está vacía";
}
echo "<b>".strtoupper($cadena)."</b>";