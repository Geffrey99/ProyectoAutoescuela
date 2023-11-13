<?php
include_once 'apiusuarios.php';

$api = new ApiUsuarios();

if(isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
  

    if (is_numeric($id)){
        $api->getId($id); 
    }else {
        $api->error('no es correcto lo introducido');
    }

}else {
    $api->getAll();
}



// $api->getAll();


?>