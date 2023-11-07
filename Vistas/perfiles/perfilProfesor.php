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
               
            } else {
                echo "<h2> Bienvenido , " . $_SESSION['nombre'];
            }
            ?>
        </div>
        <div id="titulo">
         <h1>Autoescuela Geffrey</h1> 
        </div>
        <div id="logout">
        <button type="submit" id="logout" name="logout">Logout</button>
        </div>
    </header>
    <main>
        <aside>
            <div id="examen">
                <button >Hacer examen</button>
            </div>
            <div id="correccion">
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
