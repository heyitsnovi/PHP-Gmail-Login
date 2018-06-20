<!DOCTYPE html>
<html>
<head>
	<title> Gmail Login Sample :)</title>
</head>
<body>

	<?php

			require_once 'config.php'

	?>


<a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with Google</a>

</body>
</html>