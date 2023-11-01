<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)):
        $alerta = "<diva class='alerta alerta-error'>".$errores[$campo].'</div';
    endif;
    return $alerta;
}

function borrarErrores(){
    $borrado = false;
    
    if(isset($_SESSION['errores'])):
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    endif;
    
    if(isset($_SESSION['completado'])):
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);
    endif;
    
    return $borrado;
}
