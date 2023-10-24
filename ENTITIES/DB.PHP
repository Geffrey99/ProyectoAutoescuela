<?php

$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try {
    $dwes = new PDO('mysql:host=localhost;dbname=test', 'geffrey', '2070', $opciones);
    echo 'Connectiom ready';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
