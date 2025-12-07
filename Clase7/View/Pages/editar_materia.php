<?php
include "../Templates/header.php";
include "../../Config/conexion.php";
include "../../Model/Materia.php";

if (!isset($_GET["id"])) {
    die("Falta el ID de la materia");
}

$materia = Materia::obtenerUna((int)$_GET["id"]);
?>

<h1>Editar Materia</h1>
<form action="../../Controller/actualizar_materia.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $materia->id; ?>">

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre de la materia</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($materia->nombre); ?>" required>
  </div>

  <button type="submit" class="btn btn-success">Actualizar Materia</button>
</form>

<?php include "../Templates/footer.php"; ?>