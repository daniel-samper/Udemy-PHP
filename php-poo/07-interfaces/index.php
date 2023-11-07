<?php

// Un interfaz no es más que un contrato en el cual definimos qué métodos y en qué
// orden van a estar en una clase.

interface Ordeandor{
    
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
    
}

class Imac implements Ordeandor{
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        return "Lo que sea";
    }
    
    public function apagar() {
        return "Lo que sea";
    }
    
    public function reiniciar() {
        return "Lo que sea";
    }
    public function desfragmentar() {
        return "Lo que sea";
    }
    public function detectarUSB() {
        return "Lo que sea";
    }
}
$maquintos = new Imac();
$maquintos->setModelo("Mackbook PRO 2019");
echo $maquintos->getModelo();