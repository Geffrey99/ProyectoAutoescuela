<?php
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch ($menu) {
    case 'inicio':
        require_once 'index.php';
        break;
    case 'login':
        require_once './vistas/informacion/login.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['nombre']) && isset($_POST['contrasena'])) {
                verificarUsuario($_POST['nombre'], $_POST['contrasena']);
            }   
        }
        break;
    case 'registro':
        require_once './Vistas/informacion/registro.php';
        break;
    case 'contacto':
        require_once './Vistas/informacion/contacto.php';
        break;
    case 'somos':
        require_once './Vistas/informacion/somos.php';
        break;
    // case 'participantes':
    //     require_once './repository/usuariosdb.php';
        break;    
    // Añade más casos según sea necesario
    default:
        require_once 'index.php';
}




// if (isset($_GET['menu'])) {
//     if ($_GET['menu'] == "inicio") {
//         require_once 'index.php';
//     }
//     if ($_GET['menu'] == "login") {
//        require_once './Vistas/informacion/login.php';
      
//     }
//     if ($_GET['menu'] == "registro") {

//       require_once './Vistas/informacion/registro.php';
      
   
//     }
//     if ($_GET['menu'] == "contacto") {
//         require_once './Vistas/informacion/contacto.php';
     
//     }
//     if ($_GET['menu'] == "somos") {
//         require_once './Vistas/informacion/somos.php';
     
//     }
    // if ($_GET['menu'] == "participantes") {
    //     require_once './repository/usuariosdb.php';
    //     // require_once '../../repository/usuariosdb.php';
     
    // }
    // if ($_GET['menu'] == "correcciones") {
    //     require_once './Vistas/informacion/somos.php';
     
    // }
    // if ($_GET['menu']=='prototipo'){
    //     require_once '';
    // }
    // if ($_GET['menu']=='preguntas'){
    //     require_once '../../plantillas/crearPreguntas.php';
       
    // }
    // if ($_GET['menu']=='registros'){
    //     require_once '../../plantillas/registros.php';
       
    // }
    // if ($_GET['menu'] == "logueado" && isset($_SESSION['rol'])) {
    //     switch ($_SESSION['rol']) {
    //         case 'alumno':
    //             require_once './Vistas/perfiles/perfilAlumno.php';
    //             break;
    //         case 'profesor':
    //             require_once './Vistas/perfiles/perfilProfesor.php';
    //             break;
    //         case 'admi':
    //             require_once './Vistas/perfiles/perfilAdministrador.php';
    //             break;
    //         default:
    //             echo "Inicio de sesión incorrecto";
    //     }
    // }
    

?>