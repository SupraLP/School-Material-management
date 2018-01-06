<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="style/index.ico"/>
        <link rel="stylesheet" href="style/links.css">
		<link rel="stylesheet" href="style/menu.css">
        <link rel="stylesheet" href="style/footer.css">
        <link rel="stylesheet" href="style/boxes.css">
        <link rel="stylesheet" href="style/background.css">
		<title>Registrieren</title>
	</head>
	<body>
		<div class="main" >
			<center>
				<h1 class="title">
					Registriegen<br>
				</h1>
				<form action="register.php" style="margin:5px;" method="post" name="form1" >
					<input id="name" type="text" name="name" placeholder="Name" value="" ></input><br>
					<input id="password" type="password" name="password" placeholder="Passwort" value="" ></input><br>
					<input id="submit" type="submit" name="submit" placeholder="Login" value="Login" ></input>
				</form>
			</center>
			<?php 
			error_reporting(E_ALL & ~E_NOTICE); //notices disabled, disable this line for debugging
			$username = $_POST["name"];
			$password = hash('sha256', $_POST["password"] . "gztadffesfffsacdfdvdsvfdgds");
			$servername = "localhost";
			$DBusername = "root";
			$DBpassword = "";
			$DBname = "main";

			$database = new mysqli($servername, $DBusername, $DBpassword);
			
			$database->query("CREATE DATABASE IF NOT EXISTS test2");
			$database->query("USE test2");
			$database->query("CREATE TABLE IF NOT EXISTS benutzer (`id` int, `username` TEXT, `password` TEXT, PRIMARY KEY (id))");
			$database->query("INSERT INTO benutzer (DEFAULT, `username`, `password`) VALUES ('"DEFAULT"','". $username ."','". $password ."')");
			$database->close(); 
			?>
		</div>
	</body>
</html>