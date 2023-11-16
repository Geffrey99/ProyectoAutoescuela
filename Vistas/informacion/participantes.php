<!DOCTYPE html>
<html>
<head>

    <script src="../../Api/procesaUsuariodb.js"></script>
</head>
<body>
    <?php
    require_once '../../repository/usuariosdb.php';

    $participantes = obtenerParticipantes();

    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Rol</th><th>Acciones</th></tr>";
    foreach ($participantes as $participante) {
        echo "<tr>";
        echo "<td>" . $participante->getIdUsuario() . "</td>";
        echo "<td>" . $participante->getNombre() . "</td>";
        echo "<td>" . $participante->getRol() . "</td>";
     
        echo "<td><button>Eliminar</button> <button>Modificar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
