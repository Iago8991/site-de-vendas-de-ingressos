<?PHP 
	session_start();
	error_reporting(0);
	if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado"){
?>
<html>
	<head>
		<title> LANCHES </title>
		<meta charset="UTF-8">
		<style> 
				* {
					font-size: 20px;
            color: black;
            text-align: center;
            font-weight: bold;
            box-sizing: border-box;
				}
				body {
					margin: 0;
				}
				body::before {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-image: url('lanches/fundo.jpg');
					background-size: cover; /* Faz com que a imagem cubra toda a área do corpo */
					background-position: center; /* Centraliza a imagem */
					opacity: 0.7; /* Ajuste a opacidade aqui (0 a 1) */
					z-index: -1; /* Coloca a imagem atrás do conteúdo */
				}
				.topo {
					background-color: gray;
					padding: 20px;
					text-align: center;	
				}
				.links {
					background-color: #333;
					overflow: hidden;
				}
				.links a {
					color: white;
					padding: 14px 16px;
					float: left;
					display: block;
					text-decoration: none;
				}
				.bold {
                font-weight: bold; /* Define o texto como negrito */
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
		
		<div>
			<form action="minhas_compras.php" method="POST">
				<table border= 0 width="100%" style="text-align: center">
					<center> <h1> LANCHES </h1> </center> 
					<tr>
						<td><center> <img src="lanches/doce_mm.jpg" height="200px" width="200px"> </center> <br/> <center> MM'S <br/> R$ 3,50 </center> <br/> <center> <input type="text" name="lanche01"> </center></td>
						<td><center> <img src="lanches/pipoca.jpg" height="200px" width="200px"> </center> <br/> <center> Pipoca <br/> R$ 15,40</center> <br/> <center> <input type="text" name="lanche02"> </center></td>
						<td><center> <img src="lanches/refrigerante.jpg" height="200px" width="200px"> </center> <br/> <center> Coca cola <br/> R$ 6,50 </center> <br/> <input type="text" name="lanche03"> </center></td>
						<td><center> <img src="lanches/pipoca_refrigerante.jpg" height="200px" width="200px"> </center> <br/> <center> Coca cola com pipoca <br/> R$ 19,90 </center> <br/> <input type="text" name="lanche04"> </center></td>
						<td><center> <img src="lanches/suco_del_valle.jpg" height="200px" width="200px"> </center> <br/> <center> suco Del Valle <br/> R$ 4,00 </center> <br/> <input type="text" name="lanche05"> </center></td>
					</tr>
					
					<tr>
						<td><center> <img src="lanches/x_bacon.jpg" height="200px" width="200px"> </center> <br/> <center> X-Bacon <br/> R$ 22,24 </center> <br/> <input type="text" name="lanche06"> </center></td>
						<td><center> <img src="lanches/x_salada.jpg" height="200px" width="200px"> </center> <br/> <center> X-Salada <br/> R$ 16,70 </center> <br/> <input type="text" name="lanche07"> </center></td>
						<td><center> <img src="lanches/X_egg.jpg" height="200px" width="200px"> </center> <br/> <center> X-Egg <br/> R$ 14,60 </center> <br/> <input type="text" name="lanche08"> </center></td>
						<td><center> <img src="lanches/batata.jpg" height="200px" width="200px"> </center> <br/> <center> Batata <br/> R$ 16,30 </center> <br/> <input type="text" name="lanche09"> </center></td>
						<td><center> <img src="lanches/fini_tubes.jpg" height="200px" width="200px"> </center> <br/> <center> Fini tubinhos <br/> R$ 5,00 </center> <br/> <input type="text" name="lanche10"> </center></td>
					</tr>
				</table>
				<center> <input type="submit" value="Enviar para o carrinho"> </center>
			</form>
		</div>
	</body>
</html>

<?php 
	} else{
		echo "";
	}
?>
