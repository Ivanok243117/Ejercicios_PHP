<?php
class Nota {
    public $id, $estudiante_id, $materia_id, $nota;

    public function __construct($estudiante_id, $materia_id, $nota, $id = null) {
        $this->estudiante_id = $estudiante_id;
        $this->materia_id = $materia_id;
        $this->nota = $nota;
        $this->id = $id;
    }

    public function guardar() {
        global $mysqli;
        $stmt = $mysqli->prepare("INSERT INTO notas (estudiante_id, materia_id, nota) VALUES (?, ?, ?)");
        $stmt->bind_param("iid", $this->estudiante_id, $this->materia_id, $this->nota);
        return $stmt->execute();
    }

    public function actualizar() {
        global $mysqli;
        $stmt = $mysqli->prepare("UPDATE notas SET nota=? WHERE id=?");
        $stmt->bind_param("di", $this->nota, $this->id);
        return $stmt->execute();
    }

    public static function eliminar($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("DELETE FROM notas WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function obtenerPorEstudiante($estudiante_id) {
        global $mysqli;
        $stmt = $mysqli->prepare("
            SELECT notas.id, materias.nombre AS materia, notas.nota
            FROM notas
            JOIN materias ON notas.materia_id = materias.id
            WHERE notas.estudiante_id = ?
        ");
        $stmt->bind_param("i", $estudiante_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public static function obtenerUna($id) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM notas WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object("Nota");
    }
}
?>