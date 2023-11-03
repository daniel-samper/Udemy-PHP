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

function conseguirUltimasEntradas($conexion){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ".
            "ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas) >= 1):
        $resultado = $entradas;
    endif;
    return $entradas;
}