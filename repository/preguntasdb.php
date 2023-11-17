<?php
require_once '../helper/autocargar.php';

function obtenerPreguntas() {
    $db = new Database();
    $db->abreConexion();
    $conexion = $db->getConexion();

    $sql = "SELECT * FROM pregunta";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $preguntas = [];
    while ($row = $stmt->fetch()) {
        $pregunta = new Pregunta($row['id_pregunta'], $row['enunciado'], $row['respuestas'], $row['categoria'], $row['dificultad'], $row['url'], $row['tipoUrl']);
        $preguntas[] = $pregunta->toArray(); // método toArray()
    }

    return $preguntas;
}

$preguntas = obtenerPreguntas();

//convierte el array de preguntas en una cadena JSON
$preguntasJson = json_encode($preguntas);

//devuelve la cadena JSON al cliente
echo $preguntasJson;
?>
