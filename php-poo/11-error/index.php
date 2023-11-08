<?php

// Capturar excepciones, n codigo susceptible a errores
try {
    
    throw new Exception('Errores de logica');
    
} catch (Exception $e) {
    
    echo "Ha habido un error: ".$e->getMessage();
    
} finally {
    
    echo "Todo correcto";
}




