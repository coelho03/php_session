<?php 
	session_start();

	if (!isset($_SESSION['user']) or !isset($_SESSION['senha'])) {
		header('location: index.php');
	}elseif ($_SESSION['user'] == 'root' and $_SESSION['senha'] == 'usbw') {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>ADM</title>
		</head>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			html, body{
				height: 100%;
			}
			#logout{	
				height: 40px;
				width: 30%;

				font-size: 110%;
				text-decoration: none;
				color: #000;

				background-color: transparent;
				border-radius: 14px;
				border-style: solid;
				border-color: #000;
				border-width: 2px;

				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
			}
		</style>
		<body>
			<center>
				<img src="https://i.pinimg.com/564x/b1/92/c7/b192c70d750d0700becf81b1ccc9e2a6.jpg">
				<a type="button" href="logout.php" id="logout">LOGOUT</a>
			</center>
		</body>
		</html>
		<?php
	}
?>
