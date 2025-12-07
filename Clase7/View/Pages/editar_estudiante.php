<?php
include_once "../../Config/conexion.php";
include_once "../Templates/header.php";
include_once "../../Model/Estudiante.php";

if (!isset($_GET["id"])) {
    die("Falta el ID");
}

$estudiante = Estudiante::obtenerUno((int)$_GET["id"]);
if (!$estudiante) {
    die("Estudiante no encontrado");
}
?>
<h1>Editar estudiante</h1>
<form action="../../Controller/actualizar_estudiante.php" method="POST">
  <input type="hidden" name="id" value="<?php echo (int)$estudiante->id; ?>">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo htmlspecialchars($estudiante->nombre); ?>" required>
  </div>
  <div class="mb-3">
    <label for="grupo" class="form-label">Grupo</label>
    <input type="text" id="grupo" name="grupo" class="form-control" value="<?php echo htmlspecialchars($estudiante->grupo); ?>" required>
  </div>
  <button class="btn btn-success" type="submit">Guardar</button>
</form>
<?php include "../Templates/footer.php"; ?>