<?PHP 
	session_start();
	error_reporting(0);
	if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado"){
?>

<html>
	<head>
		<title> Minhas Compras </title>
		<meta charset="UTF-8">
		<style> 
				*{
					font-size: 20px;
            color: black;
            text-align: center;
            font-weight: bold;
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
					background-image: url('filmes/carrinho.jpg');
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
				.final{
					background-color: gray;
					overflow: hidden;
					box-sizing: border-box;
					float: dawn;
					display: block;
					
				}
				.compras{
					margin: 0;
					background-color: gray;
					padding: 5px;
					text-align: center;
					
				}
				.descontos{
					margin: 0;
					background-color: gray;
					padding: 5px;
					text-align: center;
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
		<div>
			<?php
				$_SESSION["total"] = 0;
								   
				$filme01 = $_POST ["filme01"]; // Vingadores Ultimato R$ 40
				$filme02 = $_POST ["filme02"]; // Homem Aranha Através Do Aranhaverso R$ 30
				$filme03 = $_POST ["filme03"]; // Batman R$ 29
				$filme04 = $_POST ["filme04"]; // Clube Da Luta R$ 25 
				$filme05 = $_POST ["filme05"]; // Coringa R$ 34
				$filme06 = $_POST ["filme06"]; // Deadpool & Wolverine R$ 34
				$filme07 = $_POST ["filme07"]; // Longlegs Vínculo mortal R$ 40
				$filme08 = $_POST ["filme08"]; // Kung Fu Panda 4 R$ 34
				$filme09 = $_POST ["filme09"]; // Sonic 3 R$ 27,90
				$filme10 = $_POST ["filme10"]; // Transformers R$ 25
				
				$lanche01 = $_POST ["lanche01"]; // MM's R$ 3,50
				$lanche02 = $_POST ["lanche02"]; // Pipoca R$ 15,40
				$lanche03 = $_POST ["lanche03"]; // Coca cola R$ 6,50
				$lanche04 = $_POST ["lanche04"]; // Coca cola com Pipoca R$ 19,90
				$lanche05 = $_POST ["lanche05"]; // Suco Del Valle R$ 4,00
				$lanche06 = $_POST ["lanche06"]; // X-Bacon R$ 22,24
				$lanche07 = $_POST ["lanche07"]; // X-salada R$16,70
				$lanche08 = $_POST ["lanche08"]; // X-Egg R$ R$14,60 
				$lanche09 = $_POST ["lanche09"]; // Batata R$ 16,30
				$lanche10 = $_POST ["lanche10"]; // Fini Tubinhos R$ 5,00
				
				$combo01 = $_POST ["combo01"]; // X-Salada/Batata/Coca R$ 25,90
				$combo02 = $_POST ["combo02"]; // X-Bacon/Batata/Coca R$ 29,90
				$combo03 = $_POST ["combo03"]; // Combo Duplo R$ 35,60 
				$combo04 = $_POST ["combo04"]; // Combo Mega R$ 37,90
				$combo05 = $_POST ["combo05"]; // Combo Mega Doce R$ 22,90
				$combo06 = $_POST ["combo06"]; // Combo Kids R$ 21,40
				$combo07 = $_POST ["combo07"]; // Combo Happy R$27,90
				$combo08 = $_POST ["combo08"]; // Pipoca/2 Cocas R$24,90
				$combo09 = $_POST ["combo09"]; // 2 Pipocas/2 Cocas/KitKat R$29,90
				$combo10 = $_POST ["combo10"]; // Caixa MM's/1 Pipoca/Coca R$30,00
			?>
			
				
					<?php
						if($filme01 =="comprar"){
							$_SESSION["vingadores"] = "";
						}
						if(isset($_SESSION["vingadores"])){
							$_SESSION ["f1valor"] = 40;
							echo "<div class ='compras'> ";
							echo "<h1>Vingadores Ultimato</h1><br/>  
								<img src='filmes/vingadores.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f1valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f1valor"];		
						echo "</div>";	
						}else{ echo"";}
					?>
		           <?php
						if($filme02 =="comprar"){
							$_SESSION["aranhaverso"] = "";
						}
						if(isset($_SESSION["aranhaverso"])){
							$_SESSION["f2valor"] = 30;
							echo "<div class ='compras'> ";
							echo "<h1>Homem Aranha <br/> Através do aranhaverso</h1><br/>  
								<img src='filmes/aranhaverso.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f2valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f2valor"];
						echo "</div>";
						}else{ echo"";}
					?>
					<?php
						if($filme03 =="comprar"){
							$_SESSION["batman"] = "";
						}
						if(isset($_SESSION["batman"])){
							$_SESSION["f3valor"] = 29;
							echo "<div class ='compras'> ";
							echo "<h1>Batman</h1><br/>  
								<img src='filmes/batman.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f3valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f3valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme04 =="comprar"){
							$_SESSION["clube_luta"] = "";
						}
						if(isset($_SESSION["clube_luta"])){
							$_SESSION["f4valor"] = 25;
							echo "<div class ='compras'> ";
							echo "<h1>Clube Da Luta</h1><br/>  
								<img src='filmes/clube_da_luta.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f4valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f4valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme05 =="comprar"){
							$_SESSION["coringa"] = "";
						}
						if(isset($_SESSION["coringa"])){
							$_SESSION["f5valor"] = 34;
							echo "<div class ='compras'> ";
							echo "<h1>Coringa<h1><br/>  
								<img src='filmes/coringa.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f5valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f5valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme06 =="comprar"){
							$_SESSION["deadpool_wolverine"] = "";
						}
						if(isset($_SESSION["deadpool_wolverine"])){
							$_SESSION["f6valor"] = 34;
							echo "<div class ='compras'> ";
							echo "<h1>Deadpool & Wolverine<h1><br/>  
								<img src='filmes/deadpool_wolverine.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f6valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f6valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme07 =="comprar"){
							$_SESSION["longlegs"] = "";
						}
						if(isset($_SESSION["longlegs"])){
							$_SESSION["f7valor"] = 40;
							echo "<div class ='compras'> ";
							echo "<h1>Longlegs <br/> Vinculo mortal<h1><br/>  
								<img src='filmes/longlegs.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f7valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f7valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme08 =="comprar"){
							$_SESSION["panda"] = "";
						}
						if(isset($_SESSION["panda"])){
							$_SESSION["f8valor"] = 34;
							echo "<div class ='compras'> ";
							echo "<h1>Kung fu panda 4<h1><br/>  
								<img src='filmes/panda_4.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f8valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f8valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme09 =="comprar"){
							$_SESSION["sonic"] = "";
						}
						if(isset($_SESSION["sonic"])){
							$_SESSION["f9valor"] = 27.90;
							echo "<div class ='compras'> ";
							echo "<h1>Sonic 3 <br/> O filme<h1><br/>  
								<img src='filmes/sonic_3.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f9valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f9valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($filme10 =="comprar"){
							$_SESSION["transformers"] = "";
						}
						if(isset($_SESSION["transformers"])){
							$_SESSION["f10valor"] = 25;
							echo "<div class ='compras'> ";
							echo "<h1>Transformers <br/> O início<h1><br/>  
								<img src='filmes/transformers.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["f10valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["f10valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche01 =="comprar"){
							$_SESSION["lanche01"] = "";
						}
						if(isset($_SESSION["lanche01"])){
							$_SESSION["l1valor"] = 3.50;
							echo "<div class ='compras'> ";
							echo "<h1>MM's<h1><br/>  
								<img src='lanches/doce_mm.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l1valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l1valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche02 =="comprar"){
							$_SESSION["lanche02"] = "";
						}
						if(isset($_SESSION["lanche02"])){
							$_SESSION["l2valor"] = 15.40;
							echo "<div class ='compras'> ";
							echo "<h1>Pipoca<h1><br/>  
								<img src='lanches/pipoca.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l2valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l2valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche03 =="comprar"){
							$_SESSION["lanche03"] = "";
						}
						if(isset($_SESSION["lanche03"])){
							$_SESSION["l3valor"] = 6.50;
							echo "<div class ='compras'> ";
							echo "<h1>Coca cola<h1><br/>  
								<img src='lanches/refrigerante.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l3valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l3valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche04 =="comprar"){
							$_SESSION["lanche04"] = "";
						}
						if(isset($_SESSION["lanche04"])){
							$_SESSION["l4valor"] = 19.90;
							echo "<div class ='compras'> ";
							echo "<h1>Coca cola com Pipoca<h1><br/>  
								<img src='lanches/pipoca_refrigerante.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l4valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l4valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche05 =="comprar"){
							$_SESSION["lanche05"] = "";
						}
						if(isset($_SESSION["lanche05"])){
							$_SESSION["l5valor"] = 4;
							echo "<div class ='compras'> ";
							echo "<h1>Suco del Valle<h1><br/>  
								<img src='lanches/suco_del_valle.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l5valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l5valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche06 =="comprar"){
							$_SESSION["lanche06"] = "";
						}
						if(isset($_SESSION["lanche06"])){
							$_SESSION["l6valor"] = 22.24;
							echo "<div class ='compras'> ";
							echo "<h1>X-Bacon<h1><br/>  
								<img src='lanches/x_bacon.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l6valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l6valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche07 =="comprar"){
							$_SESSION["lanche07"] = "";
						}
						if(isset($_SESSION["lanche07"])){
							$_SESSION["l7valor"] = 16.70;
							echo "<div class ='compras'> ";
							echo "<h1>X-Salada<h1><br/>  
								<img src='lanches/X_salada.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l7valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l7valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche08 =="comprar"){
							$_SESSION["lanche08"] = "";
						}
						if(isset($_SESSION["lanche08"])){
							$_SESSION["l8valor"] = 14.60;
							echo "<div class ='compras'> ";
							echo "<h1>X-Egg<h1><br/>  
								<img src='lanches/X_egg.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l8valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l8valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche09 =="comprar"){
							$_SESSION["lanche09"] = "";
						}
						if(isset($_SESSION["lanche09"])){
							$_SESSION["l9valor"] = 16.30;
							echo "<div class ='compras'> ";
							echo "<h1>Batata<h1><br/>  
								<img src='lanches/batata.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l9valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l9valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($lanche10 =="comprar"){
							$_SESSION["lanche10"] = "";
						}
						if(isset($_SESSION["lanche10"])){
							$_SESSION["l10valor"] = 5;
							echo "<div class ='compras'> ";
							echo "<h1>Fini tubinhos<h1><br/>  
								<img src='lanches/fini_tubes.jpg' height='200px' width='200px'> <br/>
								R$ {$_SESSION["l10valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["l10valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo01 =="comprar"){
							$_SESSION["combo01"] = "";
						}
						if(isset($_SESSION["combo01"])){
							$_SESSION["c1valor"] = 25.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_01.jpg' height='200px' width='200px'> <br/>
								<h1>X-Salada <br/> Batata <br/> Coca<h1><br/>
								R$ {$_SESSION["c1valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c1valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo02 =="comprar"){
							$_SESSION["combo02"] = "";
						}
						if(isset($_SESSION["combo02"])){
							$_SESSION["c2valor"] = 29.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_02.jpg' height='200px' width='200px'> <br/>
								<h1>X-Bacon <br/> Batata <br/> Coca<h1><br/>
								R$ {$_SESSION["c2valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c2valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo03 =="comprar"){
							$_SESSION["combo03"] = "";
						}
						if(isset($_SESSION["combo03"])){
							$_SESSION["c3valor"] = 35.60;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_03.jpg' height='200px' width='200px'> <br/>
								<h1>Combo Duplo <h1><br/>
								R$ {$_SESSION["c3valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c3valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo04 =="comprar"){
							$_SESSION["combo04"] = "";
						}
						if(isset($_SESSION["combo04"])){
							$_SESSION["c4valor"] = 37.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_04.jpg' height='200px' width='200px'> <br/>
								<h1>Combo Mega <h1><br/>
								R$ {$_SESSION["c4valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c4valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo05 =="comprar"){
							$_SESSION["combo05"] = "";
						}
						if(isset($_SESSION["combo05"])){
							$_SESSION["c5valor"] = 22.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_05.jpg' height='200px' width='200px'> <br/>
								<h1>Combo Mega Doce <h1><br/>
								R$ {$_SESSION["c5valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c5valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo06 =="comprar"){
							$_SESSION["combo06"] = "";
						}
						if(isset($_SESSION["combo06"])){
							$_SESSION["c6valor"] = 21.40;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_06.jpg' height='200px' width='200px'> <br/>
								<h1>Combo Kids <h1><br/>
								R$ {$_SESSION["c6valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c6valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo07 =="comprar"){
							$_SESSION["combo07"] = "";
						}
						if(isset($_SESSION["combo07"])){
							$_SESSION["c7valor"] = 27.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_07.jpg' height='200px' width='200px'> <br/>
								<h1>Combo Happy <h1><br/>
								R$ {$_SESSION["c7valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c7valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo08 =="comprar"){
							$_SESSION["combo08"] = "";
						}
						if(isset($_SESSION["combo08"])){
							$_SESSION["c8valor"] = 24.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_08.jpg' height='200px' width='200px'> <br/>
								<h1>Pipoca <br/> 2 Cocas  <h1><br/>
								R$ {$_SESSION["c8valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c8valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo09 =="comprar"){
							$_SESSION["combo09"] = "";
						}
						if(isset($_SESSION["combo09"])){
							$_SESSION["c9valor"] = 29.90;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_09.jpg' height='200px' width='200px'> <br/>
								<h1>2 Pipocas <br/> 2 Cocas <br/> KitKat  <h1><br/>
								R$ {$_SESSION["c9valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c9valor"];
						echo "</div>";
						}else{ echo"";}
					?>
							<?php
						if($combo10 =="comprar"){
							$_SESSION["combo10"] = "";
						}
						if(isset($_SESSION["combo10"])){
							$_SESSION["c10valor"] = 30;
							echo "<div class ='compras'> ";
							echo "<img src='combos/combo_10.jpg' height='200px' width='200px'> <br/>
								<h1>Caixa MM's <br/> 1 Pipoca <br/> Coca  <h1><br/>
								R$ {$_SESSION["c10valor"]}<br/><br/>
							";
						$_SESSION["total"] = $_SESSION["total"] + $_SESSION["c10valor"];
						echo "</div>";
						}else{ echo"";}
					?>
		</div>
		<div class="descontos">
			<?php
				if($_SESSION["total"] >= 60 && $_SESSION["total"] < 120){
					$_SESSION["total"] = $_SESSION["total"] - ($_SESSION["total"]/ 100 * 6);
					echo "VOCE GANHOU UM DESCONTO DE 6%!!!";	
				} else { if ($_SESSION["total"] >= 120 && $_SESSION["total"] < 170){
							$_SESSION["total"] = $_SESSION["total"] - ($_SESSION["total"]/ 100 * 12);
							echo "VOCE GANHOU UM DESCONTO DE 12%!!!";
						} if ($_SESSION["total"] >= 170){ 
							$_SESSION["total"] = $_SESSION["total"] - ($_SESSION["total"]/ 100 * 18);
							echo "VOCE GANHOU UM DESCONTO DE 18%!!!";
						}
					}
			?>
		</div>
		<div class="final">
			<?php
				echo "<center><h2>TOTAL: R$ {$_SESSION["total"]} </h2></center>";
			?>
			<center> <h2><input type="submit" value="COMPRAR"> </h2> </center>
		</div>
	
	</body>
</html>

<?php 
	} else {
		echo "";
	}
?>
