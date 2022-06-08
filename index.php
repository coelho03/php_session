<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<div id="back">
		<div id="page">
			<form method="post">
				<h1>Insira seu login...</h1>
				<p>Username:</p>
					<input type="text" name="username" id="campo_login">
				<p>Senha:</p>
					<input type="text" name="senha" id="campo_login">
				<button type="submit">Enviar</button>
			</form>
			<?php 
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['senha'] = $_POST['senha'];

				if(isset($_SESSION['username']) && isset($_SESSION['senha'])){
					if($)
				}
			?>
		</div>
	</div>
</body>
</html>
