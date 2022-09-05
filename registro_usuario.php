<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/registro.css">
        <title>Registrar Usuario</title>
    </head>
    <body>
        <section class="form-register">
            <form method="post">
                <h4>Formulario Registro</h4>
                <?php
                    include "modelo/conexion.php";
                    include "controlador/controlador_registrar_usuario.php";
                ?>
                <input class="controls" type="text" name="nombres" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" placeholder="Ingrese su Apellido">
                <input class="controls" type="email" name="correo_electronico" placeholder="Ingrese un Correo electronico">
                <input class="controls" type="text" name="usuario" placeholder="Ingrese un nombre de Usuario">
                <input class="controls" type="password" name="contraseña" placeholder="Ingrese una Contraseña">
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                <input class="botons" type="submit" value="Registrar" name="registro">
                <p><a href="login.php">¿Ya tengo Cuenta?</a></p>
            </form>
            
        </section>
    </body>
</html>
