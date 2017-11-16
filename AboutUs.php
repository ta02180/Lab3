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
	<title>Home Page</title>
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
	<h2>About Us</h2>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et leo in sem commodo consequat. Suspendisse eu dictum neque, id aliquet mi. Pellentesque auctor commodo dolor, non consectetur magna. Suspendisse potenti. Proin vel tellus in mauris blandit laoreet. Cras sit amet mattis tortor. Vivamus ut felis iaculis sapien auctor vestibulum.

Nulla lacus enim, euismod eget urna non, dictum elementum ipsum. Vivamus erat erat, aliquet vel magna sed, dignissim pretium diam. Etiam lobortis consequat nisl bibendum malesuada. In in interdum turpis. Vestibulum justo libero, accumsan vel sapien sit amet, fermentum porta ipsum. Proin justo ex, eleifend at vehicula sed, efficitur id sapien. Vivamus sagittis justo non eros eleifend, nec tristique sapien tempor. Mauris eu erat vel felis iaculis ullamcorper vitae vitae felis.

Aenean eu condimentum dui. Mauris euismod mollis sodales. In consequat libero nec dolor egestas luctus. Etiam venenatis viverra massa rutrum laoreet. Cras ullamcorper, tellus a hendrerit cursus, felis arcu convallis purus, at egestas diam magna eu tellus. Quisque lacus eros, consectetur mattis nulla a, cursus pulvinar risus. Maecenas eu turpis ipsum. Etiam in quam in dolor consectetur congue. Sed mattis nisl vitae libero semper, id dignissim sem rhoncus. Ut arcu ante, placerat fermentum scelerisque in, sodales at erat. Nullam mollis mattis diam et posuere. Pellentesque interdum sagittis molestie. In nec venenatis mi. Maecenas non ligula hendrerit enim ornare auctor quis iaculis est.


</p>


<?php


?>

	</div>
  </main>
</div>
</body>
</html>