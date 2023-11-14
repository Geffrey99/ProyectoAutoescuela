
<!DOCTYPE html>
<html>
<script src="../../api/procesaRegistro.js"></script>
<body> 
<div id="userList">
    <?php
        // include_once './autocargar.php';
        require_once '../../helper/autocargar.php';
        $db = new Database();
        $stmt = $db->getPdo()->prepare("SELECT * FROM UsuarioPendiente");
        $stmt->execute();
        $users = $stmt->fetchAll();
        if (empty($users)) {
            echo 'No hay solicitudes.';
        } else {
            foreach ($users as $user) {
                echo '<form onsubmit="processUser(event, \''.$user['nombre'].'\', \''.$user['contrasena'].'\', this.role.value)" method="post">';
                echo '<label for="username">Nombre de usuario:</label><br>';
                echo '<input type="text" id="username" name="username" value="'.$user['nombre'].'" required readonly><br>';
                echo '<label for="password">Contraseña:</label><br>';
                echo '<input type="password" id="password" name="password" value="'.$user['contrasena'].'" required readonly><br>';
                echo '<label for="role">Rol:</label><br>';
                echo '<select name="role" id="role">';
                echo '<option value="alumno">Alumno</option>';
                echo '<option value="profesor">Profesor</option>';
                echo '<option value="admin">Administrador</option>';
                echo '</select><br>';
                echo '<input type="submit" name="action" value="Aceptar solicitud">';
                echo '<input type="submit" name="action" value="Rechazar solicitud">';
                echo '</form>';
            }
        }
    ?>
  <div id="userList">
</body> 
</html>
