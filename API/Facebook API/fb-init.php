<?php

 
 // Include the autoloader provided in the SDK
// require_once(__DIR__.'/Facebook/autoload.php');
require_once(__DIR__.'/vendor/autoload.php');

define('APP_ID', '2734686806775854');
define('APP_SECRET', 'be7c01dfb166f6ca4ecdac4fc8e77c9c');
define('API_VERSION', 'v2.10');
define('FB_BASE_URL', 'http://localhost/SAS/index.php');

define('BASE_URL', 'http://localhost/SAS/index.php');

if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(FacebookResponseException $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>