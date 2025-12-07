<?php
include_once "../Config/conexion.php";
include_once "../Model/Nota.php";

Nota::eliminar($_GET["id"]);

header("Location: ../View/Pages/mostrar_notas.php?estudiante_id=" . $_GET["estudiante_id"]);
exit;
?>