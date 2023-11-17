<?php
require_once '../../helper/autocargar.php';

function obtenerUsuariosPendientes() {
    $db = new Database();
    $db->abreConexion();
    $stmt = $db->getConexion()->prepare("SELECT * FROM UsuarioPendiente");
    $stmt->execute();
    return $stmt->fetchAll();
}
?>
