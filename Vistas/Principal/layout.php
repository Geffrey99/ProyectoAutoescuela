<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/estiloinicio.css">
    <title>Autoescuela Geffrey</title>
</head>
<body>
   
<?php
    if (isset($_SESSION['nombre'])) {
        // Si el usuario ha iniciado sesión, incluye el encabezado del usuario
        require_once 'headerusuario.php';
    } else {
        // Si el usuario no ha iniciado sesión, incluye el encabezado principal
        require_once 'header.php';
    }
?>
    <section>
        <div id="cuerpo">
        <?php
     
          require_once 'enruta.php';
        
        ?>
        </div>
    </section>

    <?php
      
        // require_once 'main.php';
        
        require_once 'footer.php';
    ?>

</body>

</html>