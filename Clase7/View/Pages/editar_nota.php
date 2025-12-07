<?php
include "../Templates/header.php";
include "../../Config/conexion.php";
include "../../Model/Nota.php";
include "../../Model/Materia.php";

if (!isset($_GET["id"], $_GET["estudiante_id"])) {
    die("Faltan parámetros");
}

$nota = Nota::obtenerUna((int)$_GET["id"]);
$materias = Materia::obtenerTodas();
?>

<h1>Editar Nota</h1>
<form action="../../Controller/actualizar_nota.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $nota->id; ?>">
  <input type="hidden" name="estudiante_id" value="<?php echo $_GET["estudiante_id"]; ?>">

  <div class="mb-3">
    <label for="materia_id" class="form-label">Materia</label>
    <select name="materia_id" id="materia_id" class="form-control" required>
      <?php foreach ($materias as $m) { ?>
        <option value="<?php echo $m["id"]; ?>" <?php if ($m["id"] == $nota->materia_id) echo "selected"; ?>>
          <?php echo htmlspecialchars($m["nombre"]); ?>
        </option>
      <?php } ?>
    </select>
  </div>

  <div class="mb-3">
    <label for="nota" class="form-label">Nota</label>
    <input type="number" step="0.01" min="0" max="5" class="form-control" id="nota" name="nota" value="<?php echo $nota->nota; ?>" required>
  </div>

  <button type="submit" class="btn btn-success">Actualizar Nota</button>
</form>

<?php include "../Templates/footer.php"; ?>