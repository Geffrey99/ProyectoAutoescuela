<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Aquí es donde incluyes tu archivo CSS -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Iniciar sesión</title>
</head>
<body>
<?php        
require '../entities/db.php';
//session_start();
$db = new Database(); // Crea una nueva instancia de la clase Database
$pdo = $db->getPdo(); // Obtiene el objeto PDO

if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
    $username = $_POST['nombre'];
    $password = $_POST['contrasena'];

    $sql = "SELECT * FROM Usuario WHERE nombre = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if ($user && $password == $user['contrasena']) {
        session_start();
        $_SESSION['username'] = $user['username'];
    
        header('Location: ../index.html');
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
 <div class="login-div">
<form action="" method="post">
<h4>Autoescuela Geffrey</h4>
    <label for="nombre">Nombre de usuario</label>
    <input type="text" id="nombre" name="nombre">
    <label for="password">Contraseña</label>
    <input type="contrasena" id="contrasena" name="contrasena">
    <button type="submit">Iniciar sesión</button>
    <div class="a">
        <a href="registro.php">Registrarse</a>
        </div>
    </div>
</form>
</body>
</html>
