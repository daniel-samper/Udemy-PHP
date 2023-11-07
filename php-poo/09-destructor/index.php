<?php

class Usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre ="Victor Robles";
        $this->email ="victor@ictor.com";
        
        echo "Instancia del objeto creada <br>";
    }
    
    public function toString() {
        return "Hola, {$this->nomnnre}, estas regustrado con {$this->email}";
    }
    
    public function __destruct() {
        echo "Destruyendo el objeto";
    }
    
}

$usuario = new Usuario();

for($i = 0; $i <= 200; $i++){
    echo $i."<br>";
}