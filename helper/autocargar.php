<?php
    spl_autoload_register('autocargar');

    function autocargar($clase){
        $entities=$_SERVER['DOCUMENT_ROOT']."../entities/".$clase.'.php';
        $repository=$_SERVER['DOCUMENT_ROOT']."../repositorio/".$clase.'.php';
        $database=$_SERVER['DOCUMENT_ROOT']."../DB/".$clase.'.php';

        if(file_exists($entities)){
            require_once $entities;
        }else if(file_exists($repository)){
            require_once $repository;
            
        }else if(file_exists($database)){ 
            require_once $database;
        }else{
            var_dump($repository);
        }
    };
?>