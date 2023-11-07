<?php
if (isset($_SESSION['rol'])){
    switch ($_SESSION['rol']) {
        case 'alumno':
            header();
            break;
        case 'alumno':
            header();
            break;
        case ' admi';
            header();
        default:
            # code...
            break;
    }
}

