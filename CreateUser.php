<!DOCTYPE html>
<html>
<?php
# Specify the url of the web service and initialize
$url = 'https://402q6w62cj.execute-api.us-east-1.amazonaws.com/prod/CreateUser';
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

# Get the response from the web service
$response = curl_exec($handle);

# Check the HTTP response code
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if($httpCode == 200) {
        # A good response code means we can parse the JSON
        $items = json_decode($response, true);
} else {
        # A bad response code means we should display an error message
        $wsError = true;
}

?>

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
<h2>Get Started</h2>

<form method="post" action="index.php">

<input class="field" type="text" name="username" value="Username"> <?php echo $error;?></br></br>
<input class="field" type="text" name="password" value="Password"> <?php echo $error;?></br></br>
<input class="field" type="text" name="email" value="Email Address"> <?php echo $error;?></br></br>
<input class="field" type="text" name="phone" value="Phone Number"> <?php echo $error;?></br></br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"input type="submit" name="CreateProfile">
  Create Profile
</button>
</form>
<br><br>

</div>
</div>

</body>
</html>