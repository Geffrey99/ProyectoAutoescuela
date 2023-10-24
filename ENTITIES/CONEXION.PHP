<?php 
//phpinfo();
$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dwes = new PDO('mysql:host=localhost;dbname=test', 'geffrey', '2070', $opciones);

// $version = $dwes->getAttribute(PDO::ATTR_SERVER_VERSION);
// print "Versión: $version";

//$registros = $dwes->exec('INSERT FROM prueba WHERE unidades=0');
$resultado = $dwes->query("SELECT * FROM prueba");
while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
    echo "ID ".$registro->id.'<br/>';
}







?>