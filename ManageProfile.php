<html>
<?php
# Start a session
session_start();

$sessionToken = $_SESSION['token'];
$cookieToken = $_COOKIE['token'];

if ($sessionToken != $cookieToken) {
    header('Location: login.php');
    exit;
}

# Define an error flag
$wsError = false;

# Specify the url of the web service and initialize
$url = '';
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
	<title>Manage Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<link rel="stylesheet" href="login.css">
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Home</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="index.php">Home</a>
        <a class="mdl-navigation__link" href="AddLocation.php">Add New Locations & Weather</a>
		<a class="mdl-navigation__link" href="FindLocation.php">Find Location</a>
        <a class="mdl-navigation__link" href="ManageProfile.php">Manage Profile</a>
        <a class="mdl-navigation__link" href="AboutUs.php">About Us</a>
		<a class="mdl-navigation__link" href="">Log Out</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.php">Home</a>
      <a class="mdl-navigation__link" href="AddLocation.php">Add New Locations & Weather</a>
	  <a class="mdl-navigation__link" href="FindLocation.php">Find Location</a>
      <a class="mdl-navigation__link" href="ManageProfile.php">Manage Profile</a>
      <a class="mdl-navigation__link" href="AboutUs.php">About Us</a>
	  <a class="mdl-navigation__link" href="">Log Out</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
	<h2>Manage Profile</h2>



<?php


?>

	</div>
  </main>
</div>
</body>
</html>