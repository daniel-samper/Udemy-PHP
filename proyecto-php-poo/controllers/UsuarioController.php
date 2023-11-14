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
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            // FALTA VALIDAR DATOS
            
            if($nombre && $apellidos && $email && $password):
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();
                if($save):
                    $_SESSION['register'] = "complete";
                else:
                    $_SESSION['register'] = "failed";
                endif;    
            else:
                $_SESSION['register'] = "failed";
            endif;

        
        else:
            $_SESSION['register'] = "failed";
        
        endif;
        header("Location:".base_url.'usuario/registro');
    }
}