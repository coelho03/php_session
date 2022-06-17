<?php session_start(); 
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['senha'] = $_POST['senha'];

	if (!isset($_SESSION['user']) or !isset($_SESSION['senha'])) {
		header('location: index.php');
	}elseif ($_SESSION['user'] == 'root' and $_SESSION['senha'] == 'usbw') {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="style_site.css">
			<title>Navegador</title>
		</head>
		<body>
			<div id="site">
				<div id="painel">
					<div class="coluna" id="cima">
						<a href="adm1.php" class="item">ADM</a>
						<a href="adm2.php" class="item">ADM</a>
					</div>
					<div class="coluna" id="baixo">
						<a href="user1.php" class="item" id="bottom_box">USER</a>
						<a href="user2.php" class="item" id="bottom_box">USER</a>
					</div>
				</div>
			</div>
		</body>
		</html>
		<?php
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style_site.css">
			<title>Navegador</title>
		</head>
		<body>
			<div id="site">
				<div id="painel_user">
					<div id="coluna_user">
						<a class="item_user" href="user1.php">USER</a>
						<a class="item_user" href="user2.php">USER</a>
					</div>
				</div>
			</div>
		</body>
		</html>
	<?php
	}
	?>
