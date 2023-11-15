<?php
class Principal
{
    public static function main()
    {
        include_once './helper/autocargar.php';
         //require_once './session/loginSesion.php';

        require_once './Vistas/Principal/layout.php';
    }
}
Principal::main();
?>
