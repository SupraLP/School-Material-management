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
					title placeholder<br>
				</h1>
				<div class="button" ><a href="register.php" >Registrieren</a></div><br/>
				<div class="button" ><a href="login.php" >Anmelden</a></div><br/>
				<form action="" ><input type="submit" name="delLogin" value="delete login" /></form>
				<?php
					session_start();
					if (!isset($_GET['delLogin'])) {
						if (isset($_SESSION['name'])) {
							print_r($_SESSION);
						} else {
							echo "<a href=\"login.html\" >Melden Sie sich zuerst an.</a>";
						}
					} else {
						session_destroy();
					}
				?>
			</div>
			<div id="footer" >
				footerfooterfooterfooterfooterfooterfooterfooterfooterfooterfooter<br>
			</div>
		</div>
	</body>
</html>