<?php include "../Templates/header.php"; ?>
<h1>Registro Estudiantes</h1>
<form action="../../Controller/guardar_estudiante.php" method="POST">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pepito Pérez" required>
  </div>
  <div class="mb-3">
    <label for="grupo" class="form-label">Grupo</label>
    <input type="text" class="form-control" id="grupo" name="grupo" placeholder="10-2" required>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<?php include "../Templates/footer.php"; ?>