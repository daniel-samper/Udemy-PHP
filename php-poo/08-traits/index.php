<?php

// Nos permite definir uan serie de métodos para comaprtirlo entre diferenets 
// clases

trait Utilidades{
    public function mostrarNombre() {
        echo"<hi>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}
$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();
