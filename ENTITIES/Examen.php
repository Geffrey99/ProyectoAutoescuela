<?php
class Examen {
    private $id_examen;
    private $fechainicio;


    public function __construct($id_examen, $fechainicio) {
        $this->id_examen = $id_examen;
        $this->fechainicio = $fechainicio;
    }


    public function getIdExamen() {
        return $this->id_examen;
    }

    public function getFechaInicio() {
        return $this->fechainicio;
    }


    public function setIdExamen($id_examen) {
        $this->id_examen = $id_examen;
    }

    public function setFechaInicio($fechainicio) {
        $this->fechainicio = $fechainicio;
    }
}

?>