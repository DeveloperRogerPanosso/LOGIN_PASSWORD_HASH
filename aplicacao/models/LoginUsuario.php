<?php
		//define namespace para classe
		namespace aplicacao\models;

		require_once "LoginUsuarioInterface.php";

		class LoginUsuario implements LoginUsuarioInterface {
			private string $nome;
			private string $email;
			private string $senha;

			public function setNome(string $nome) : string {
				if(isset($nome) AND !empty($nome) AND is_string($nome)) {
					$nome = filter_var($nome, FILTER_SANITIZE_STRING);
					$this->nome = addslashes(htmlspecialchars(trim(ucwords($nome))));
					return true;
				}else {
					return false;
				}
			}
			public function getNome() : string {
				return $this->nome;
			}

			public function setEmail(string $email) : string {
				if(isset($email) AND !empty($email) AND is_string($email)) {
					$email = filter_var($email, FILTER_SANITIZE_EMAIL);
					$this->email = addslashes(htmlspecialchars(trim($email)));
					return true;
				}else {
					return false;
				}
			}
			public function getEmail() : string {
				return $this->email;
			}

			public function setSenha(string $senha) : string {
				if(isset($senha) AND !empty($senha) AND is_string($senha)) {
					if(strlen($senha) >= 3) {
						$senha = filter_var($senha, FILTER_SANITIZE_STRING);
						$this->senha = addslashes(htmlspecialchars(trim($senha)));
						return true;
					}else {
						return false;
					}
				}else {
					return false;
				}
			}
			public function getSenha() : string {
				return $this->senha;
			}

			public function hashSenha() : string {
				return password_hash($this->getSenha(), PASSWORD_DEFAULT);
			}
		}
?>