<?php
		session_start();

		if(isset($_SESSION["loginUsuario"]) AND !empty($_SESSION["loginUsuario"])) {
			echo "Olá seja bem vindo usuário: " . $_SESSION["loginUsuario"] . "<br>\n";
		}else {
			header("Location: login.php");
			exit;
		}
?>
<a href="delete_session_login_usuario.php">Encerrar Sessão</a>