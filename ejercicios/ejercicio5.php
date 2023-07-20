<?php

/* 
Crear un array con el contenido de la tabla:
ACCION  AVENTURA     DEPORTES
GTA     ASSASINS     FIFA 19
COD     CRASH        PES 19
PUGB    Prince Of    MOTO GP 19
        Persia
 Cada columna debe ir en un fichero separado (includes)
 */
$tabla = array(
    "ACCION" => array("GTA 5","Call of Duty","PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);
$categorias = array_keys($tabla);
?>
<table border ="1">
    <?php require_once 'ejercicio5/encabezados.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>


</table>

