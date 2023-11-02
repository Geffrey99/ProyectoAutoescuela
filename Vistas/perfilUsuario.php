<?php
include '../session/loginSesion.php';  

inicia_sesion();
$user = comprobar('user');

if (isset($_SESSION['nombre'])) {
    echo "Hola, " . $_SESSION['nombre'];
} else {
    echo "No has iniciado sesión";
}
?>