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
			<center><b1>CINEMAK</b1></center>
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
			
			<?php								
				$e_mail = $_POST["e_mail"];
				$nome = $_POST["nome"];
				$reclamacoes = $_POST["reclamacoes"];
				if($e_mail =="João4314@gmail.com"){
					echo "<center>Usuario $nome <br/>
					Do E-mail: $e_mail <br/>
					Com a reclamação ($reclamacoes) <br/>
					Mensagem enviada desculpe o incomodo</center>";
				}else{
					echo "";
				}
			?>
		</div>
	
	</body>
</html>

<?php 
	} else {
		echo "";
	}
?>

