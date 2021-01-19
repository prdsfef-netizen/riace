<?php
session_start();
include 'lib/config.php';

ini_set('error_reporting',0);

if(isset($_SESSION['nombre']))
{
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RIACE</title>
  <link rel="stylesheet" href="theme/themes/theme.min.css" />
  <link rel="stylesheet" href="theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div>
    <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-home-icon"></a>
   </div>
   <form action="alta_usuario.php" method="post" name="form_cliente">
   <div class="form-group has-feedback">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre " required>
      <span class="glyphicon glyphicon-star form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
       <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
       <span class="glyphicon glyphicon-star form-control-feedback"></span>
     </div>
    <div class="form-group has-feedback">
      <input type="email" name="email" class="form-control" placeholder="Email"  required>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
  <div class="form-group has-feedback">
      <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="col-xs-12">
      <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">Registrarme</button>
    </div>
  </form>
</body>
</html>
