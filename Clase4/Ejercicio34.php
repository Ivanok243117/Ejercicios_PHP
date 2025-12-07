<?php
// Agregar poema
if (isset($_POST['agregar'])) {
    $titulo = trim($_POST['titulo']);
    $contenido = str_replace(["\r\n", "\n", "\r"], " ", trim($_POST['contenido']));

    if ($titulo !== "" && $contenido !== "") {
        $linea = "$titulo|$contenido\n";
        file_put_contents("poemas.txt", $linea, FILE_APPEND);
        header("Location: main.php");
        exit;
    } else {
        echo "Por favor complete ambos campos.";
    }
}

// Eliminar poema individual
if (isset($_POST['eliminar_individual'])) {
    $id = intval($_POST['poema_id']);
    $poemas = file_exists("poemas.txt") ? file("poemas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

    if (isset($poemas[$id])) {
        unset($poemas[$id]);
        file_put_contents("poemas.txt", implode("\n", $poemas) . "\n");
    }

    header("Location: main.php");
    exit;
}

// Abrir poema
if (isset($_POST['abrir'])) {
    $id = intval($_POST['poema_id']);
    $poemas = file_exists("poemas.txt") ? file("poemas.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

    if (isset($poemas[$id])) {
        list($titulo, $contenido) = explode("|", $poemas[$id]);
        echo "<h2>$titulo</h2><p>$contenido</p>";
    } else {
        echo "<p>Poema no encontrado.</p>";
    }

    echo "<br><a href='main.php'>Volver</a>";
    exit;
}
