<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/index.css"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
	<style>
			*{
				border: center;
				margin: 0;
				padding: 0;
			}
			h1{
				text-align: center;
				font-size: 2em;
				margin: 0 auto 20px;
				opacity: 0.9;
				font-family: 'Sanchez', serif;
						
			}
			body{
				background-image: url('https://wallpapertag.com/wallpaper/full/9/9/2/149630-best-gradient-background-tumblr-2880x1800-for-android-tablet.jpg');
				background-size: cover;
				animation: fadeIn .5s linear;
			}
			.fadeIn{
				width: 46%;
				border-top: 10%;
				border-bottom: 0;
				height: 635px;
				text-align: center;
				margin: 0 auto;
			}
			input{
				outline: none;
				border-radius:5px;
			}
			.enviar{
				font-family: "Century Gothic", Arial, sans-serif;
				margin-top: 5%;
				border-radius: 5px;
				width: 20%;
				padding: 1%;
				border: none;
				background-color: rgba(255,255,255,0.7);
				font-size: 1.5em
			}

			.enviar:hover{
				transition: 0.2s;
				font-weight: bold;
				color: #008B8B; 
			}
			a{
				font-family: "Century Gothic", Arial, sans-serif;
				border-radius: 5px;
				width: 40%;
				padding: 1%;
				border: none;
				background-color: rgba(255,255,255,0.7);
				font-size: 1.5em;
				text-decoration: none;
				color: #000;
			}
			a:hover{
				transition: 0.2s;
				font-weight: bold;
				color: #008B8B;
			}
			.title{
				text-align: center;
				text-transform: uppercase;
				padding: 20px 0;
				font-weight: normal;
				font-size: 50px;
				letter-spacing: 5px;
				color: #000;
				margin: 0 auto;
				width: 400px;
			}
			.lado,.email, .username, .senha, .csenha{
				width: 500px;
				display: block;
				text-align: center;
				margin: 20px auto;
				padding: 5px;
			}
			input{
				outline: none;
				border-radius:5px;
			}
	</style>
	</head>
	<body>
		<div class="fadeIn">
			<h1 class="title">Cadastro</h1>
		<div class="caixa">
			<form action="cads.php" method="post" enctype="multipart/form-data">
				<input type="text" placeholder="Nome" name="nome" class="lado"/>
				<input type="text" placeholder="Sobrenome" name="sobrenome" class="lado"/>
				
				<label for="sexo">Sexo:</label>
				<input type="radio" name="sexo" class="sexo" value="F"/>F
				<input type="radio" name="sexo" class="sexo" value="M"/>M
				<input type="radio" name="sexo" class="sexo" value="O"/>Outro</br></br>
				
				<input type="email" placeholder="Email" name="email" class="box" size="46"/></br></br>
				<input type="text" placeholder="Nome de usuário" name="username" class="box" size="46"/></br></br>
				
				<input type="password" placeholder="Senha" name="senha" class="box" size="18"/>
				<input type="password" placeholder="Confirmação da senha" name="csenha" class="box" size="21"/></br>
				
				</br><input type="file" name="perfil"/></br>
				</br><input type="file" name="fundo"/>
				
				</br></br>
				
				<input type="submit" value="Cadastrar" class="enviar"/><br/>
				<br/><a href="index1.php">Página Inicial</a> 
			</form>
		</div>
	</div>
	</body>
</html>