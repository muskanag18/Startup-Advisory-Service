<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
// require_once 'google_auth-connector.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('458673656098-9th18jr5nnfvji4jrgehmoss9uspar7c.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('8eoyyfQD7D1p1FAH3Ha1akvF');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/SAS/googleapi/google_auth-connector.php');
// $google_client->setRedirectUri('http://localhost/SAS/signup-form-20/signup-form-20/signup.php');


// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 