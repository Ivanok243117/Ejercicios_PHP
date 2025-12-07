<?php
include_once "../Config/conexion.php";
include_once "../Model/Materia.php";

if (!isset($_GET["id"])) {
    die("Falta el ID de la materia");
}

Materia::eliminar((int)$_GET["id"]);

header("Location: ../View/Pages/mostrar_materia.php");
exit;
?>