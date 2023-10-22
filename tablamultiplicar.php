<?php


for($j = 1; $j<= 10; $j++){
    echo "<table border = 1>";
    
    for($i = 1; $i<= 10; $i++){
        echo "<tr>";
        echo "<td>";
        echo "$j x $i = ".$i*$j."<br/>"; 
        echo "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<br/>"; 
}