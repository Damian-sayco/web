<?php
    if (!empty($_POST["btningresar"])) {
        if (empty($_POST["usuario"]) and empty($_POST["password"])) {
            echo '<div class="alert alert-danger">LOS DATOS NO PUEDEN ESTAR VACIOS</div>';
        } else {
            $usuario=$_POST["usuario"];
            $password=$_POST["password"];
            $sql=$conexion->query(" SELECT * FROM usuarios WHERE username='$usuario' and password='$password' ");
            if ($datos=$sql->fetch_object()) {
                header("location:inicio.php");
            } else {
                echo '<div class="alert alert-danger">USUARIO O CONTRASEÑA INCORRECTOS</div>';
            }
            
        }
        
    }
?>