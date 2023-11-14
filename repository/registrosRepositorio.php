<?php
    require_once '../ENTITIES/Database.PHP';

    $db = new Database();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    // Valida y sanea los datos aquí

    $stmt = $db->getPdo()->prepare("INSERT INTO UsuarioPendiente (nombre, contrasena) VALUES (?, ?)");
    $stmt->execute([$username, $password]);
?>



<!-- <?php
    // Conexión a la base de datos
    // $conexion = new mysqli('localhost', 'username', 'password', 'database');

    // Recoge los datos del formulario de registro
    // $nombre = $_POST['username'];
    // $contrasena = $_POST['password'];

    // Inserta los datos en la tabla UsuarioPendiente
    // $sql = "INSERT INTO UsuarioPendiente (nombre, contrasena) VALUES ('$nombre', '$contrasena')";
    // $resultado = $conexion->query($sql);

    // Cierra la conexión
    // $conexion->close();
?> -->
<!-- <form action="ruta/a/tu/archivo.php" method="post">
    <label for="username">Nombre de usuario:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="status">Estado:</label><br>
    <select name="status" id="status">
        <option value="aprobado">Aprobar</option>
        <option value="rechazado">Rechazar</option>
    </select><br>
    <label for="role">Rol:</label><br>
    <select name="role" id="role">
        <option value="alumno">Alumno</option>
        <option value="profesor">Profesor</option>
        <option value="admin">Administrador</option>
    </select><br>
    <input type="submit" value="Enviar">
</form> -->