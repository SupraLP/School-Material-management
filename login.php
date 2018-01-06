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
					<a id="menu" >
						menupoint1
					</a>
				</li>
				<li id="menu" >
					<a id="menu" >
						menupoint2
					</a>
				</li>
			</ul>
			<div id="main" >
				<h1 class="title">
					Login<br>
				</h1>
				<form action="index.php" style="margin:5px;" method="post" name="form1" >
					<input id="name" type="text" name="name" placeholder="Name" value="" ></input><br>
					<input id="password" type="password" name="password" placeholder="Passwort" value="" ></input><br>
					<input id="submit" type="submit" name="submit" placeholder="Login" value="Login" ></input>
				</form>
				<?php
				$username = $_POST["name"];
				$password = hash('sha256', $_POST["password"] . "gztadffesfffsacdfdvdsvfdgds");
				$servername = "localhost";
				$DBusername = "root";
				$DBpassword = "";
				$DBname = "main";

				// Create connection
				$database = new mysqli($servername, $DBusername, $DBpassword);
				
				$database->query("USE test2");
				/*if ($username==FrauBorda and $passwort==hash('sha256', "EasterEgg" . "gztadffesfffsacdfdvdsvfdgds")) {
					echo header("Location: pfannkuchen.html");
					$log = 1;
				} else {*/
					$result = $database->query("SELECT password FROM benutzer WHERE username = '" . $username . "'");
					$pass = $result->fetch_array();
					
					if($result === FALSE) { 
						die(mysql_error());
					}
					
					if ($password == $pass[0]) {
						echo "Login Erfolgreich";
					} else {
						echo "Passwort und Benutzername stimmen nicht überein";
					}/*
				}*/
				$database->close();
				?>
			</div>
			<div id="footer" >
				footerfooterfooterfooterfooterfooterfooterfooterfooterfooterfooter<br>
			</div>
		</div>
	</body>
</html>