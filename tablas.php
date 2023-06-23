<?php

$columna;
$fila;
echo"<style>
table, th, td {
  border: 1px solid black;
}
</style>";
echo "<table>";
    echo"<tr>";
    for ($columna =1; $columna <=10; $columna++){
        
        echo "<th>Tabla del ".$columna."</th>";
    }
    echo"</tr>";

    for ($columna=1;$columna <= 10; $columna++){
        echo"<tr>";
        for ($fila = 1;$fila <= 10 ; $fila ++){
            echo"<td>";
            echo"$fila x $columna = ".$fila*$columna;
            echo"</td>";
        }
        echo"</tr>";
    }

echo "</table>";