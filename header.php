<?php
require_once ("login/loginheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guardian Wars</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>	
<div class="page-wrap">
	<header>
		<div>
			<h1><a href="index.php">Guardian Wars</a></h1>
		</div>
		<nav>
			<ul>
				<li><a href="login/main_login.php">Sign up / Login</a></li>
				<li><a href="#">Manage Clans</a></li>
				<li><a href="#">Find a Match</a></li>
				<input type="text" name="search-guardian" placeholder="Enter Username (PS4 / Xbox)">
				<input type="submit" name="search-guardian-button" value="search">
			</ul>
		</nav>	
	</header>