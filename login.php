<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<header class="header">
		<h1 class="header_title">Log In</h1>
    </header>

<div class="main">
<?php



if(isset($_POST['submit'])){

if(strtolower($_POST["username"]=="tima" && $_POST["password"]=="tim")){
session_start();
$_SESSION['logged_in'] = TRUE;
header("Location: ./index.php");

}else {
$error= "Login failed !";
}
}



?>
<div class="main1">
<form method="post" action="index.php">

Username: <input class="field" type="text" name="username" required> <?php echo $error;?></br></br>
Password: <input class="field" type="text" name="password" required> <?php echo $error;?></br></br>
		  <input type="submit" name="submit" value="Log In">
</form>
</div>
</div>

</body>
</html>