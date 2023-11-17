<?php
class Database {
    private $conexion;

    public function abreConexion(){
        if($this->conexion==null){
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $this->conexion = new PDO('mysql:host=localhost;dbname=proyect1', 'root', '', $opciones);
        }

    }

    public function getConexion() {
        return $this->conexion;
    }

    public function desconexion(){
        return $this->conexion=null;
    }
}

?>