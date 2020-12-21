<?php
		//define namespace para interface
		namespace aplicacao\models;

		interface LoginUsuarioInterface {
			public function setNome(string $nome) : string;
			public function getNome() : string;
			public function setEmail(string $email) : string;
			public function getEmail() : string;
			public function setSenha(string $senha) : string;
			public function getSenha() : string;
			public function hashSenha() : string;
		}
?>