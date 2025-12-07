<?php
class Estudiante {
    public $id, $nombre, $grupo;

    public function __construct($nombre = null, $grupo = null, $id = null) {
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        $this->id = $id;
    }

    public function guardar() {
        global $mysqli;
        $stmt = $mysqli->prepare("INSERT INTO estudiantes (nombre, grupo) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->nombre, $this->grupo);
        return $stmt->execute();
    }

    public function actualizar() {
        global $mysqli;
        $stmt = $mysqli->prepare("UPDATE estudiantes SET nombre=?, grupo=? WHERE id=?");
        $stmt->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        return $stmt->execute();
    }

    public static function eliminar($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("DELETE FROM estudiantes WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function obtener() {
        global $mysqli;
        $res = $mysqli->query("SELECT * FROM estudiantes");
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public static function obtenerUno($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM estudiantes WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object("Estudiante");
    }
}
?>