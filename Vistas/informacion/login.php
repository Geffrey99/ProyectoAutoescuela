<?php
require_once './vistas/login/intro.php';
       
?>
        <div class="login-div">
<form action="" method="post">
<h4>Autoescuela Geffrey</h4>
    <label for="nombre">Nombre de usuario</label>
    <input type="text" id="nombre" name="nombre">
    <label for="password">Contraseña</label>
    <input type="contrasena" id="contrasena" name="contrasena">
    <button type="submit" href="/perfil/">Iniciar sesión</button>
    <div class="a">
        <a href="?menu=registro">Registrarse</a>
        </div>
    </div>
</form>
</body>
</html>
