<?PHP 
	session_start();
	error_reporting(0);
	if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado"){
?>
<html>
	<head>
		<title> Sobre </title>
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
					background-image: url('filmes/sobre.jpg');
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
				height: 0px auto;
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
				<h1> Sobre </h1> 
			</center>
			<center> <h4>Integrantes</h4> 
						<br/> 1°Iago da rocha righetti <br/> 2°Felipe Ribeiro Moreira da Silva <br/> 3° Pedro Henrique</center>
						
			<center> <h4>Funções e estruturas utilizadas</h4> 
						<p> Na construção desse site as estruturas e funções mais presentes foram forms e sessions</p>
						<p>com a forte utilização de palavras passes para a realização da maioria dos comandos</p> 
						<p>junto com difinição de valores em variaveis diferentes e somas com armazenamento de valores</p> 
						<p>para realização de calculos, tambem foram utilizadas mensagem de texto, redirecionamentos</p>
						<p>estruturas visuais, if's, else's, isset's, e variaveis session's para o armazenamento de valores.</p> </center>
						
			<center> <h4> Utilização do controle de Session</h4>
						<p>Ao realizar login uma variável session chamada 'controle_de_entrada' é criada e recebe o valor de logado. </p>
						<p>Essa variavel é colocada no começo da página de programação e engloba toda  a programação dentro da pagina. </p>
						<p>Nela tambem é colocada um isset para saber se ela foi definida e se o seu valor é == "logado".</p>
						<p>Se ela estiver definida e o seu valor estiver correto ela permitirá que todo o comando dentro dela seja processado. </p>
						<p>se não estiver ela dará uma mensagem echo vazia e a pagina permanece-rá em branco até que o login sejá efetuado e ela seja criada e definida. </p> </center>
		</div>
	
	</body>
</html>

<?php 
	} else {
		echo "";
	}
?>

