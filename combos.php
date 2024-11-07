<?PHP 
    session_start();
    error_reporting(0);
    if(isset($_SESSION["controle_de_entrada"]) && $_SESSION["controle_de_entrada"] == "logado") {
?>
<html>
    <head>
        <title> Combos </title>
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
                background-size: cover;
                background-position: center;
                opacity: 0.7;
                z-index: -1;
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
            <center><span class="bold">CINEMAK</span></center>
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
                <table border=0 width="100%" style="text-align: center">
                    <center> <h1 class="bold">COMBOS</h1> </center> 
                    <tr>
                        <td>
                            <center><img src="combos/combo_01.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">X-Salada</span><br/> Batata <br/> Coca <br/> R$ 25,90</center>
                            <br/>
                            <center><input type="text" name="combo01"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_02.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">X-Bacon</span><br/> Batata <br/> Coca <br/> R$ 29,90</center>
                            <br/>
                            <center><input type="text" name="combo02"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_03.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Combo Duplo</span><br/> R$ 35,60</center>
                            <br/>
                            <center><input type="text" name="combo03"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_04.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Combo Mega</span><br/> R$ 37,90</center>
                            <br/>
                            <center><input type="text" name="combo04"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_05.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Combo Mega Doce</span><br/> R$ 22,90</center>
                            <br/>
                            <center><input type="text" name="combo05"></center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center><img src="combos/combo_06.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Combo Kids</span><br/> R$ 21,40</center>
                            <br/>
                            <center><input type="text" name="combo06"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_07.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Combo Happy</span><br/> R$ 27,90</center>
                            <br/>
                            <center><input type="text" name="combo07"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_08.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Pipoca</span><br/> 2 Cocas <br/> R$ 24,90</center>
                            <br/>
                            <center><input type="text" name="combo08"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_09.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">2 Pipocas</span><br/> 2 Cocas <br/> KitKat <br/> R$ 29,90</center>
                            <br/>
                            <center><input type="text" name="combo09"></center>
                        </td>
                        <td>
                            <center><img src="combos/combo_10.jpg" height="200px" width="200px"></center>
                            <br/>
                            <center><span class="bold">Caixa MM's</span><br/> 1 Pipoca <br/> Coca <br/> R$ 30,00</center>
                            <br/>
                            <center><input type="text" name="combo10"></center>
                        </td>
                    </tr>
                </table>
                <center> <input type="submit" value="Enviar para o carrinho"> </center>
            </form>
        </div>
    </body>
</html>

<?php 
    } else {
        echo "";
    }
?>
