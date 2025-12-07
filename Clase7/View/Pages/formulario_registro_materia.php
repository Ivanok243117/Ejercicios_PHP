<?php
include "../Templates/header.php";
include "../../Config/conexion.php";
?>

<h1>Registrar Materia</h1>
<form action="../../Controller/guardar_materia.php" method="POST">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre de la materia</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Matemáticas" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar Materia</button>
</form>

<?php include "../Templates/footer.php"; ?>