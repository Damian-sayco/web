<?php
    session_start();

    $conexion = new mysqli("localhost", "root", "", "login_system");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $conexion->set_charset("utf8");
?>
