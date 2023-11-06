<?php
class Principal
{
    public static function main()
    {
        require_once './session/loginSesion.php';

        require_once './Vistas/Principal/layout.php';
    }
}
Principal::main();
?>
