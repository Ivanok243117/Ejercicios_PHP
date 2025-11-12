<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestor de Poemas</title>

  <!-- Enlace a Bootstrap 5 para estilos modernos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
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
    <!-- Título principal del sistema -->
    <h1 class="mb-4 text-center">Gestor de Poemas</h1>

    <!-- BLOQUE 1: Formulario para agregar nuevos poemas -->
    <!-- Este formulario envía los datos al archivo Ejercicio34.php -->
    <div class="card mb-5">
      <div class="card-header bg-primary text-white">Agregar nuevo poema</div>
      <div class="card-body">
        <form action="Ejercicio34.php" method="post">
          <!-- Campo para el título del poema -->
          <div class="mb-3">
            <label for="titulo" class="form-label">Título del poema</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
          </div>
          <!-- Campo para el contenido del poema -->
          <div class="mb-3">
            <label for="contenido" class="form-label">Contenido del poema</label>
            <textarea name="contenido" id="contenido" class="form-control" rows="4" required></textarea>
          </div>
          <!-- Botón para enviar el formulario -->
          <button type="submit" name="agregar" class="btn btn-success">Agregar</button>
        </form>
      </div>
    </div>

    <!-- BLOQUE 2: Sección para mostrar los poemas guardados -->
    <h2 class="mb-4">Poemas guardados</h2>
    <div class="row">
      <?php
        // Verifica si el archivo poemas.txt existe
        if (file_exists("poemas.txt")) {
          // Carga el archivo como arreglo de líneas
          $poemas = file("poemas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

          // Recorre cada línea del archivo
          foreach ($poemas as $index => $linea) {
            // Separa el título y el contenido usando el delimitador "|"
            list($titulo, $contenido) = explode("|", $linea);

            // BLOQUE 3: Tarjeta visual para cada poema
            echo "<div class='col-md-4'>
                    <div class='card poema-card' style='box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);'>
                      <div class='card-body'>
                        <h5 class='card-title'>$titulo</h5>
                        <p class='card-text'>$contenido</p>

                        <!-- BLOQUE 4: Botones de acción para cada poema -->
                        <div class='d-flex justify-content-between'>
                          <!-- Formulario para abrir el poema -->
                          <form action='Ejercicio34.php' method='post'>
                            <input type='hidden' name='poema_id' value='$index'>
                            <button type='submit' name='abrir' class='btn btn-outline-primary btn-sm'>Abrir</button>
                          </form>

                          <!-- Formulario para eliminar el poema -->
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
          // Mensaje si no hay poemas guardados
          echo "<p class='text-muted'>No hay poemas guardados.</p>";
        }
      ?>
    </div>
  </div>

  <!-- Bootstrap JS (opcional si usas componentes interactivos) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

