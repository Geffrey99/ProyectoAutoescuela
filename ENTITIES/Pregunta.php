<?php
class Pregunta {
    private $id_pregunta;
    private $enunciado;
    private $respuestas;
    private $categoria;
    private $dificultad;
    private $url;
    private $tipoUrl;

  
    public function __construct($id_pregunta, $enunciado, $respuestas, $categoria, $dificultad, $url, $tipoUrl) {
        $this->id_pregunta = $id_pregunta;
        $this->enunciado = $enunciado;
        $this->respuestas = $respuestas;
        $this->categoria = $categoria;
        $this->dificultad = $dificultad;
        $this->url = $url;
        $this->tipoUrl = $tipoUrl;
    }

  
    public function getIdPregunta() {
        return $this->id_pregunta;
    }

    public function getEnunciado() {
        return $this->enunciado;
    }

    public function getRespuestas() {
        return $this->respuestas;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getDificultad() {
        return $this->dificultad;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getTipoUrl() {
        return $this->tipoUrl;
    }

  
    public function setIdPregunta($id_pregunta) {
        $this->id_pregunta = $id_pregunta;
    }

    public function setEnunciado($enunciado) {
        $this->enunciado = $enunciado;
    }

    public function setRespuestas($respuestas) {
        $this->respuestas = $respuestas;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setDificultad($dificultad) {
        $this->dificultad = $dificultad;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setTipoUrl($tipoUrl) {
        $this->tipoUrl = $tipoUrl;
    }
    public function toArray() {
        return [
            'id_pregunta' => $this->id_pregunta,
            'enunciado' => $this->enunciado,
            'respuestas' => $this->respuestas,
            'categoria' => $this->categoria,
            'dificultad' => $this->dificultad,
            'url' => $this->url,
            'tipoUrl' => $this->tipoUrl
        ];
    }
}

?>