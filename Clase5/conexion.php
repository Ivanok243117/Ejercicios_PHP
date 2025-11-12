<?php
$host = "localhost";
$user = "root";
$clave = "";
$bd = "phpdesdecero";

// Intentar conectar
$conectar = mysqli_connect($host, $user, $clave, $bd);

// Verificar conexión
if (!$conectar) {
echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : " . mysqli_connect_error() . PHP_EOL;
    die;
}else{
     echo "Conexión exitosa a la base de datos";
}
?>
