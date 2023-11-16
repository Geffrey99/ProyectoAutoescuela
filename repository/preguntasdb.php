<?php
require_once '../helper/autocargar.php';

function obtenerPreguntas() {
    $db = new Database();
    $pdo = $db->getPdo();

    $sql = "SELECT * FROM pregunta";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $preguntas = [];
    while ($row = $stmt->fetch()) {
        $pregunta = new Pregunta($row['id_pregunta'], $row['enunciado'], $row['respuestas'], $row['categoria'], $row['dificultad'], $row['url'], $row['tipoUrl']);
        $preguntas[] = $pregunta->toArray(); // Usa el método toArray()
    }

    return $preguntas;
}


// Obtén las preguntas
$preguntas = obtenerPreguntas();

// Convierte el array de preguntas en una cadena JSON
$preguntasJson = json_encode($preguntas);

// Devuelve la cadena JSON al cliente
echo $preguntasJson;
?>
