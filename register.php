<!DOCTYPE html>
<meta charset="utf-8" lang="de" >
<html>
	<link rel="shortcut icon" href="index.ico"/>
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/menu.css">
	<head>
		<title>
			MAIN page
		</title>
	</head>
	<body>
		<div class="container" >
			<ul id="menu" >
				<li id="menu" >
					<a id="menu" href="index.php" >
						home
					</a>
				</li>
				<li id="menu" >
					<a id="menu" href="register.php" >
						register
					</a>
				</li>
				<li id="menu" >
					<a id="menu" href="login.php" >
						login
					</a>
				</li>
			</ul>
			<div id="main" >
				<h1 class="title">
					Registriegen<br>
				</h1>
				<form action="register.php" style="margin:5px;" method="post" name="form1" >
					<input id="name" type="text" name="name" placeholder="Name" value="" ></input><br>
					<input id="password" type="password" name="password" placeholder="Passwort" value="" ></input><br>
					<input id="submit" type="submit" name="submit" placeholder="Login" value="Registrieren" ></input>
				</form>
			</center>
			<?php
			error_reporting(E_ALL & ~E_NOTICE); //notices disabled, disable this line for debugging
			/*if (isset($_POST["name"])) {
				die();
			} elseif (isset($_POST["password"])) {
				die();
			} else {*/
			$username = $_POST["name"];
			$password = hash('sha256', $_POST["password"] . "gztadffesfffsacdfdvdsvfdgds");
			$servername = "localhost";
			$DBusername = "root";
			$DBpassword = "";
			$DBname = "main";

			$database = new mysqli($servername, $DBusername, $DBpassword);
			
			$database->query("CREATE DATABASE IF NOT EXISTS test2");
			$database->query("USE test2");
			$database->query("CREATE TABLE IF NOT EXISTS user (`username` TEXT, `password` TEXT)");
			$database->query("INSERT INTO user (`username`, `password`) VALUES ('". $username ."','". $password ."')");
			$database->close();
			?>
		</div>
	</body>
</html>