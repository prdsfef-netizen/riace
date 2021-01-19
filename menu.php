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
  <title>RIACE</title>
  <link rel="stylesheet" href="theme/themes/theme.min.css" />
  <link rel="stylesheet" href="theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="header">
<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="RIACE" data-url="panel-responsive-page1">
    <div data-role="header">
        <h1>RIACE</h1>
        <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <a href="#add-form" data-icon="search" data-iconpos="notext">Add</a>
    </div><!-- /header -->
    <div role="main" class="ui-content jqm-content jqm-fullwidth">
        <center>


        <h1>Ubicacion</h1>
        <p>
          <img src="imagenes/orientation.png" width="100" height="100">

      
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBXSJRp--UdFCoa1aTZCqn9hHxORqxRngY' type="text/javascript"></script>

<script>
function success(position) {
 var status = document.querySelector('#status');
 status.innerHTML = "Le encontramos!";

 var mapcanvas = document.createElement('div');
 mapcanvas.id = 'mapcanvas';
 mapcanvas.style.height = '500px';
 mapcanvas.style.width = '580px';

 document.querySelector('#map').appendChild(mapcanvas);

 var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
 var myOptions = {
 zoom: 15,
 center: latlng,
 mapTypeControl: false,
 navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
 mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

 var marker = new google.maps.Marker({
 position: latlng,
 map: map,
 title:"Usted est&#65533; aqu&#65533;."
 });
}

function error(msg) {
 var status = document.getElementById('status');
 status.innerHTML= "Error [" + error.code + "]: " + error.message; 
}

if (navigator.geolocation) {
 navigator.geolocation.getCurrentPosition(success, error,{maximumAge:60000, timeout: 4000});
} else {
 error('Su navegador no tiene soporte para su geolocalizaci&#65533;n');
}

</script>

<p id="status">Buscando su localizaci&#65533;n...</p>
<div id="map"></div>
<a href="logout.php" class="text-center">Cerrar sesion</a>
</center>

        .</p>
        <div data-demo-html="#panel-responsive-page1"></div><!--/demo-html -->
        <br>
        <br>
        <br>
        <br>
        <br>
        
    </div><!-- /content -->
    <div data-role="panel" data-display="push" data-theme="b" id="nav-panel">
        <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close menu</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="mensaje.html">Mensaje</a></li>
                <li><a href="amigos.html">Amigos</a></li>
                <li><a href="config.html">Configuraci&#65533;n</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
    </div><!-- /panel -->

    <div data-role="footer">
        <p>Todos los derechos reservados</p>
</div>
<div data-role="panel" data-position="right" data-display="reveal" data-theme="a" id="add-form">
<form>
  <h2>Buscar</h2>
<input data-type="search" id="divOfPs-input" placeholder="Busca personas">
<button class="ui-btn ui-corner-all">Button</button>
</form>
 
    </div><!-- /panel -->
</div>
</div>
    
    
    
</body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">
<script language="javascript" type="text/javascript">
 lz="http://ocio.leadzu.com/banner_request.php?m=1GGYSITE66217X12&a=&idtm=728x90&lgid="+new Date().getTime();
 document.write("<scr"+"ipt language='javascript' type='text/javascript' src='"+lz+"'></scr"+"ipt>");
 </script>
 
</div></div>
</html>