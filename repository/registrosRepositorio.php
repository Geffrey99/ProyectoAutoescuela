<?php
require_once '../helper/autocargar.php';   

if (isset($_POST['username'], $_POST['password'], $_POST['repeat_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    //verifico que las contraseñas coincidan
    if ($password !== $repeat_password) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    try {
        $db = new Database();
        $db->abreConexion();
        $conexion = $db->getConexion();
        //compruebo si el nombre de usuario ya existe
        $stmt = $conexion->prepare("SELECT * FROM Usuario WHERE nombre = ?");
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            echo "El nombre de usuario ya existe.";
            exit();
        }

        //y registro al usuario en la tabla UsuarioPendiente
        $stmt = $conexion->prepare("INSERT INTO UsuarioPendiente (nombre, contrasena) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        echo "Usuario registrado correctamente.";
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    
    header('Location: ./../index.php');
    exit;
}
?>

