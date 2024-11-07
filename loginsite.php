<?PHP 
	session_start();
?>
<?php 
	
	$e_mail = $_POST["e_mail"];
	$senha = $_POST["senha"];
	
	if($e_mail == "João4314@gmail.com" && $senha == "275645"){
		$_SESSION["login"] = "s";
		$_SESSION["e_mail"] = $e_mail;
		$_SESSION["error"] = "";
		$_SESSION["controle_de_entrada"] = "logado";
	}else{
		$_SESSION["error"] = "<center>Usuário ou senha incorretos!</center>";
	}
	header("Location: index.php");
?>

