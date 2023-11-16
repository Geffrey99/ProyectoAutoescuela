<?php
require_once '../../helper/autocargar.php';

function obtenerUsuariosPendientes() {
    $db = new Database();
    $stmt = $db->getPdo()->prepare("SELECT * FROM UsuarioPendiente");
    $stmt->execute();
    return $stmt->fetchAll();
}
?>
