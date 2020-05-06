
<html>

<meta charset="UTF-8">
<meta name="="widthviewport" content=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
body {
	background-image: url('mountains.jpg');
	}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">Now logged in! </h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Logout button in the bottom left</p>
  </div>
  
</div>

</body>
</html>


<?php
session_start();

if ($_SESSION["checkuser"] === "login")
	{
		echo "You are now logged in";
	} else {
		header("Location: http://localhost/index.php");
	}
?>

<a href="logout.php">logout</a>