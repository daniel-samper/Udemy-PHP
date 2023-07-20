<?php

/* 
    Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglogal,
 * es un array asociativo.
 */
if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo"No existe la cookie";
}
if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else{
    echo"No existe la cookie";
}
