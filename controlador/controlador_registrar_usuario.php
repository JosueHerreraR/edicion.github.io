<?php
    if(!empty($_POST["registro"])){
        if(empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["correo_electronico"])or empty($_POST["usuario"])  or empty($_POST["contraseña"])){
            echo '<div class="alerta">Uno de los campos esta vacio</div>';
        }else{
            $nombre = $_POST["nombres"];
            $apellido = $_POST["apellidos"];
            $correo = $_POST["correo_electronico"];
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            $sql = $conexion -> query("INSERT INTO usuarios (nombres , apellidos, correo_electronico, usuario, contraseña) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contraseña')");
            if($sql == 1){
                echo '<div class="success">Usuario registrado correctamente</div>';
            }else{
                echo '<div class="alerta">Error al registrar los datos</div>'; 
            }
        }
    }
?>