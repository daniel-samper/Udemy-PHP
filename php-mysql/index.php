<?php

/*
 * Conectar a BBDD
 */

$conexion = mysqli_connect("localhost", "root", "","phpmysql");

// Comprobar si la conexión es correcta
if(mysqli_connect_errno()):
    echo "La conexión a la BBDD ha fallado".mysqli_connect_error();
else:
    echo "conexión realizada correctamente'<br>'"  ;
endif;

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// consulta select desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");
$notas = mysqli_fetch_assoc($query);

//var_dump($notas);

// Insertar en la BBDD desde PHP
$sql ="INSERT INTO notas VALUES(null, 'Nota desde PHP','Esto es una nota','Green')";
$insert = mysqli_query($conexion, $sql);

if($insert):
    echo "Datos insertados correctamente";
else:
    echo "error ".mysqli_error($conexion);
endif;