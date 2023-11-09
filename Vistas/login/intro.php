<?php
if (isset($_SESSION['rol'])){
    switch ($_SESSION['rol']) {
        case 'alumno':
            require_once './Vistas/perfiles/perfilAlumno.php';
            break;
        case 'profesor':
            require_once './Vistas/perfiles/perfilProfesor.php';
            break;
        case ' admi':
            require_once './Vistas/perfiles/perfilAdministrador.php';
           // header();
        default:
            # code...
            break;
    }
}

