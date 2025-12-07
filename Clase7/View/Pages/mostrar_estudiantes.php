<?php
include_once "../../Config/conexion.php";
include_once "../Templates/header.php";
include_once "../../Model/Estudiante.php";

$estudiantes = Estudiante::obtener();
?>
<div class="row">
  <div class="col-12 d-flex justify-content-between align-items-center">
    <h1>Listado de estudiantes</h1>
    <a class="btn btn-info" href="form_registro_estudiantes.php">Nuevo</a>
  </div>
  <div class="col-12 table-responsive mt-3">
    <table class="table table-dark table-striped table-hover">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Grupo</th>
          <th>Notas</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($estudiantes)) { foreach ($estudiantes as $e) { ?>
          <tr>
            <td><?php echo htmlspecialchars($e["nombre"]); ?></td>
            <td><?php echo htmlspecialchars($e["grupo"]); ?></td>
            <td>
              <!-- Botón para ver notas del estudiante -->
              <a href="mostrar_notas.php?estudiante_id=<?php echo (int)$e["id"]; ?>" class="btn btn-info">
                Ver notas
              </a>
            </td>
            <td>
              <a href="editar_estudiante.php?id=<?php echo (int)$e["id"]; ?>" class="btn btn-warning">Editar</a>
            </td>
            <td>
              <a href="../../Controller/eliminar_estudiante.php?id=<?php echo (int)$e["id"]; ?>"
                 class="btn btn-danger"
                 onclick="return confirm('¿Eliminar este estudiante?');">
                 Eliminar
              </a>
            </td>
          </tr>
        <?php } } else { ?>
          <tr><td colspan="5" class="text-center">No hay estudiantes registrados.</td></tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php include "../Templates/footer.php"; ?>