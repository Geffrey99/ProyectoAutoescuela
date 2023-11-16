<?php
require_once '../../helper/autocargar.php';

// Obtén los datos del usuario del POST
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new Database();
$pdo = $db->getPdo();

// Lógica para modificar el usuario en la base de datos
$sql = "UPDATE Usuario SET nombre = ?, contrasena = ?, rol = ? WHERE id_usuario = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password, $role, $id]);
?>