<?php

include_once '../helper/autocargar.php';



Class Usuarioo extends Database {

    function ObtenerUsuarios(){
        $query =$this->getPdo()->query('SELECT * FROM Usuario');
    
        return $query;
    }

    function ObtenerUsuario($id_usuario){
        $query =$this->getPdo()->prepare('SELECT * from Usuario WHERE id_usuario = :id_usuario');
        $query->execute(['id_usuario'=> $id_usuario]);

       return $query;

    }

function nuevoUsuario($usuario) {
    $query =$this->getPdo()->prepare('INSERT INTO  Usuario (nombre, contrasena, rol) VALUES (:nombre, :contrasena, :rol');
        $query->execute(['nombre'=> $usuario['nombre'], 'contrasena' =>$usuario['contrasena'],'rol'=>$usuario['rol']]);

       return $query;
}


}



?>