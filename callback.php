<?php

require_once 'config.php';
require_once 'google-login-api.php';

if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
	
		$data = $gapi->GetAccessToken(CLIENT_ID, REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
	
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);

		echo '<pre>';print_r($user_info); echo '</pre>';


	}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}