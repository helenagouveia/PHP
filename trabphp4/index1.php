<?php
	require_once 'funcoes.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Lighthouse</title>
		<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
		<link rel="icon" href="http://media.cargocollective.com/1/7/244267/headerimg/LH-LOGO.png" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
		<style>
			@keyframes fadeIn{
				0%{opacity: 0},
				100%{opacity: 1}
			}
			.wallpaper{
				width:100%;
			}

			*{
				border: 0;
				margin: 0;
				padding: 0;
				font-family: "century gothic";
				text-decoration: none;
			}
			body{
				animation: fadeIn .5s linear;
			}
			.header{
				width: 100vw;
				height: 100vh;
				position: relative;
				background-image: url('./img/bk-img.jpg');
				background-size: cover;
			}
			.header-content{
				width: 900px;
				margin: 0 auto;
				padding: 10% 0;
			}
			.header-content-logo{
				text-align: center;
				width: 300px;
				top: 100px;
				margin-left: 40px;
			}
			.button {
				background-color: #CFCFCF; 
				border: none;
				color: black;
				padding: 15px 32px;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				font-size: 18px;
				border-radius: 5%;
				margin-left: 210px;
				margin-top: 30px;
				font-family: 'Sanchez', serif;
			}
			a{
				text-decoration: none; 
				color: #000; 
			}

					
		
		</style>
	</head>
	<body>
		<div class="header">
			<div class="header-content">
				<div class="header-content-logo">
				<img src="./img/logo1.png"/>
				</div>
			<div class="header-nav">
				<p class="button"><a href="index.php">Login</a></p>
				<p class="button"><a href="cadastrar.php">Cadastro</a></p>
			</div>
		</div>
	</body>
</html>