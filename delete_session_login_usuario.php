<?php
		declare(strict_types=1);

		require_once "autoload.php";

		use \aplicacao\models\LoginUsuarioDao;

		$deleteSessionLoginUsuario = new LoginUsuarioDao();
		$deleteSessionLoginUsuario->deleteSessionLoginUsuario();
?>