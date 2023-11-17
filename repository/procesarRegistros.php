<?php
require_once '../helper/autocargar.php';   

$db = new Database();
$db->abreConexion();
$conexion = $db->getConexion();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $action = $_POST['action'];

    if ($action == 'Aceptar solicitud') {
        // Los guarda en la tabla Usuario
        $stmt = $db->getConexion()->prepare("INSERT INTO Usuario (nombre, contrasena, rol) VALUES (?, ?, ?)");
        $stmt->execute([$username, $password, $role]);

        // y elimina el registro de la tabla UsuarioPendiente
        $stmt = $db->getConexion()->prepare("DELETE FROM UsuarioPendiente WHERE nombre = ? AND contrasena = ?");
        $stmt->execute([$username, $password]);
    } else if ($action == 'Rechazar solicitud') {
        // elimina el registro de la tabla UsuarioPendiente
        $stmt = $db->getConexion()->prepare("DELETE FROM UsuarioPendiente WHERE nombre = ? AND contrasena = ?");
        $stmt->execute([$username, $password]);
    }
?>
