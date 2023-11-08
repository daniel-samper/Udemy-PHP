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
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }




}
// Objeto Principal
$principal = new Principal();
var_dump($principal->usuario);
echo"<br>";

$metodos = (get_class_methods($principal));

$busqueda = array_search('setEntrada', $metodos);
echo "<br>";
var_dump($busqueda);

// Otro paquete
$usuario = new UsuarioAdmin;
echo "<br>";
var_dump($usuario);


// Comprobar si existe una clase
$clase = class_exists('MisClases\usuario');

if($clase):
    echo "<h1> La clase SÍ existe";
else:
    echo "<h1> La clase NO existe";
endif;