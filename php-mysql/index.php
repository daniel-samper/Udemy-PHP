<?php

/*
 * Conectar a BBDD
 */

$conexion = mysqli_connect("localhost", "root", "","phpmysql");

// Comprobar si la conexión es correcta
if(mysqli_connect_errno()):
    echo "La conexión a la BBDD ha fallado". mysqli_connect_error();
else:
    echo "conexión realizada correctamente";
endif;

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");