<?php
    session_start();
    if(empty($_SESSION["id"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <nav class="menu__container">
                <div class="usuario-logeado">
                    <?php
                        echo $_SESSION["nombres"]." ".$_SESSION["apellidos"];
                    ?>
                </div>
                <a href="#">Inicio</a>
                <a href="#">Sobre mí</a>
                <a href="#">Destinos</a>
                <a href="#">Gastronomía</a>
                <a href="controlador/controlador_cerrar_session.php">Cerrar Sección</a>
            </nav>
            
        </header>
    </body>
</html>