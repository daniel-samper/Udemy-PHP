<?php

// Capturar excepciones, n codigo susceptible a errores
try {
    if(isset($_GET['id'])):
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    else:
        throw new Exception('Errores de logica');
    endif;
} catch (Exception $e) {
    
    echo "Ha habido un error: ".$e->getMessage();
    
} finally {
    
    echo "Todo correcto";
}




