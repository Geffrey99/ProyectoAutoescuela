<?php 

class Sesion {
    public function inicia_sesion() {
        session_start();
    }

    public function guarda_session($contrasena, $nombre) {
        $_SESSION[$contrasena] = $nombre;
    }

    public function cierra_sesion() {
        session_destroy();
    }

    public function estaLogin() {
        return isset($_SESSION['user']);
    }

    public function comprobar($contrasena) {
        if(empty($contrasena)) {
            return "";
        } else {
            return $_SESSION['user'];
        }
    }

    public function login($nombre, $contrasena) {
        $this->inicia_sesion();
        $this->guarda_session('nombre', $nombre);
    }
}

?>
