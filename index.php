<?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
  $gClient->authenticate($_GET['code']);
  $_SESSION['token'] = $gClient->getAccessToken();
  header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
  //Get user profile data from google
  $gpUserProfile = $google_oauthV2->userinfo->get();
  
  //Initialize User class
  $user = new User();
  
  //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
  
  //Storing user data into session
  $_SESSION['userData'] = $userData;
  
  //Render facebook profile data
    if(!empty($userData)){
          header("Location: menu.php");
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
  $authUrl = $gClient->createAuthUrl();
  $output =  '<center> <a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="imagenes/google.png" alt=""/></a> </center>';
  
}
?>
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
<div data-role="header" data-theme="a">    
             <p align="center">Inicia sesion</p>
             
        </div>
  
        <div data-role="content" data-theme="a">
 <center><a href="registro.html"><img border="0" src="imagenes/registro.png" width="102" height="102"></a>
<h1>
         <center>O</center>
</h1>


<div><?php echo $output; ?></div>
  <div data-role="footer">
    <p>Todos los derechos reservados</p>
  </div>
</body>
</html>