<?php
include_once "../Config/conexion.php";
include_once "../Model/Estudiante.php";

if (!isset($_POST["nombre"], $_POST["grupo"])) {
    die("Datos incompletos");
}

$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"]);
$estudiante->guardar();

header("Location: ../View/Pages/mostrar_estudiantes.php");
exit;
?>