<?php 


function inicia_sesion(){
session_start();
};


 function guarda_session($contrasena, $nombre){
$_SESSION[$contrasena]=$nombre;
 };

 function cierra_sesion(){
    session_destroy();
};

function estaLogin(){
    return isset($_SESSION['user']);
};

function comprobar($contrasena){
    if(empty ($contrasena) ){
        return"";
    }else {
        return $_SESSION['user'];
    }
};



function login($nombre) {
    inicia_sesion();
    guarda_session('user',$nombre);
    
        
    }; 
    
    ?>