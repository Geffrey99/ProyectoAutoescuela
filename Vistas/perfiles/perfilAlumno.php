<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../../css/perfilAlumno.css">
        <script src="../../js/perfilAlumno.js"></script>

</head>
<body>
    <header>
        <div id="nombre">
            <?php
            include '../../session/loginSesion.php';

            inicia_sesion();
            if (isset($_POST['logout'])){
                cierra_sesion();
                header('Location: ../../index.html');
            } else {
                echo "Bienvenido , " . $_SESSION['nombre'];
            }
            ?>
        </div>
        <button id="logout">Logout</button>
    </header>
    <main>
        <aside>
            <div>
                <button>Hacer examen</button>
            </div>
            <div>
                <button>
                    Visualizar correccion
                </button>
            </div>
        </aside>
        <section>
            <div>
                <button>Examen de entrenamiento</button>
            </div>
        </section>
    </main>
    <footer>
        <p>Email: AutoescuelaGeffrey@correo.com</p>
        <p>Teléfono: +34 666 666 666</p>
        <p>Jaén, España C/Federico Garcia </p>
    </footer>
</body>
</html>
