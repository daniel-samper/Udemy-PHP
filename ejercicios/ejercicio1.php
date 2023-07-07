<?php

/*
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 números
 * y que haga lo siguiente:
 * - Recorrerlo y mostrarlo
 * - Ordenarlo y mostrarlo
 * - Mostrar su longitud
 * - Buscar algún elemento
 */

$numeros = array(1,8,3,4,6,5,7,2);

echo "<h1> Array </h1><br>";
print_r($numeros);
echo "<h1> Recorre y muestra el array</h1>";
foreach ($numeros as $key) {
    echo $key."<br>" ;
}

echo "<br><h1> Ordena y muestra el array</h1>";
sort($numeros);
print_r($numeros);

echo "<br><h1> Muestra su longiutd</h1>";
echo count($numeros);

echo "<br><h1>Busca algún elemento</h1>";
$clave = array_search(5, $numeros);
echo $clave;
