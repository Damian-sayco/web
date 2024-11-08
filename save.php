<?php

include('db.php');

if (isset($_POST['save'])) {
  $name = trim($_POST['name']);
  $stock = trim($_POST['stock']);
  
  if (empty($name) || empty($stock)) {
    $_SESSION['message'] = 'Por favor, completa todos los campos';
    $_SESSION['message_type'] = 'warning';
    header('Location: inicio.php');
    exit();
  }


  $query = "INSERT INTO productos (name, stock) VALUES ('$name', '$stock')";
  $result = mysqli_query($conexion, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Producto Guardado';
  $_SESSION['message_type'] = 'success';
  header('Location: inicio.php');
}
?>