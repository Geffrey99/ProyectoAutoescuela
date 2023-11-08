<?php

class Database {
    private $host = 'localhost';
    private $db   = 'proyect1';
    private $user = 'root'; 
    private $pass = ''; 
    private $charset = 'utf8mb4'; 

    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $opt);
        } catch (PDOException $e) {
            throw new Exception('Conexion fallida: ' . $e->getMessage());
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}




// $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
// try {
//     $dwes = new PDO('mysql:host=localhost;dbname=test', 'geffrey', '2070', $opciones);
//     echo 'Connectiom ready';
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }

?>
