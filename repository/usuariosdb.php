<?php
require_once '../../helper/autocargar.php';

function obtenerParticipantes() {
    $db = new Database();
    $pdo = $db->getPdo();

    $sql = "SELECT * FROM Usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $participantes = [];
    while ($row = $stmt->fetch()) {
        $participante = new usuario($row['id_usuario'], $row['nombre'], $row['contrasena'], $row['rol']);
        $participantes[] = $participante;
    }

    return $participantes;
}

?>