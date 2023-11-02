<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)):
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div';
    endif;
    return $alerta;
}


 function borrarErrores(){
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
}

function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1):
        $result = $categorias;
    endif;
    return $result;
}