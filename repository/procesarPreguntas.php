<?php
require_once '../helper/autocargar.php';
$db = new Database();
$db->abreConexion();
$conexion = $db->getConexion();

$pregunta = $_POST['pregunta'];
$categoria = $_POST['categoria'];
$dificultad = $_POST['dificultad'];
$respuesta1 = $_POST['respuesta1'];
$respuesta2 = $_POST['respuesta2'];
$respuesta3 = $_POST['respuesta3'];
$correcta = $_POST['correcta'];

$respuestas = json_encode([
    'respuesta1' => $respuesta1,
    'respuesta2' => $respuesta2,
    'respuesta3' => $respuesta3,
    'correcta' => $correcta
]);

$url = '';
$tipoUrl = '';

if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['archivo']['tmp_name'];
    $fileName = $_FILES['archivo']['name'];
    $fileSize = $_FILES['archivo']['size'];
    $fileType = $_FILES['archivo']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $uploadFileDir = './uploaded_files/';
    $dest_path = $uploadFileDir . $newFileName;

    if(move_uploaded_file($fileTmpPath, $dest_path)) {
        $url = $dest_path;
        $tipoUrl = $fileType;
    }
}

// Insertar la categoría si no existe
$stmt = $pdo->prepare("INSERT IGNORE INTO categoria (nombre) VALUES (?)");
$stmt->execute([$categoria]);

// Insertar la dificultad si no existe
$stmt = $pdo->prepare("INSERT IGNORE INTO dificultad (nombre) VALUES (?)");
$stmt->execute([$dificultad]);

$sql = "INSERT INTO pregunta (enunciado, respuestas, categoria, dificultad, url, tipoUrl) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$pregunta, $respuestas, $categoria, $dificultad, $url, $tipoUrl]);
?>
