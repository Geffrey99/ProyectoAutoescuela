<?php
    spl_autoload_register('autocargar');

    function autocargar($clase){
        $entities=$_SERVER['DOCUMENT_ROOT']."/ProyectoAutoescuela/entities/".$clase.'.php';
        $repository=$_SERVER['DOCUMENT_ROOT']."/ProyectoAutoescuela/repositorio/".$clase.'.php';
        $session=$_SERVER['DOCUMENT_ROOT']."/ProyectoAutoescuela/session/".$clase.'.php';

        if(file_exists($entities)){
            require_once $entities;
        }else if(file_exists($repository)){
            require_once $repository;
            
        }else if(file_exists($session)){ 
            require_once $session;
        }else{
            var_dump($repository);
        }
    };
?>