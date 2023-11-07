<?php

abstract class Ordeandor{
    
    public $encendido;
    
    // Métodos abstractos que no se saben que funcionalidad van a tener en la 
    // clase hija
    abstract public function encender();
    
    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordeandor{
    public $software;
    
    public function arrancarSoftware() {
        $this->software = true;
    }
    
    public function encender() {
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();