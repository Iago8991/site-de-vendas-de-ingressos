<?PHP 
	session_start();
	error_reporting(0);
?>

<html>
	<head>
		<title> Pagina01 </title>
		<meta charset="UTF-8">
		<style>
			#principal{
				background: gray;
				border-radius: 10px;
				width: 40%;
				height: 100%;
				margin: 0px auto;
				padding: 5px;
			}
			body::before {
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-image: url('filmes/fundo.jpg');
					background-size: cover; /* Faz com que a imagem cubra toda a área do corpo */
					background-position: center; /* Centraliza a imagem */
					opacity: 0.7; /* Ajuste a opacidade aqui (0 a 1) */
					z-index: -1; /* Coloca a imagem atrás do conteúdo */
				}
		</style>
	</head>
	<body>
		<?php
			if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){ 	
		?>
		
		<?php header("Location: pagina_principal.php");//redirecionamento ?>
		
		<?php
			}else{
		?>



		<div id="principal">
			
			<center> 
				<h1> CINEMAK </h1> 
			</center>

			<form action = "loginsite.php" method="post">

				<center>
					<label for="email">E-mail:</label>
					<input type="text" id="eml" name="e_mail"><br/>
				</center>
				
				<center>
					<label for="pwd">Senha:</label>
					<input type="password" id="pwd" name="senha"><br/>
				</center>
				
				<center>
					<input type= "submit" value="Entrar">
					<input type = "reset" value="Limpar">
				</center>

				<?php
					if($_SESSION["error"] != "") {
						echo "<div style='background-color:red; '>";
						echo $_SESSION["error"];
						echo " </div>";
					}
				?> 
			
		
			</form>
			<?php
				echo "<p><center> <br/> <br/> <br/> <br/> <br/> <br/> <br/>Site de venda de ingressos, lanches e combos.</p> <p>você recebe desconto ao realizar compras acima de R$60, 120, 170.</p> <p>Para cancelar uma compra você deverá dar log-off.</p> <p>na pagina Contate-nos você deve colocar o E-mail de entrada o seu nome e seu comentario para fazer reclamações.</center></p>";
			?>
		</div>

		<?php
			}
		?>
	</body>
</html>