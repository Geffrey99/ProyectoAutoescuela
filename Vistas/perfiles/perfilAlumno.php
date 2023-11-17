<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Alumno</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/perfilUsuario.css">
    <script src="../../Api/logout.js"></script> 

</head>
<body>
    <?php
        require_once 'headerusuario.php';
       require_once 'navAlumno.php';
    ?>
    <section>
        <div id="cuerpo">
        <?php
        
           require_once 'enrutaperfil.php';
        
        ?>
        </div>
    </section>

    <?php
        // require_once 'main.php';
        //require_once '../principal/footer.php';
    ?>

</body>

</html>