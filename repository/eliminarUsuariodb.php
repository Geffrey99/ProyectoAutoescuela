<?php
require_once '../helper/autocargar.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {

        $db = new Database();
        $db->abreConexion();
        $conexion = $db->getConexion();
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }

    $sql = "DELETE FROM Usuario WHERE id_usuario = ?";
    $stmt = $conexion->prepare($sql);
    if ($stmt->execute([$id])) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario.";
    }
}
?>
