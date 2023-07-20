<?php

// Crear cookie
// setcookie("nombre","valor que solo puede ser texto",caducidad);

// cookie básica
setcookie("micookie","valor de mi galleta");

// cookie con expiración
setcookie("oneyear","valor de mi cookie de 365 dias",time()+(60*60*24*365));

?>

<a href="var_cookies.php"> Ver las galletas</a>
<a href="borrar_cookies.php"> Borrar las galletas</a>