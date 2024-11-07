<?PHP 
	session_start();
	error_reporting(0);
	if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado"){
?>
<html>
	<head>
		<title> Central de ajuda </title>
		<meta charset="UTF-8">
		<style> 
				*{
					box-sizing: border-box;
				}
				body{
					margin: 0;
				}
				body::before {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-image: url('filmes/contato.jpg');
					background-size: cover; /* Faz com que a imagem cubra toda a área do corpo */
					background-position: center; /* Centraliza a imagem */
					opacity: 0.7; /* Ajuste a opacidade aqui (0 a 1) */
					z-index: -1; /* Coloca a imagem atrás do conteúdo */
				}
				.topo{
					background-color: gray;
					padding: 20px;
					text-align: center;
					
				}
				.links{
					background-color: #333;
					overflow: hidden;
				}
				.links a{
					color: white;
					padding: 14px 16px;
					float: left;
					display: block;
					text-decoration: none;
				}
				#centro{
				background: gray;
				border-radius: 10px;
				width: 40%;
				height: 100%;
				margin: 0px auto;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		<div class="topo"> 
			<center><b1><strong>CINEMAK</strong></b1></center>
		</div>
		<div class="links">
			<a href="pagina_principal.php"> Home </a>
			<a href="minhas_compras.php"> Minhas Compras </a>
			<a href="lanches.php"> Lanches </a>
			<a href="combos.php"> Combos </a>
			<a href="contate_nos.php"> Contate-nos </a>
			<a href="sobre.php"> Sobre </a>
			<a href="logoutsite.php"> Sair </a>
		</div>
		<div id="centro">
			<center> 
				<h1> Central de atendimento </h1> 
			</center>
			<form action = "Contatenos_envio" method="POST">
				<center>
					Nome:
					<input type="text" name="nome"> 
				</center>
				<center>
					<br/>E-mail:
					<input type="text" name="e_mail"> 
				</center>
				<center>
					Area de texto<br/>
					<textarea  name="reclamacoes" rows="5" cols="33" min="0" max="340">
						Digite qual o problema.
					</textarea>				
				</center>	
				<center>
					<input type= "submit" value="Enviar">
					<input type = "reset" value="Limpar">
				</center>

			</form>
			<center> Números para contato: </br> <img src="wats.png" width="30px" height="30px"> 99364-4657 <br/> <img src="wats.png" width="30px" height="30px"> 94845-1901 <br/> <img src="wats.png" width="30px" height="30px"> 91373-4356 </center>	
			
			
		</div>
	
	</body>
</html>

<?php 
	} else {
		echo "";
	}
?>