<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)):
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div';
    endif;
    return $alerta;
}

// Optimizada
/*
 function borrarErrores(){
    $borrado = false; 
    
    if(isset($_SESSION['errores'])):
        $_SESSION['errores'] = null;
        $borrado = true;
    endif;
    
    if(isset($_SESSION['errores_entrada'])):
        $_SESSION['errores_entrada'] = null;
        $borrado = true;
    endif;
    
    if(isset($_SESSION['completado'])):
        $_SESSION['completado'] = null;
        $borrado = true;
    endif;

    
    return $borrado;;
}*/

 function borrarErrores(){
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
    
    $_SESSION['errores_entrada'] = null;
    //unset($_SESSION['errores_entrada']);
    
    $_SESSION['completado'] = null;
    unset($_SESSION['completado']);
    
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
 
function conseguirEntradas($conexion, $limit = null, $categoria = null){
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ";
            
    
    if(!empty($categoria)):
        $sql  .= "WHERE e.categoria_id = $categoria ";
    endif;
    
    $sql .= "ORDER BY e.id DESC ";
    
    if($limit):
        $sql .= "LIMIT 4";
    endif;
    
    $entradas = mysqli_query($conexion, $sql);
    
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas) >= 1):
        $resultado = $entradas;
    endif;
    return $entradas;
}
function conseguirCategoria($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1):
        $result = mysqli_fetch_assoc($categorias);
    endif;
    return $result;
}