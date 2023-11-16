<!DOCTYPE html>
<html>
<head>
    <title>Registros</title>
    <script src="../../Api/procesaRegistro.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/estiloRegistros.css">
</head>
<body>
    <?php
    require_once '../../repository/obtenerusuariospendientes.php';

    $users = obtenerUsuariosPendientes();

    if (empty($users)) {
        echo 'No hay solicitudes.';
    } else {
        foreach ($users as $user) {
            echo '<form id="formulario-registros" onsubmit="procesaUsuario(event, \''.$user['nombre'].'\', \''.$user['contrasena'].'\', this.role.value)" method="post">';
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
</body>
</html>
