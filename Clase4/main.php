<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestor de Poemas</title>

  <!--Bootstrap 5 desde CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!--Estilos personalizados -->
  <style>
    body {
      padding: 30px;
      background-color: #f8f9fa;
    }
    .poema-card {
      margin-bottom: 20px;
    }
    textarea {
      resize: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <!--Título principal -->
    <h1 class="mb-4 text-center">Gestor de Poemas</h1>

    <!--Formulario para agregar poema -->
    <div class="card mb-5">
      <div class="card-header bg-primary text-white">Agregar nuevo poema</div>
      <div class="card-body">
        <form action="Ejercicio34.php" method="post">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título del poema</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="contenido" class="form-label">Contenido del poema</label>
            <textarea name="contenido" id="contenido" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" name="agregar" class="btn btn-success">Agregar</button>
        </form>
      </div>
    </div>

    <!-- Sección de poemas guardados -->
    <h2 class="mb-4">Poemas guardados</h2>
    <div class="row">
      <?php
        if (file_exists("poemas.txt")) {
          $poemas = file("poemas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          foreach ($poemas as $index => $linea) {
            list($titulo, $contenido) = explode("|", $linea);
            echo "<div class='col-md-4'>
                    <div class='card poema-card' style='box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);'>
                      <div class='card-body'>
                        <h5 class='card-title'>$titulo</h5>
                        <p class='card-text'>$contenido</p>
                        <div class='d-flex justify-content-between'>
                          <form action='Ejercicio34.php' method='post'>
                            <input type='hidden' name='poema_id' value='$index'>
                            <button type='submit' name='abrir' class='btn btn-outline-primary btn-sm'>Abrir</button>
                          </form>
                          <form action='Ejercicio34.php' method='post'>
                            <input type='hidden' name='poema_id' value='$index'>
                            <button type='submit' name='eliminar_individual' class='btn btn-outline-danger btn-sm'>Eliminar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>";
          }
        } else {
          echo "<p class='text-muted'>No hay poemas guardados.</p>";
        }
      ?>
    </div>
  </div>

  <!-- Bootstrap JS (opcional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
