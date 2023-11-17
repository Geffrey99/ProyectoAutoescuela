<?php
require_once '../../helper/autocargar.php';

function obtenerParticipantes() {
    $db = new Database();
        $db->abreConexion();
        $conexion = $db->getConexion();

    $sql = "SELECT * FROM Usuario";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $participantes = [];
    while ($row = $stmt->fetch()) {
        $participante = new usuario($row['id_usuario'], $row['nombre'], $row['contrasena'], $row['rol']);
        $participantes[] = $participante;
    }

    return $participantes;
}

?>