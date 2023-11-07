<?php

class Persona{
    public $nombre;
    public $edsd;
    public $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->$edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0,3);
        
        if($prefix_metodo =='get'):
            $nombre_metodo = substr(strtolower($name), 3);
        
            if(!isset($this->$nombre_metodo)):
                return "El metodo que estas invocando no exite";
            endif;
            
        
                    // $this->nombre
            return $this->$nombre_metodo;
        else:
            return "El metodo que estas invocando no exite";
        endif;
        
        return $prefix_metodo;
    }
}

$persona = new Persona("Paco", 66, "Madrid");

echo $persona->getNombre();