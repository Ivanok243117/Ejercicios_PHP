<?php
include_once "../Config/conexion.php";
include_once "../Model/Materia.php";

if (!isset($_POST["id"], $_POST["nombre"])) {
    die("Datos incompletos");
}

$materia = new Materia($_POST["nombre"], (int)$_POST["id"]);
$materia->actualizar();

header("Location: ../View/Pages/mostrar_materia.php");
exit;
?>