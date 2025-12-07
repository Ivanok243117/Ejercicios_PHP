<?php
include_once "../Config/conexion.php";
include_once "../Model/Estudiante.php";

if (!isset($_GET["id"])) {
    die("Falta el ID");
}

Estudiante::eliminar((int)$_GET["id"]);

header("Location: ../View/Pages/mostrar_estudiantes.php");
exit;
?>
