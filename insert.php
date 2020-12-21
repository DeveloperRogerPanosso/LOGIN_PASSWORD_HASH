<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\LoginUsuario;
		use \aplicacao\models\LoginUsuarioDao;

		$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
		if($nome AND $email AND $senha) {
			$insert = new LoginUsuario();
			$insert->setNome($nome);
			$insert->setEmail($email);
			$insert->setSenha($senha);
			$loginUsuarioDao = new LoginUsuarioDao();
			$loginUsuarioDao->insertCadastroLoginUsuario($insert);
		}else {
			header("Location: login.php");
			exit;
		}
?>