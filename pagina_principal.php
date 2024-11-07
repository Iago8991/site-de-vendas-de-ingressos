<?PHP 
session_start();
error_reporting(0);
if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado"){
?>

<html>
<head>
    <title> Página princioooooopal </title>
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
            overflow: hidden;
        }

        .background {
            position: fixed; /* Mantém a imagem de fundo fixa */
            top: 0;
            left: 0;
            width: 100%; /* Faz com que a div cubra toda a tela */
            height: 100%;
            background-image: url('https://d2d7ho1ae66ldi.cloudfront.net/ArquivoNoticias/55ac55c4-5bb0-11ed-aa6e-9587410378a2/Fgpu17hWQAUmJ5n.jpeg');
            background-size: cover; /* Ajusta a imagem para cobrir toda a div */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat; /* Evita que a imagem se repita */
            opacity: 0.7; /* Ajuste a opacidade conforme necessário */
            z-index: 0; /* Garante que a div fique atrás do conteúdo */
        }

        .content {
            position: relative; /* Permite que os filhos se posicionem acima da div.background */
            z-index: 1; /* Garante que o conteúdo fique acima da imagem de fundo */
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
    </style>
</head>
<body>
    <div class="background"></div> <!-- Div para a imagem de fundo -->

    <div class="content"> <!-- Contém o conteúdo da página -->
        <div class="topo"> 
            <center><b>CINEMAK</b></center>
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
                    <center> <h1> Filmes em cartaz </h1> </center> 
                    <tr>
                        <td><center> <img src="filmes/vingadores.jpg"    height="200px" width="200px"> </center> <br/> <center> Vingadores Ultimato <br/> R$ 40,00 </center> <center> <input type="text" name="filme01"><br/></center></td>
                        <td><center> <img src="filmes/aranhaverso.jpg"   height="200px" width="200px"> </center> <br/> <center> Homem aranha <br/> através do aranhaverso <br/> R$ 30,00 </center> <center> <input type="text" name="filme02"> </center></td>
                        <td><center> <img src="filmes/batman.jpg"        height="200px" width="200px"> </center> <br/> <center> Batman <br/> R$ 29,00 </center> <center> <input type="text" name="filme03"> </center></td>
                        <td><center> <img src="filmes/clube_da_luta.jpg" height="200px" width="200px"> </center> <br/> <center> Clube da luta <br/> R$ 25,00 </center> <center> <input type="text" name="filme04"> </center></td>
                        <td><center> <img src="filmes/coringa.jpg"       height="200px" width="200px"> </center> <br/> <center> Coringa <br/> R$ 34,00 </center> <center> <input type="text" name="filme05"> </center></td>
                    </tr>
                    
                    <tr>
                        <td><center> <img src="filmes/deadpool_wolverine.jpg" height="200px" width="200px"> </center> <br/> <center> Deadpool & Wolverine <br/> R$ 34,00 </center> <center> <input type="text" name="filme06"> </center></td>
                        <td><center> <img src="filmes/longlegs.jpg"           height="200px" width="200px"> </center> <br/> <center> Longlegs <br/> Vínculo mortal <br/> R$ 40,00 </center> <center> <input type="text" name="filme07"> </center></td>
                        <td><center> <img src="filmes/panda_4.jpg"            height="200px" width="200px"> </center> <br/> <center> Kung fu panda 4 <br/> R$ 34,00 </center> <center> <input type="text" name="filme08"> </center></td>
                        <td><center> <img src="filmes/sonic_3.jpg"            height="200px" width="200px"> </center> <br/> <center> Sonic 3 <br/> O filme <br/> R$ 27,90 </center> <center> <input type="text" name="filme09"> </center></td>
                        <td><center> <img src="filmes/transformers.jpg"       height="200px" width="200px"> </center> <br/> <center> transformers <br/> O inicio <br/> R$ 25,00 </center> <center> <input type="text" name="filme10"> </center></td>
                    </tr>
                </table>
                <center> <input type="submit" value="Enviar para o carrinho"> </center>
            </form>
            <?php
            echo "<center>Dica: para realizar as compras voce deve digitar 'COMPRAR' dentro das caixinhas e clicar em 'Enviar para o carinho'.</center>";
            ?>
        </div>
    </div> <!-- Fim do conteúdo -->
</body>
</html>

<?php
} else {
    echo "";
}
?>