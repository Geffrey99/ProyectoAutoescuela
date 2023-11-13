<?php

include_once '../helper/autocargar.php';


class ApiUsuarios {

    function getAll(){
        $usuario = new Usuarioo();
        $usuarios = array();
        $usuarios["items"] = array();

        $res = $usuario->ObtenerUsuarios();

        if ($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
        $item = array (
            'id' => $row['id_usuario'],
            'nombre'=> $row ['nombre'],
            'rol'=>$row ['rol']
        );
        array_push($usuarios['items'],$item);
    }
    // echo json_encode($usuarios);
   $this-> printJson($usuarios);
}else{
            // echo json_encode(array('mensaje'=> 'no hay elemeeentos registradoos'));
       $this-> error('NOO HAY REGISTROS');
        }
    }

    function getId($id_usuario){
        $usuario = new Usuarioo();
        $usuarios = array();
        $usuarios["items"] = array();

        $res = $usuario->ObtenerUsuario($id_usuario);

        if ($res->rowCount()==1){
           // while($row = $res->fetch(PDO::FETCH_ASSOC)){
        $row = $res->fetch();
            $item = array (
            'id' => $row['id_usuario'],
            'nombre'=> $row ['nombre'],
            'rol'=>$row ['rol']
        );
        array_push($usuarios['items'],$item);
    
    // echo json_encode($usuarios);
   $this-> printJson($usuarios);
}else{
            // echo json_encode(array('mensaje'=> 'no hay elemeeentos registradoos'));
       $this-> error('NOO HAY REGISTROS');
        }
    }






//....manejo respuestas y errores

function printJson($array) {
        echo '<code>' . json_encode($array) . '</code>';
    }

function error($mensaje){
    echo '<code>' . json_encode(array('mensaje'=>$mensaje)) .'</code>';
}


}

?>