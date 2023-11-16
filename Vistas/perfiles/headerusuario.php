<?php
// Inicia la sesión al principio del script
session_start();
?>
<header>
    <div id="nombre">
        <?php
        // Compruebo si la session esta iniciada y muestro el nombre del usuario
        if (isset($_SESSION['nombre'])) {
            echo "<h2> Bienvenido , " . $_SESSION['nombre'] . "</h2>";
        }
        ?>
    </div>
    <div id="titulo">
        <h1>AUTOESCUELA.GEFFREY</h1> 
    </div>
    <?php
    // al darle logout destruyo la session y salgo de al index
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: ./index.php"); 
    }
    // Si la sesión está iniciada, muestro el botón de cierre de sesión
    if (isset($_SESSION['nombre'])) {
        echo '<div id="logout">
            <form method="post">
                <button type="submit" id="logout" name="logout">Logout</button>
            </form>
        </div>';
    }
    ?>
</header>