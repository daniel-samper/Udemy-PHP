<?php

$archivo = $_FILES['miArchivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

//var_dump($archivo);

if($tipo  == "image/jpg" || $tipo  == "image/jpeg" || $tipo  == "image/png" || $tipo  == "image/gif"){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    echo"<h1>Imagen subida correctamente</h1>";
    header("Refresh: 5; URL=index.php");
    
}else{
    header("Refresh: 5; URL=index.php");
    echo "Sube una imagen con un formato correcto, por favor...";
}

