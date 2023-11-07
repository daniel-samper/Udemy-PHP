<?php

// HERENCIA: la posibilidad de compartir atributos y métodos entre clases.

class Persona{
    
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }

    public function hablar() {
        return "Estoy hablando";
    }
    
    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{
    
    public $lenguajes;
    public $esperienciaProgramador;

    public function __construct() {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }
    public function saneLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }
    
    public function programar() {
        return "Soy programador";
    }
    public function repararOrdenador() {
        return "Reparar ordenadores";
    }
    public function hacerOfimatica() {
        return "Estoy escribiendo en Word";
    }
}

class TecnicoRedes extends Informatico{
                   
    public $auditarRedes;
    public $experienciaRedes;
    
    public function  __construct() {
        parent::__construct();
        
        $this->auditarRedes = "Esperto";
        $this->experienciaRedes = 5;
    }    
    public function auditoria() {
        return "Estoy auditando una red";
    }
}