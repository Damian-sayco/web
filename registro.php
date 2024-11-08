<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
    <title>Registro</title>
</head>
<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
      <div class="img">
         <img src="img/5624595.webp">
      </div>
    <div class="container">
        <div class="login-content">
            <form action="" method="POST">
                <img src="img/1293860.png">
                <h2 class="title">REGISTRAR</h2>
                <?php
                include('db.php');
                include('controlador_registro.php');
                ?>
                <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input id="email" type="email" class="input" name="email">
                </div>
                </div>
                <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>
                    <input id="usuario" type="text" class="input" name="username">
                </div>
                </div>
                <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="input" class="input" name="password">
                </div>
                </div>
                <div class="view">
                <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
                </div>
                <input name="register" class="btn" type="submit" value="REGISTRAR">
                <a href="index.php" class="btn btn-primary">INICIO</a>
            </form>
        </div>
    </div>
    <script src="js/fontawesome.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>