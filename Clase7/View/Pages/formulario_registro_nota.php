<?php
include "../Templates/header.php";
include "../../Config/conexion.php";
include "../../Model/Estudiante.php";
include "../../Model/Materia.php";

$estudiantes = Estudiante::obtener();
$materias = Materia::obtenerTodas();
?>

<h1>Registrar Nota</h1>
<form action="../../Controller/guardar_nota.php" method="POST">
  <div class="mb-3">
    <label for="estudiante_id" class="form-label">Estudiante</label>
    <select name="estudiante_id" id="estudiante_id" class="form-control" required>
      <option value="">Seleccione un estudiante</option>
      <?php foreach ($estudiantes as $e) { ?>
        <option value="<?php echo $e["id"]; ?>">
          <?php echo htmlspecialchars($e["nombre"]) . " (" . htmlspecialchars($e["grupo"]) . ")"; ?>
        </option>
      <?php } ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="materia_id" class="form-label">Materia</label>
    <select name="materia_id" id="materia_id" class="form-control" required>
      <option value="">Seleccione una materia</option>
      <?php foreach ($materias as $m) { ?>
        <option value="<?php echo $m["id"]; ?>">
          <?php echo htmlspecialchars($m["nombre"]); ?>
        </option>
      <?php } ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="nota" class="form-label">Nota</label>
    <input type="number" step="0.01" min="0" max="5" class="form-control" id="nota" name="nota" required>
  </div>

  <button type="submit" class="btn btn-primary">Guardar Nota</button>
</form>

<?php include "../Templates/footer.php"; ?>