<?php
class Materia {
    public $id, $nombre;

    public function __construct($nombre = null, $id = null) {
        $this->nombre = $nombre;
        $this->id = $id;
    }

    public function guardar() {
        global $mysqli;
        $stmt = $mysqli->prepare("INSERT INTO materias (nombre) VALUES (?)");
        $stmt->bind_param("s", $this->nombre);
        return $stmt->execute();
    }

    public function actualizar() {
        global $mysqli;
        $stmt = $mysqli->prepare("UPDATE materias SET nombre=? WHERE id=?");
        $stmt->bind_param("si", $this->nombre, $this->id);
        return $stmt->execute();
    }

    public static function eliminar($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("DELETE FROM materias WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function obtenerTodas() {
        global $mysqli;
        $res = $mysqli->query("SELECT * FROM materias");
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public static function obtenerUna($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM materias WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object("Materia");
    }
}
?>