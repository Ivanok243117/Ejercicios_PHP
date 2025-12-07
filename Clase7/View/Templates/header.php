<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Control de notas</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Pages/index.php">Control de notas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="../Pages/acerca_de.php">Acerca de</a>
        </li>

        <!-- Estudiantes -->
        <li class="nav-item">
          <a class="nav-link" href="../Pages/form_registro_estudiantes.php">Registrar Estudiante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Pages/mostrar_estudiantes.php">Listado Estudiantes</a>
        </li>

        <!-- Materias -->
        <li class="nav-item">
          <a class="nav-link" href="../Pages/formulario_registro_materia.php">Registrar Materia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Pages/mostrar_materia.php">Listado Materias</a>
        </li>

        <!-- Notas -->
        <li class="nav-item">
          <a class="nav-link" href="../Pages/formulario_registro_nota.php">Registrar Nota</a>
        </li>
        <!-- Para mostrar notas de un estudiante, se pasa el ID por GET -->
        <!-- Ejemplo: mostrar_notas.php?estudiante_id=1 -->
        
      </ul>
    </div>
  </div>
</nav>
<div class="container py-4">