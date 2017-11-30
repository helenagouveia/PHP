<?php
	require_once "bancodedados.php";
	session_start();
		
	if(isset($_SESSION['usuario'])&& !isset($_GET['uid'] ))
	{
		$u = $_SESSION['usuario'];
	}
	else if(isset($_SESSION['usuario'])&& isset($_GET['uid'] ))
	{
		$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		if(!$u){
			header('location: erro.php');
			die();
		}
	}
	else if(!isset($_SESSION['usuario'])&& isset($_GET['uid'] ))
	{
		$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		if(!$u){
			header('location: erro.php');
			die();
		}
	}
	else
	{
		header('location:erro.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<style>
		body{
			margin: 0 auto;
			background-color: #FFF8DC;
		}
		.fundo{
			width: 100vw;
			height: 350px;
		}
		.perfil{
			position: absolute;
			top: 210px; 
			left: 80px;
			width: 250px;
			height: 250px;
			-webkit-clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
            clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%);
		}
		a{
			font-family: "Century Gothic", Arial, sans-serif;
			border-radius: 5px;
			width: 80%;
			padding: 20%;
			border: none;
			background-color: #DCDCDC;
			font-size: 1.0em;
			text-decoration: none;
			color: #000;
			}
		li{
			list-style: none;
			font-family: 'Open Sans', sans-serif;
		}
		.dado{
			margin-top: 75px;
			padding-left: 90px;
			width: 250px;
			float: left
		}
		h2{
			font-family: 'Open Sans', sans-serif;
			
		}
		p{
			font-family: 'Roboto Slab', serif;
			padding-left: 450px;
		}
		.amigo{
			-webkit-clip-path: circle(50% at 50% 50%);
			clip-path: circle(50% at 50% 50%);
			width: 100%;
			height: 100%;
			
		}
		.btn{
			margin: 0px 40%;
		}
		.friend{
			font-family: 'Roboto Slab', serif;
			margin-left: 30px;
		}
		.tudo{
			width: 400px;
			float: left;
		}
		.tudo .friend{
			width: 50px;
			margin: auto;
		}
		.ftamigo{
			width: 250px;
			height: 250px;
			margin: auto;
		}
		.add{
			font-family: "Century Gothic", Arial, sans-serif;
			border-radius: 5px;
			width: 7%;
			padding: 1%;
			border: none;
			background-color: #DCDCDC;
			font-size: 1.0em;
			text-decoration: none;
			color: #000;
		}
		
	</style>
	</head>
	<body>
	<img class="perfil" src= <?php echo '"dados/'.$u['apelido'].'/perfil.jpg"'?>/>
	<img class="fundo" src= <?php echo '"dados/'.$u['apelido'].'/fundo.jpg"'?>/>
	<p>Amigos</p>
	<div class="dado">
		<ul>
		<h2>Nome: <?php echo $u['nome']; ?> </h2>
		<li>Apelido: <?php echo $u['apelido'];	?> </li>
		<li>Sobrenome: <?php echo $u['sobrenome']; ?> </li>
		<li>Sexo: <?php echo $u['sexo'];	?>	</li>
		<li>Email: <?php echo $u['email']; ?> </li>
		</ul>
		<div class="btn">
		<a href="logout.php" > Sair </a>
		</div>
	</div>
	<?php 
	if(isset($_SESSION['usuario']) && isset($_GET['uid'] ))
	{ 
		if(!bd_verificar_amizade_existe( $con, $_SESSION['usuario'],[ 'id' => $_GET['uid'] ])){
	?>
	<form action="funcaoadd.php" method="get">
		<input type="submit" value="Adicionar" name="add" class="add"/></br></br>
		<input type="hidden" name="uid" value=<?php echo '"'.$_GET['uid'].'"';?>/>
		
	</form>	
	<?php 
		}
		else{
			echo "Esse contato já está na sua lista de amigos";
		}
	?>
	<?php 
	}
	
	if(isset($_SESSION['usuario']))
	{
		//if( isset( $_GET[ 'uid' ] ) )
		//	$u = bd_obter_usuario_por_id( $con, $_GET['uid'] );
		//else
		//	$u = $_SESSION[ 'usuario' ];
		//var_dump( $_SESSION['usuario'] );
		$amigos=bd_obter_amigos_usuario( $con, $u );
	?>
	
		
		
		<?php 
		foreach ($amigos as $amigo)
		{
		?>
		
		
		<div>
		<div class="tudo">
			<div class="ftamigo">
			<img class="amigo" src="./dados/<?php echo $amigo['apelido'] ?>/perfil.jpg"/>
			</div>
			<div class="friend">
				<?php echo $amigo['nome'];?>
			</div>
			</div>
		</div>
		<?php
		}
	}
	?>
	 
	</ul>
	
	</body>
</html>