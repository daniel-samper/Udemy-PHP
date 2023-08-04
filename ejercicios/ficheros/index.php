<?php
/*
// abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// leer archivo
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

// Escribir
fwrite($archivo, "soy u ntexto metido desde PHP");

// cerrar archivo
fclose($archivo);
*/

/* COPIAR
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");
*/

/* RENOMBRAR
rename('fichero_copiado.txt', 'archivito_recopiadito.txt');
 */

/* ELIMINAR
unlink('archivito_recopiadito.txt') or dia("Error al borrar");
 */

if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
}else{
    echo "El fichero no existe";
}











