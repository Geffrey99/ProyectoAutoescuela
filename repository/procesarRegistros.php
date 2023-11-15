<?php
require_once '../helper/autocargar.php';   

    $db = new Database();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $action = $_POST['action'];

    // Valida y sanea los datos aquí

    if ($action == 'Aceptar solicitud') {
        // Mueve el registro a la tabla Usuario
        $stmt = $db->getPdo()->prepare("INSERT INTO Usuario (nombre, contrasena, rol) VALUES (?, ?, ?)");
        $stmt->execute([$username, $password, $role]);

        // Elimina el registro de la tabla UsuarioPendiente
        $stmt = $db->getPdo()->prepare("DELETE FROM UsuarioPendiente WHERE nombre = ? AND contrasena = ?");
        $stmt->execute([$username, $password]);
    } else if ($action == 'Rechazar solicitud') {
        // Elimina el registro de la tabla UsuarioPendiente
        $stmt = $db->getPdo()->prepare("DELETE FROM UsuarioPendiente WHERE nombre = ? AND contrasena = ?");
        $stmt->execute([$username, $password]);
    }
?>
