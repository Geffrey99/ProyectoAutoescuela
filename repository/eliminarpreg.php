<?php
require_once '../helper/autocargar.php';

function eliminarPregunta($id_pregunta) {
    $db = new Database();
    $db->abreConexion();
    $conexion = $db->getConexion();

    $sql = "DELETE FROM pregunta WHERE id_pregunta = :id_pregunta";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':id_pregunta', $id_pregunta);
    $stmt->execute();
}

$id_pregunta = $_POST['id_pregunta'];
eliminarPregunta($id_pregunta);

echo 'Pregunta eliminada: ' . $id_pregunta;
?>
