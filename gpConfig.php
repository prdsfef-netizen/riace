<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '689339153467-h1r8a2af40jko7nodml8dotnja5pun12.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'QC-fk24dVkV6E6oeL8skCCN9'; //Google client secret
$redirectURL = 'http://localhost/riace/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('RIACE');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>