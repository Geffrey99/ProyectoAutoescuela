<?php
require_once '../../helper/autocargar.php';
require_once '../../helper/validator.php';

$db = new Database();
$pdo = $db->getPdo();

$sql = "SELECT * FROM Usuario";
// $sql = "SELECT * FROM Usuario WHERE rol = 'Alumno'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$participantes = [];
while ($row = $stmt->fetch()) {
    $participante = new usuario($row['id_usuario'], $row['nombre'], $row['contrasena'], $row['rol']);
    $participantes[] = $participante;
}

foreach ($participantes as $participante) {
    echo "ID: " . $participante->getIdUsuario() . "<br>";
    echo "Nombre: " . $participante->getNombre() . "<br>";
    echo "Rol: " . $participante->getRol() . "<br>";
    echo "<hr>";
}
?>