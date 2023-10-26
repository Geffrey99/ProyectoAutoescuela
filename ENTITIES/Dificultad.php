<?php
class Dificultad {

    private $id_dificultad;
    private $nombre;

 
    public function __construct($id_dificultad, $nombre) {
        $this->id_dificultad = $id_dificultad;
        $this->nombre = $nombre;
    }

    public function getIdDificultad() {
        return $this->id_dificultad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setIdDificultad($id_dificultad) {
        $this->id_dificultad = $id_dificultad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}


?>