<?php

class usuarioController{
    
    public function index() {
        echo "controlador Usuarios, Acción index";
    }
    
    public function registro() {
        require_once 'views/usuario/registro.php';
    }
    
    public function save() {
        echo "controlador Usuarios, Acción index";
    }
}