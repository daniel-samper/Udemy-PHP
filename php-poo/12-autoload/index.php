<?php

require_once 'autoload.php';
/*
require_once 'usuario.php';
require_once 'categoria.php';
require_once 'entrada.php';
 */

$usuario = new Usuario();
echo $usuario->nombre;
echo"<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;