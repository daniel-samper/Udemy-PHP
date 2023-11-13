<?php
require_once 'models/usuario.php';

class usuarioController{
    
    public function index() {
        echo "controlador Usuarios, Acción index";
    }
    
    public function registro() {
        require_once 'views/usuario/registro.php';
    }
    
    public function save() {
        if(isset($_POST)):
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
             $usuario->setEmail($_POST['email']);
             $usuario->setPassword($_POST['password']);
        
            $save = $usuario->save();
            if($save):
                $_SESSION['register'] = "complete";
            else:
                $_SESSION['register'] = "failed";
            endif;
        
        else:
            $_SESSION['register'] = "failed";
        
        endif;
        header("Location:".base_url.'usuario/registro');
    }
}