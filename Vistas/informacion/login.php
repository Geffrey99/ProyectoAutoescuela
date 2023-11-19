<?php
require_once './vistas/login/intro.php';      

session_start();

?>
        <div class="login-div">
<form action="" method="post">
<h4>Autoescuela Geffrey</h4>
    <label for="nombre">Usuario</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario" required>
    <label for="password">Contraseña</label>
    <input type="contrasena" id="contrasena" name="contrasena" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
    <?php 
            
            if(isset($_SESSION['error'])) {
                echo "<p>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']); 
            }
            ?>
    <div class="a">
        <a href="?menu=registro">Registrarse</a>
        </div>
    </div>
</form>
</body>
</html>
