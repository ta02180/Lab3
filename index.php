<html>
<head>
	<title>???</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="login.css">
</head>
<body>
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>


<?php

 echo file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=statesboro&APPID=34f120b92ec03ca0f9e04eee1ba015d4");
?>
</body>
</html>