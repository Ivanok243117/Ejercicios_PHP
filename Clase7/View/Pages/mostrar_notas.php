<?php
include "../Templates/header.php";
include "../../Config/conexion.php";
include "../../Model/Nota.php";

if (!isset($_GET["estudiante_id"])) {
    die("Falta el ID del estudiante");
}

$notas = Nota::obtenerPorEstudiante((int)$_GET["estudiante_id"]);
?>

<h1>Notas del Estudiante</h1>
<a href="formulario_registro_nota.php" class="btn btn-info my-2">Nueva Nota</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>Materia</th>
      <th>Nota</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($notas)) { foreach ($notas as $n) { ?>
      <tr>
        <td><?php echo htmlspecialchars($n["materia"]); ?></td>
        <td><?php echo htmlspecialchars($n["nota"]); ?></td>
        <td>
          <a href="editar_nota.php?id=<?php echo $n["id"]; ?>&estudiante_id=<?php echo $_GET["estudiante_id"]; ?>" class="btn btn-warning">Editar</a>
        </td>
        <td>
          <a href="../../Controller/eliminar_nota.php?id=<?php echo $n["id"]; ?>&estudiante_id=<?php echo $_GET["estudiante_id"]; ?>" class="btn btn-danger" onclick="return confirm('¿Eliminar esta nota?');">Eliminar</a>
        </td>
      </tr>
    <?php } } else { ?>
      <tr><td colspan="4" class="text-center">No hay notas registradas.</td></tr>
    <?php } ?>
  </tbody>
</table>

<?php include "../Templates/footer.php"; ?>