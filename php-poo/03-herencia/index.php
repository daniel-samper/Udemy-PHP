<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Victor");

$informatico = new Informatico();
$informatico->setAltura(1.9);
$informatico->saneLenguajes("HTML, CSS, PHP, JS, etc");

$tecnico = new TecnicoRedes();
