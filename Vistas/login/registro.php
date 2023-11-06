<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/estilologin.css">
    <title>Registrarse</title>
</head>
<body>
<?php
require_once '../../helper/autocargar.php';
$db = new Database(); 
$pdo = $db->getPdo(); 

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

   
    if ($password !== $repeat_password) {
        echo "Las contraseñas no coinciden.";
        return;
    }

    // se comprueba si el nombre de usuario ya existeee
    $sql = "SELECT * FROM Usuario WHERE nombre = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        echo "El nombre de usuario ya existe.";
        return;
    }

    // se inserta el nuevo usuario en la base de datos
    $hashed_password = $password;
   // $hashed_password = password_hash($password, PASSWORD_DEFAULT); sirve para guardar la contraseña cifrada
    $sql = "INSERT INTO Usuario (nombre, contrasena) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $hashed_password]);

    echo "Registro exitoso. Ahora puedes iniciar sesión.";
}
?>
  <div class="login-div">
        <form action="" method="post">
            <h4> Autoescuela Geffrey </h4>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="repeat_password" placeholder="Repetir contraseña" required>
            <button type="submit">Registrarse</button> 
        </form>
        <div class="a">
        <a href="inicio.php">Iniciar sesión </a>
        </div>
    </div>
</form>
</body>
</html>
