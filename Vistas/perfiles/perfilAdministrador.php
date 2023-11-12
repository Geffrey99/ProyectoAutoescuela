<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/perfilAlumno.css">
        <script src="../../js/perfilAlumno.js"></script> 

</head>
<body>
    <?php
        require_once './headerusuario.php';
        require_once 'navAdministrador.php';
       
    ?>
    <section>
        <div id="cuerpo">
        <?php
        
           require_once './enrutaperfil.php';
        
        ?>
        </div>
    </section>

    <?php
        // require_once 'main.php';
        require_once '../principal/footer.php';
    ?>

</body>

</html>