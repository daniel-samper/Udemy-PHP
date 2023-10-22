<?php


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1=$_GET['numero1'];
$numero2=$_GET['numero2'];

echo"<h1>MUESTRA NÚMEROS ENTRE $numero1 Y $numero2</h1> <br/>";

for($contador = $numero1; $contador <= $numero2; $contador++){
    echo "$contador <br/>";
}

}else{
    echo "<h1>Introduce correctamente los valores por la URL <\h1>";
}