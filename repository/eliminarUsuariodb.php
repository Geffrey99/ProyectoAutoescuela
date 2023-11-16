<?php
require_once '../../helper/autocargar.php';

// Obtén el ID del usuario del POST
$id = $_POST['id'];

$db = new Database();
$pdo = $db->getPdo();

// Lógica para eliminar el usuario de la base de datos
$sql = "DELETE FROM Usuario WHERE id_usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
?>
