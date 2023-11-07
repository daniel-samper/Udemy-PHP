<?php

require_once 'coche.php';

$coche = new Coche("Amarillo","Renault","Clio",150,200,5);
$coche2 = new Coche("Verde","Seat","Panda",250,200,5);
$coche3 = new Coche("Azul","Citroen","Xara",100,220,4);
$coche4 = new Coche("Rojo","Mercedes","Clase A",350,100,3);

$coche->color="ROSA";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche2);