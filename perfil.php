<?php
session_start();


ini_set('error_reporting',0);

if(!isset($_SESSION['token']))
{
  header("Location: index.php");
}
?>

<?php
  if(isset($_GET['id']))
  {
  $id = mysql_real_escape_string($_GET['id']);
  $pag = $_GET['perfil'];

  $infouser = mysql_query("SELECT * FROM users WHERE id = '$id'");
  $use = mysql_fetch_array($infouser);


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
        <div data-role="header" data-theme="a">
             <p align="center">Perfil</p>

        </div>

        <div data-role="content" data-theme="a">
      <p><!-- Parte central -->
<div class="container">
 <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="avatars/<?php echo $use['picture'];?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $use['first_name'].' '.$use['last_name'];;?></h3> 
              <?php if($use['verificado'] != 0) {?>
              <center><span class="glyphicon glyphicon-ok"></span></center>
              <?php } ?>
            </div>
</div> </p>
  </div>

  <div data-role="footer">
    <p>Todos los derechos reservados</p>
  </div>
</body>
</html>