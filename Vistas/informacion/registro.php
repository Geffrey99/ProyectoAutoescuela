<?php
session_start();
?>

<div class="login-div">
        <form action="./repository/registrosRepositorio.php" method="post">
            <h4> Autoescuela Geffrey </h4>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password" name="repeat_password" placeholder="Repetir contraseña" required>
            <button type="submit">Registrarse</button> 
            <?php 
            
            if(isset($_SESSION['error'])) {
                echo "<p>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']); // se elimina el error de la matrizz session 
            }
            ?>
        </form>
        <div class="a">
        <a href="?menu=login">Iniciar sesión </a>
        </div>
    </div>
</form>
</body>
</html>