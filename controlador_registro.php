<?php
    if (!empty($_POST["register"])) {
        if (empty($_POST["email"]) or empty($_POST["username"]) or empty($_POST["password"])){
            echo '<div class="alert alert-danger">No pueden haber campos vacios</div>';
        } else {
            $email=$_POST["email"];
            $usuario=$_POST["username"];
            $password=$_POST["password"];
            $sql=$conexion->query(" INSERT INTO usuarios (username, password, email) VALUES ('$usuario', '$password', '$email'); ");
            if ($sql==1) {
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger">Error de Registro</div>';
            }
            
            }
        }
?>