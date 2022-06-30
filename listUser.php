<?php 
    require 'conection.php';
    require 'partials/registro.php';
    require 'partials/login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto Login</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="estaticos/css/listUser.css" />
</head>

<body>
    <header>
        <div class="topnav">
        <a href="welcome.php">Inicio</a>
            <a href="new.php">Registrarse</a>
            <a href="login.php">Login</a>
            <a href="forgotpass.php">ForgotPassword</a>
            <a href="index.php" class="split">Api</a>
        </div>
    </header>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="estaticos/img/user.png" />
                </div>

                <br>
         <h2 class="listUsuarios">LISTA DE USUARIOS</h2>
        <table>    
            <thead>
        <tr>
          <th class="usuario">Usuario</th>
          <th class="correo">Correo Electronico </th>
          <th class="contra">Contraseña</th>
         
        </tr>
            </thead>
            <tbody>
            <?php 
            $lista = $link->prepare("SELECT * FROM users");
            $lista->execute();
            $usuarios = $lista->fetchAll(PDO::FETCH_ASSOC);
            foreach($usuarios as $usuario){?>
              <tr>
                <td>
                <?php echo $usuario['nombre'] ;?>
                </td>
                <td>
                <?php echo $usuario['email'] ;?>
                </td>
                <td>
                <?php echo substr($usuario['password'],-6);?>
                </td>
                </tr> 
                  
            <?php } ?>
        </table>  



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