<?php
// Creacion de cookies
$nombre = setcookie("nombre", 1, time() + (60 * 2)); // 2 minutos
echo $nombre;

// file
print_r(file("archivo.txt"));
//file_exists
echo "<br>";
echo file_get_contents("archivo.txt");
//pa aescribir
echo "<br>";
file_put_contents("archivo.txt", "Volvere");
//tiempo en file
echo "<br>";
echo filemtime("archivo.txt");
echo "<br>";
echo "ultimo acceso", date("d/m/Y H:i:s", filemtime("archivo.txt"));
//escritura
$file = fopen("archivo.txt", "w");
echo fwrite($file, "testing de archivo txt");
fclose($file);
//agregar
$file = fopen("archivo.txt", "a");
echo fwrite($file, "prueba de archivo txt");
fclose($file);
//otra forma
file_put_contents("archivo.txt", "\nhola mundo", FILE_APPEND);
