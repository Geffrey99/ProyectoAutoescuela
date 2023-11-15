<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "participantes") {
        require_once './repository/usuariosdb.php';
        // require_once '../../repository/usuariosdb.php';
     
    }
    if ($_GET['menu'] == "correcciones") {
        require_once './Vistas/informacion/somos.php';
     
    }
    if ($_GET['menu']=='prototipo'){
        require_once '';
    }
    if ($_GET['menu']=='preguntas'){
        require_once '../../plantillas/crearPreguntas.php';
       
    }
    if ($_GET['menu']=='registros'){
        require_once '../../plantillas/registros.php';
       
    }
    if ($_GET['menu']=='logueado'){
        require_once '../../plantillas/registros.php';
       
    }

    
}
