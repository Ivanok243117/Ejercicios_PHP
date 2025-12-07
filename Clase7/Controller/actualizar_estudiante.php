<?php
include_once "../Config/conexion.php";
include_once "../Model/Estudiante.php";

if (!isset($_POST["id"], $_POST["nombre"], $_POST["grupo"])) {
    die("Datos incompletos");
}

$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"], (int)$_POST["id"]);
$estudiante->actualizar();

header("Location: ../View/Pages/mostrar_estudiantes.php");
exit;
?>
