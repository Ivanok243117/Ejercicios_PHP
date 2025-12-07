<?php
include_once "../Config/conexion.php";
include_once "../Model/Nota.php";

$nota = new Nota($_POST["estudiante_id"], $_POST["materia_id"], $_POST["nota"]);
$nota->guardar();

header("Location: ../View/Pages/mostrar_notas.php?estudiante_id=" . $_POST["estudiante_id"]);
exit;
?>