
<?php
require_once './session/loginSesion.php';

function verificarUsuario($nombre, $contrasena) {
    $db = new Database();
    $pdo = $db->getPdo();

    if (!empty($nombre) && !empty($contrasena)) {
        $sql = "SELECT * FROM Usuario WHERE nombre = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre]);
        $user = $stmt->fetch();

        if ($user && $contrasena == $user['contrasena']) {
            $sesion = new Sesion();
            $sesion->login($nombre, $contrasena);
            redirigirSegunRol($user['rol']);
        } else {
            echo "Inicio de sesión incorrecto";
        }
    }
}
    


function redirigirSegunRol($rol) {
    switch ($rol) {
        case 'alumno':
            require_once './Vistas/perfiles/perfilAlumno.php';
            break;
        case 'profesor':
            require_once './Vistas/perfiles/perfilProfesor.php';
            break;
        case 'admi':
            require_once './Vistas/perfiles/perfilAdministrador.php';
            break;
        default:
            echo "Inicio de sesión incorrecto";
    }
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