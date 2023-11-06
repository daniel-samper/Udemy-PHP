<?php

class Coche{
    
    // Atributos o propiedades (variables)
    public $color;
    public $modelo ;
    public $velocidad ;
    public $marca ;
    public $caballaje;
    public $plaza;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plaza) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plaza = $plaza;
    }
    
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