<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\LoginUsuario;
		use \aplicacao\models\LoginUsuarioDao;

		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
		if($email AND $senha) {
			$validarLoginUsuario = new LoginUsuario();
			$validarLoginUsuario->setEmail($email);
			$validarLoginUsuario->setSenha($senha);
			$loginUsuarioDao = new LoginUsuarioDao();
			$loginUsuarioDao->validarLoginUsuario($validarLoginUsuario);
		}else {
			header("Location: login.php");
			exit;
		}
?>