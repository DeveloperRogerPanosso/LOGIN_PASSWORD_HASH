<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\LoginUsuario;
		use \aplicacao\models\LoginUsuarioDao;

		$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
		$nova_senha = filter_input(INPUT_POST, "nova_senha", FILTER_SANITIZE_STRING);
		if($nome AND $nova_senha) {
			$update = new LoginUsuario();
			$update->setNome($nome);
			$update->setSenha($nova_senha);
			$loginUsuarioDao = new LoginUsuarioDao();
			$loginUsuarioDao->updateSenhaLoginUsuario($update);
		}else {
			header("Location: login.php");
			exit;
		}
?>