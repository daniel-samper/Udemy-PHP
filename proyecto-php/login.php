<?php

// Iniciar la sesión y la conexión a la BBDD
require_once 'includes/conexion.php';

// Recoger los datos del formulario
if(isset($_POST)):
    
    // Borrar error antiguo
    if(isset($_SESSION['error_login'])):
        unset($_SESSION['error_login']);
    endif;

    // Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
    if($login && mysqli_num_rows($login) == 1):
        $usuario = mysqli_fetch_assoc ($login);
    
        // Comprobar la contraseña
        $verify = password_verify ($password, $usuario['password']);
        
        if($verify):
            // Utilizar una sesión para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

        
        else:
            // Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
        endif;
        
    else:
        // mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    endif;
    
endif;

// Redirigir al index.php
header('Location: index.php');



