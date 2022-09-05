<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inició de sección</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/aviso_login.css">
    </head>
    <body>
        <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario">   
            </div>
            <form class="formulario" method="post">
                <div class="texto-formulario">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Inicia sesión con tu cuenta</p>
                </div>
                <?php
                    include "modelo/conexion.php";
                    include "controlador/controlador_login.php";
                ?>
                <div class="input">
                    <label for="usuario">Usuario</label>
                    <input placeholder="Ingresa tu nombre" type="text" id="usuario" name="usuario">
                </div>
                <div class="input">
                    <label for="contraseña">Contraseña</label>
                    <input placeholder="Ingresa tu contraseña" type="password" id="input" name="password">
                </div>
                <div class="password-olvidada">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="password-olvidada">
                    <a href="registro_usuario.php">Registrate</a>
                </div>
                <div class="input">
                    <input name="btningresar" type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </div>
    </body>
</html>