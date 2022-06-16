<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<div id="site">
			<form method="POST" action="pag1.php" id="form">
				<h1>Login</h1>
				<p>Username:</p>
					<input type="text" name="user" id="campo_login" required>
				<p>Senha:</p>
					<input type="password" name="senha" id="campo_login" required><br>
				<button id="enviar" type="submit">Enviar</button>
			</form>
	</div>
</body>
</html>
