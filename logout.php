<style>
	body {
	background-image: url('mountains.jpg');
	}
	</style>

<?php
session_start();
// destroy the session 
session_destroy(); 
header("Location: http://localhost/index.php");
?>