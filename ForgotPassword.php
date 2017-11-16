<!DOCTYPE html>
<html>
<head>
	<title>My Places Weather</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="login.css">
</head>
<body>

<div class="main">
<?php

?>
<div class="main1">
<h2>Forgot Password</h2>

<form method="post" action="index.php">

<input class="field" type="text" name="username" value="Username"> <?php echo $error;?></br></br>
<input class="field" type="text" name="email" value="Email Address"> <?php echo $error;?></br></br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"input type="submit" name="RetrievePassword">
  Retrieve Password
</button>
</form>
<br><br>

<a href="">Forgot Password</a>
<hr>
New User???<a href=""> Create Profile</a>
</div>
</div>

</body>
</html>