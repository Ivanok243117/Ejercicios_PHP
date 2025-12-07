<?php
$mysqli = new mysqli('localhost', 'root', '', 'escueladb');

if ($mysqli->connect_errno) {
    die("Fallo en la conexión: " . $mysqli->connect_error);
}
?>