<?php
include_once "../Config/conexion.php";
include_once "../Model/Materia.php";

if (!isset($_POST["nombre"])) {
    die("Falta el nombre de la materia");
}

$materia = new Materia($_POST["nombre"]);
$materia->guardar();

header("Location: ../View/Pages/mostrar_materia.php");
exit;
?>