<?php
session_start();
require_once('connection.php');
require('checklogin.php');
check();
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Error Page</title>
		<link href="css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div class="all">
		<header>
		<nav class="navigation">
			<div class="logo">
				<h1>PROJEKT V1</h1>
			</div>
			<div id="menu">
				<a href="mainpage.php">Main Page</a>
				<a href="search.php">Search</a>
				<a href="chat.php">Chat</a>
				<a href="note.php">Create Note</a>
				<a href="home.php">Home</a>
				<a href="profile.php"><?=$_SESSION['name']?></a>
				<a href="logout.php">Logout</a>
			</div>
		</nav>
		</header>
		<div class="main_background">
			<div class="main_help"></div>
				<div class="main_title">
					<h2>Error!</h2>
					<h3><?=$_SESSION['error_msg']?></h3>
				</div>
			<div class="main_help"></div>
				<div class="aftererror">
					<button onclick="location.href='<?=$_SESSION['redirect']?>';">Back</button>
				</div>
		</div>
			<div class="main_help"></div>
			<div class="main_help"></div>
			<footer class="footer">
				<a href="admin_check.php">Definately not admin panel</a>
			</footer>
		</div>
	</body>
</html>

<?php
$_SESSION['error_msg'] = "";
$_SESSION['redirect'] = "home.php";
?>