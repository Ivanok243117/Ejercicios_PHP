<?php
// Definición de clases
class Padre {
    private $cejas;
    private $ojos;
    private $nariz;

    function __construct($ojos, $cejas, $nariz) {
        $this->ojos = $ojos;
        $this->cejas = $cejas;
        $this->nariz = $nariz;
    }

    public function obtenerInformacion() {
        return "Ojos: $this->ojos, Cejas: $this->cejas, Nariz: $this->nariz";
    }

    public function mostrarInformacion() {
        echo "<h3>Padre</h3>";
        echo "Información personal: " . $this->obtenerInformacion();
    }
}

class Hijo extends Padre {
    private $formaCara;

    public function __construct($ojos, $cejas, $nariz, $formaCara) {
        parent::__construct($ojos, $cejas, $nariz);
        $this->formaCara = $formaCara;
    }

    public function mostrarInformacion() {
        echo "<h3>Hijo</h3>";
        echo "Información personal: " . $this->obtenerInformacion() . ", Forma de cara: $this->formaCara";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formularios Padre e Hijo</title>
</head>
<body>
    <h2>Formulario Padre</h2>
    <form method="post">
        Ojos: <input type="text" name="ojos"><br>
        Cejas: <input type="text" name="cejas"><br>
        Nariz: <input type="text" name="nariz"><br>
        <input type="submit" name="guardarPadre" value="Guardar Padre">
    </form>

    <h2>Formulario Hijo</h2>
    <form method="post">
        Ojos: <input type="text" name="ojosHijo"><br>
        Cejas: <input type="text" name="cejasHijo"><br>
        Nariz: <input type="text" name="narizHijo"><br>
        Forma de cara: <input type="text" name="formaCara"><br>
        <input type="submit" name="guardarHijo" value="Guardar Hijo">
    </form>

    <hr>

    <?php
    // Procesar formulario Padre
    if (isset($_POST['guardarPadre'])) {
        $padre = new Padre($_POST['ojos'], $_POST['cejas'], $_POST['nariz']);
        $padre->mostrarInformacion();
    }

    // Procesar formulario Hijo
    if (isset($_POST['guardarHijo'])) {
        $hijo = new Hijo($_POST['ojosHijo'], $_POST['cejasHijo'], $_POST['narizHijo'], $_POST['formaCara']);
        $hijo->mostrarInformacion();
    }
    ?>
</body>
</html>
