<?php



class usuario {
     private $id_usuario;
     private $nombre;
     private $contrasena;
     private $rol;

     public function __construct($id_usuario, $nombre, $contrasena, $rol) {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->rol = $rol;
    }

    
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getRol() {
        return $this->rol;
    }



    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }



}






?>