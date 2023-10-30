<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Iniciar sesión</title>
</head>
<body>
<?php
require '../entities/db.php'; 

$db = new Database(); // Crea una nueva instancia de la clase Database
$pdo = $db->getPdo(); // Obtiene el objeto PDO

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];
        echo "DDDD";
        //header('Location: dashboard.php');
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
  <div class="login-div">
        <form action="/register" method="post">
            <h4> Autoescuela Geffrey </h4>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="repeat_password" placeholder="Repetir contraseña" required>
            <button type="submit">Registrarse</button> 
        </form>
        <div class="a">
        <a href="index.php">Iniciar sesión </a>
        </div>
    </div>
</form>
</body>
</html>
