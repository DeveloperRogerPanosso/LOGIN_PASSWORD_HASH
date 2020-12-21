<?php
		//define namespace para interface
		namespace aplicacao\models;

		interface LoginUsuarioDaoInterface {
			public function insertCadastroLoginUsuario(LoginUsuario $insert);
			public function validarLoginUsuario(LoginUsuario $validarLoginUsuario);
			public function deleteSessionLoginUsuario();
			public function updateSenhaLoginUsuario(LoginUsuario $update);
		}
?>