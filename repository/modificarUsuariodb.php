<?php
require_once '../../helper/autocargar.php';


$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new Database();
$db->abreConexion();
$conexion = $db->getConexion();

$sql = "UPDATE Usuario SET nombre = ?, contrasena = ?, rol = ? WHERE id_usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->execute([$username, $password, $role, $id]);
?>