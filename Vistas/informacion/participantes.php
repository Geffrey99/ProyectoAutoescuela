<!DOCTYPE html>
<html>
<head>
<title>Participantes</title>
    <script src="../../Api/procesaUsuariodb.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/estiloParticipantes.css">
</head>
<body>
    <?php
    require_once '../../repository/usuariosdb.php';

    $participantes = obtenerParticipantes();

    echo "<table id='tabla-participantes'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Rol</th><th>Acciones</th></tr>";
    foreach ($participantes as $participante) {
        echo "<tr>";
        echo "<td>" . $participante->getIdUsuario() . "</td>";
        echo "<td>" . $participante->getNombre() . "</td>";
        echo "<td>" . $participante->getRol() . "</td>";
        echo "<td><button data-id='" . $participante->getIdUsuario() . "' onclick='eliminarUsuario(this.getAttribute(\"data-id\"))'>Eliminar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
