<?php

class Categoria {

    private $id_categoria;
    private $nombre;


    public function __construct($id_categoria, $nombre) {
        $this->id_categoria = $id_categoria;
        $this->nombre = $nombre;
    }


    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}



?>