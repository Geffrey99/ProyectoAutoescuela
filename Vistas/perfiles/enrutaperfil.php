<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "participantes") {
        require_once '../../Vistas/informacion/participantes.php';
    }
    if ($_GET['menu'] == "examen") {
       require_once '../../Vistas/informacion/examen.php';
     
    }
    if ($_GET['menu'] == "correcciones") {
        require_once '../../Vistas/informacion/correcciones.php';
     
    }
    if ($_GET['menu']=='AsignarPreguntas'){
        require_once '../../vistas/informacion/verPreguntasDb.php';
    }
    if ($_GET['menu']=='preguntas'){
        require_once '../../Vistas/informacion/crearPreguntas.php';
       
    }
    if ($_GET['menu']=='registros'){
        require_once '../../Vistas/informacion/usuariosPendientes.php';
       
    }

    
}
