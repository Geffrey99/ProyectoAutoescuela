<?php
class Respuesta {
 
    private $opcion;
    private $enunciado;

 
    public function __construct($opcion, $enunciado) {
        $this->opcion = $opcion;
        $this->enunciado = $enunciado;
    }

  
    public function getOpcion() {
        return $this->opcion;
    }

    public function getEnunciado() {
        return $this->enunciado;
    }

    public function setOpcion($opcion) {
        $this->opcion = $opcion;
    }

    public function setEnunciado($enunciado) {
        $this->enunciado = $enunciado;
    }

   
    public function toJSON() {
        return json_encode(array('opcion' => $this->opcion, 'enunciado' => $this->enunciado));
    }
}

?>