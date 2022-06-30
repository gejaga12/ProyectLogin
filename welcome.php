<?php

require_once 'partials/baseDeDatos.php';

session_start();


if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
}
require 'conection.php';
$message = '';
require 'partials/login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="estaticos/css/login.css" />
</head>

<body>
    <header>
        <div class="topnav">
            <a href="welcome.php">Inicio</a>
            <a href="new.php">Registrarse</a>
            <a href="login.php">Login</a>
            <a href="forgotpass.php">ForgotPassword</a>
            </div>
    </header>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="estaticos/img/user.png" />
                </div>
                <form class="col-12" action="listUser.php" method="post">
                    <div class="form-group">
                        <h3>BIENVENIDO</h3>
                        <h3>Que desea?</h3>
                    </div>
                 

                    <a href="new.php"><button type="button" id="registrarse" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Registrase
                    </button></a>

                    <a href="login.php"><button type="button" id="inicioSesion" class="btn btn-primary" href="listUser.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesion
                    </button></a>

                </form>
           
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <h7>Ⓒ 2022 - Proyecto Login. Desarrollo web by New Team Delevopers.</h7>
        </div>
    </footer>
</body>


</html>