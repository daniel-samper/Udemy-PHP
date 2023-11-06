<?php

// Programacion orientada a Objetos en PHP

// Definir una class
// Molde para crear más objetos de tipo coche con características parecidas

class Coche{
    
    // Atributos o propiedades (variables)
    public $color ="Rojo";
    public $modelo ="Aventador";
    public $velocidad =300;
    public $marca = "Marca";
    public $caballaje = 500;
    public $plaza = 2;
    
    // Métodos (funciones): acciones que hace el objeto
    public function getColor() {
        
        //Busca en esta clase la propiedad X
        return $this->color;
        
    }
    
    public function setColor($color) {
        $this->color = $color;
        
    }
    
    public function acelarar() {
        $this->velocidad++;
    }
    public function frenar() {
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }   
} // Fin definición de la clase

// Crear un objeto o instanciar la clase
$coche = new Coche();

// Usar los métodos
echo $coche->getVelocidad();

$coche->setColor("Amarillo");
echo "El color del coche es".$coche->getColor().'<br>';

$coche->acelarar();
$coche->acelarar();
$coche->acelarar();
$coche->frenar();

echo "Velocidad del coche ".$coche->getVelocidad();

$coche2 = new Coche();