
<?php
require_once './session/loginSesion.php';
require_once './helper/autocargar.php';   

function verificarUsuario($nombre, $contrasena) {
    $db = new Database();
    $db->abreConexion();
    $conexion = $db->getConexion();

    if (!empty($nombre) && !empty($contrasena)) {
        $sql = "SELECT * FROM Usuario WHERE nombre = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$nombre]);
        $user = $stmt->fetch();

        if ($user && $contrasena == $user['contrasena']) {
            $sesion = new Sesion();
            $sesion->login($nombre, $contrasena);
        //    $_SESSION['rol'] = $user['rol'];
             redirigirSegunRol($user['rol']);
        } else {
            $_SESSION['error'] = "Inicio de sesion incorrecto.";
            header('Location: ./index.php?menu=login');
        }
    }
}
    


function redirigirSegunRol($rol) {
    switch ($rol) {
        case 'alumno':
            header('Location: ./Vistas/perfiles/perfilAlumno.php');
            break;
        case 'profesor':
            header('Location: ./Vistas/perfiles/perfilProfesor.php');
            break;
        case 'admi':
            header('Location: ./Vistas/perfiles/perfilAdministrador.php');
            break;
        default:
        $_SESSION['error'] = "Las contraseñas no coinciden.";
        header('Location: ./index.php?menu=login');

    }
    exit;
}




// function redirigirSegunRol($rol){

// if (isset($rol)){
//     if ($rol='alumno'){
// require_once './Vistas/perfiles/perfilAlumno.php';
//     }
//     if ($rol='admi'){
//         require_once './Vistas/perfiles/perfilProfesor.php';
//     } 
//     if ($rol='profesor'){
//         require_once './Vistas/perfiles/perfilAdministrador.php';
//     }
//     }

// }

?>