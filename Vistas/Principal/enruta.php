<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "login") {
        // header ('Location: ./Vistas/login/inicio.php');
       // ob_clean(); //ME LIMPIA EL DISEÑO ANTERIOR Y ME MUESTRA EL DISEÑO QUE LE HE PUESTO A REGISTRO
    //   require_once './vistas/login/intro.php';
       require_once './Vistas/informacion/login.php';
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
            verificarUsuario($_POST['nombre'], $_POST['contrasena']);
        }   
    }
    }
    if ($_GET['menu'] == "registro") {
      // header ('Location: ./Vistas/login/registro.php');
     // ob_clean(); 
      require_once './Vistas/informacion/registro.php';
      
   
    }
    if ($_GET['menu'] == "contacto") {
        require_once './Vistas/informacion/contacto.php';
     
    }
    if ($_GET['menu'] == "somos") {
        require_once './Vistas/informacion/somos.php';
     
    }

    

    
}
