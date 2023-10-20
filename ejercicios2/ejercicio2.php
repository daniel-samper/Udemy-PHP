<?php

/* 
 * 1.- Una función
 * 2.- Validar con filter_var
 * 3.- Recoger variable por GET y validar
 * 4.- Mostrar el resultado
 */

function validarEmail($email){
    
    $status = "No válido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)):
        $status = "Válido";
    endif;
    
    return $status;
}

if(isset($_GET['email'])):
    echo validarEmail($_GET['email']);
else:
    echo "Pasa por get un email...";
endif;