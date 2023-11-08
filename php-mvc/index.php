<h1>Bienvenido a mi web con MVC</h1>
<?php 
require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';

if(isset($_GET['controller'])):
    $nombre_controlador = $_GET['controller'].'Controller';
else:
    echo "La página que buscas no existe";
    exit();
endif;



if(class_exists($nombre_controlador)):
    
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action'])):
        $action = $_GET['action'];
        $controlador->$action();

    else:
        echo "La página que buscas no existe";
    endif;
    
else:
    echo "La página que buscas no existe";
endif;




    