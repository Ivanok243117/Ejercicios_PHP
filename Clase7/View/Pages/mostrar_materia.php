<?php
include_once "../../Config/conexion.php";
include_once "../Templates/header.php";
include_once "../../Model/Materia.php";

$materias = Materia::obtenerTodas();
?>

<h1>Listado de Materias</h1>
<a href="formulario_registro_materia.php" class="btn btn-info my-2">Nueva Materia</a>

<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($materias)) { foreach ($materias as $materia) { ?>
      <tr>
        <td><?php echo htmlspecialchars($materia["nombre"]); ?></td>
        <td>
          <a href="editar_materia.php?id=<?php echo $materia["id"]; ?>" class="btn btn-warning">Editar</a>
        </td>
        <td>
          <a href="../../Controller/eliminar_materia.php?id=<?php echo $materia["id"]; ?>"
             class="btn btn-danger"
             onclick="return confirm('¿Estás seguro de que deseas eliminar esta materia?');">
             Eliminar
          </a>
        </td>
      </tr>
    <?php } } else { ?>
      <tr><td colspan="3" class="text-center">No hay materias registradas.</td></tr>
    <?php } ?>
  </tbody>
</table>

<?php include "../Templates/footer.php"; ?>