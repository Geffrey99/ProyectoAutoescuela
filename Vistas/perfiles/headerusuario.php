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