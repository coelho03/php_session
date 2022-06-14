<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
		<div id="painel">
			<form method="post" action="pag1.php">
				<h1>Insira seu login...</h1>
				<p>Username:</p>
					<input type="text" name="username" id="campo_login">
				<p>Senha:</p>
					<input type="text" name="senha" id="campo_login">
				<button id="enviar" type="submit">Enviar</button>
			</form>
		</div>
</body>
</html>
