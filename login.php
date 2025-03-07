<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Login with Google</title>
		<link href="CSS/login_style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
<!--Navigation Menu Bar-->
        <div class="navbar">
            <img src="goneup logo.png" class="logo"> <!--Goneup Logo-->
            <a href="login.php">Sign-in</a> <!--To Sign-in Page-->
        </div>

        <!--Log in-->
		<div class="content home">
			<h1>Login</h1>

            <p class="login-txt">Please login using the button below. You'll be redirected to Google.</p>

            <a href="http://localhost/Tomorrows_Web_Project/google-auth.php" class="google-login-btn">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                </span>
                Login with Google
            </a>

		</div>

	</body>
</html>