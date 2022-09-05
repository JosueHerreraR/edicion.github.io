<?php
    session_start();
    if(!empty($_POST["btningresar"])){
        if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
            $usuario = $_POST["usuario"];
            $password = $_POST["password"];
            $sql = $conexion -> query("SELECT * FROM usuarios Where usuario='$usuario' and contraseña='$password' ");
            if($datos = $sql -> fetch_object()){
                $_SESSION["id"] = $datos->id;
                $_SESSION["nombres"] = $datos->nombres;
                $_SESSION["apellidos"] = $datos->apellidos;
                header("location: inicio.php");
            }else{
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
        }else{
            echo "No se ha ingresado los datos";
        }
    }
?>