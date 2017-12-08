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
				<h1 class="ueberschrift">
					Registriegen<br>
				</h1>
				<form action="/Informatik_K10/register.php" style="margin:5px;" method="post" name="form1" >
					<input id="name" type="text" name="name" placeholder="Name" value="" ></input><br>
					<input id="password" type="password" name="password" placeholder="Passwort" value="" ></input><br>
					<input id="submit" type="submit" name="submit" placeholder="Login" value="Login" ></input>
				</form>
			</center>
			<?php 
			$username = $_POST["name"];
			$password = hash('sha256', $_POST["password"] . "gztadffesfffsacdfdvdsvfdgds");
			$servername = "localhost";
			$DBusername = "root";
			$DBpassword = "";
			$DBname = "main";

			$database = new mysqli($servername, $DBusername, $DBpassword);
			
			//$database->query("CREATE DATABASE test2");
			$database->query("USE test2");
			if ($database->query("CREATE TABLE material (username TEXT, password TEXT)") VALUES (". $name .",". $password .") {
				echo header("Location: index.html");
			}
			$database->close(); 
			?>
		</div>
	</body>
</html>


<!-- 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

// Create connection
$database = new mysqli($servername, $username, $password);
// Check connection
/*if ($database->connect_error) {
	echo "Connection failed: " . $database->connect_error;
}*/

$database->query("CREATE DATABASE test2");
$database->query("USE test2");
if $database->query("CREATE TABLE benutzer (username TEXT, password TEXT)"); {
	echo "hi";
}

/*if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	}
} else {
	echo "0 results";
}*/

$conn->close();
-->