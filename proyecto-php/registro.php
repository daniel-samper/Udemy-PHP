<?php

if(isset($_POST)):
    // Conexión a la BBDD
    require_once 'includes/conexion.php';

    // Iniciar sesión
    if(!isset($_SESSION)):
       session_start();     
    endif;
    
    
    // Recoger los valores del formulari ode registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos =isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : false;
    
    // Array de errores
    $errores = array();
    
    // Validar los datos antes de guardarlos en la BBDD
    // Validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)):
        $nombre_validado = true;
    else:
        $nombre_validado = false;
        $errores['nombre']="El nombre no es válido";
    endif;
    
    // Valida apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)):
        $apellidos_validado = true;
    else:
        $apellidos_validado = false;
        $errores['apellidos']="Los apellidos no son válidos";
    endif;
    
    // Validar email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)):
        $email_validado = true;
    else:
        $email_validado = false;
        $errores['email']="El email no es válido";
    endif;
    
    //  Validar la contraseña
    if(!empty($password)):
        $password_validado = true;
    else:
        $password_validado = false;
        $errores['password']="La contraseña está vacía";
    endif;
    
    $guardar_usuario = false;
    if(count($errores) == 0):
        $guardar_usuario = true;
    
        //Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
    
        // Insertar usuario en la tabla de usuarios de la BBDD
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar):
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        else:
            $_SESSION['errores']['general']="Fallo al guardar el usuario";
        endif;
    
    else:
        $_SESSION['errores'] = $errores;
       
    endif;
endif;   
header ('Location:  index.php');