<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../../css/perfilAlumno.css">
        <script src="./js/perfilAlumno.js"></script>

</head>
<body>
    <header>
        <div id="nombre">
            <?php
            include '../../session/loginSesion.php';

            inicia_sesion();
            if (isset($_POST['logout'])){
                cierra_sesion();
                header('Location: ../Vistas/home.php');
            } else {
                echo "Bienvenido , " . $_SESSION['nombre'];
            }
            ?>
        </div>
        <button id="logout">Logout</button>
    </header>
    <main>
        <aside>Contenido del aside</aside>
        <section>Contenido de la sección</section>
    </main>
    <footer>
        <p>Email: AutoescuelaGeffrey@correo.com</p>
        <p>Teléfono: +34 666 666 666</p>
        <p>Jaén, España C/Federico Garcia </p>
    </footer>
</body>
</html>
