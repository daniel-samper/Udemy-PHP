<?php

// iNICIAR SESIÓN
session_start();

// Variable normal
$variable_normal = 'Soy una cadena de texto';

// Variable de sesión
$_SESSION('variable_persistente')="HOLA SOY UNA SESIÓN ACTIVA";

echo $variable_normal."<br>";
echo $_SESSION('variable_persistente');