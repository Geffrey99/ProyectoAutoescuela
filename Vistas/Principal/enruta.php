<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "login") {
        header ('Location: ./Vistas/login/inicio.php');
        //require_once './Vistas/Login/inicio.php';
    }
    if ($_GET['menu'] == "registro") {
       header ('Location: ./Vistas/login/registro.php');
        // require_once './Vistas/login/registro.php';
     
    }
    if ($_GET['menu'] == "contacto") {
        require_once './Vistas/informacion/contacto.php';
     
    }
    if ($_GET['menu'] == "somos") {
        require_once './Vistas/informacion/somos.php';
     
    }


    

    
}
