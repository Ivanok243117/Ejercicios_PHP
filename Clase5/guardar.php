<?php
// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir conexión
require 'conexion.php';

// Capturar datos del formulario
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$email = $_POST['email'] ?? '';

// Validación básica
if (empty($nombre) || empty($apellido) || empty($email)) {
    echo "<script>
        alert('Todos los campos son obligatorios');
        window.location.href = 'interfaz.php';
    </script>";
    exit;
}

// Preparar consulta SQL
$insertar = "INSERT INTO Cliente (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

// Ejecutar consulta
$query = mysqli_query($conectar, $insertar);

// Verificar resultado
if ($query) {
    echo "<script>
        alert('Datos ingresados correctamente');
        window.location.href = 'interfaz.php';
    </script>";
} else {
    echo "<script>
        alert('Error al ingresar los datos: " . mysqli_error($conectar) . "');
        window.location.href = 'interfaz.php';
    </script>";
}
?>

