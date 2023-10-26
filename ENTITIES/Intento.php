<?php
class Intento {
    private $id_intento;
    private $id_examen;
    private $id_usuario;
    private $respuestas;
    private $fechaintento;

    public function __construct($id_intento, $id_examen, $id_usuario, $respuestas, $fechaintento) {
        $this->id_intento = $id_intento;
        $this->id_examen = $id_examen;
        $this->id_usuario = $id_usuario;
        $this->respuestas = $respuestas;
        $this->fechaintento = $fechaintento;
    }


    public function getIdIntento() {
        return $this->id_intento;
    }

    public function getIdExamen() {
        return $this->id_examen;
    }

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getRespuestas() {
        return $this->respuestas;
    }

    public function getFechaIntento() {
        return $this->fechaintento;
    }

    public function setIdIntento($id_intento) {
        $this->id_intento = $id_intento;
    }

    public function setIdExamen($id_examen) {
        $this->id_examen = $id_examen;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setRespuestas($respuestas) {
        $this->respuestas = $respuestas;
    }

    public function setFechaIntento($fechaintento) {
        $this->fechaintento = $fechaintento;
    }
}


?>