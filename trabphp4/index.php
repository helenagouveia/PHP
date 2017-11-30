<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/login.css"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
		
	</head>
	<body>
		<div class="log">
			<img class="logo" src="./img/logo.jpg"/>
			<h1>LOGIN</h1>
			<form action="loginphp.php" method="post">
				<input type="text" placeholder="Nome de usuário" name="username" class="box"/></br></br>
				<input type="password" placeholder="Senha" name="senha" class="box"/>
				
				<a class="ent" href="home.php"><input type="submit" value="Entrar" id="entrar"/></a>
			</form>
		</div>
	</body>
</html>