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
				<!--<?php
				$servername = "localhost";
				$username = "username";
				$password = "password";
				$dbname = "main";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = "SELECT id, firstname, lastname FROM MyGuests";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
					}
				} else {
					echo "0 results";
				}
				$conn->close();
				?>-->
				contentcontentcontentcontentcontent<br>
				contentcontentcontentcontentcontent<br>
				contentcontentcontentcontentcontent<br>
				contentcontentcontentcontentcontent<br>
				contentcontentcontentcontentcontent<br>
			</div>
			<div id="footer" >
				footerfooterfooterfooterfooterfooterfooterfooterfooterfooterfooter<br>
			</div>
		</div>
	</body>
</html>