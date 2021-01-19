<?php
session_start();


ini_set('error_reporting',0);

if(!isset($_SESSION['token']))
{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="theme/themes/theme.min.css" />
  <link rel="stylesheet" href="theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<form action="lo.php" method="post" name="form_login">
  <p>Correo Electronico</p>
  <input type="email" name="email" placeholder="nombre@misitio.com" required><br>
    <p>Contraseña</p>
     <input type="password" required name="password"><br>
     <input type="submit" value="iniciar sesion">
    <input type="reset" value="Limpiar" >
</form>
<form action="registro.php">
 <div class="col-xs-12">
    <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Registrarme</button>
  </div>
</form>


    </body>

 
</div></div>
</html>