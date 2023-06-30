<?php

function muestranombres(){
    echo "nombre1 </br>";
    echo "nombre2 </br>";
    echo "nombre3 </br>";
}

// muestranombres();

function tabla($numero){
    echo"<h3> Tabla de multiplicar del número: $numero </h3>";
    for($i = 1; $i <= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion </br>";
    }
}
/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}
*/

function calculadora($numero1, $numero2){
    //conjunto de operaciones
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 * $numero2;
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multi <br>";
    echo "División: $division <br>";
}
calculadora(10, 20);