<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
		<div id="painel">
			<form method="POST" action="pag1.php">
				<h1>Insira seu login...</h1>
				<p>Username:</p>
					<input type="text" name="user">
				<p>Senha:</p>
					<input type="text" name="senha">
				<button id="enviar" type="submit">Enviar</button>
			</form>
		</div>
</body>
</html>
