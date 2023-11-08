<?php

require_once 'autoload.php';
/*
require_once 'usuario.php';
require_once 'categoria.php';
require_once 'entrada.php';
 */

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo"<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;
 */

// ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $udustio;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}
// Objeto Principal
$principal = new Principal();
var_dump($principal->usuario);

// Otro paquete
$usuario = new UsuarioAdmin;
var_dump($usuario);