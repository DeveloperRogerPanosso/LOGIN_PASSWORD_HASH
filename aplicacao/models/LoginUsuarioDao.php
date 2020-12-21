<?php
		//define namespace para classe
		namespace aplicacao\models;

		session_start();

		use \aplicacao\models\ConnectMysql;

		require_once "LoginUsuarioDaoInterface.php";

		class LoginUsuarioDao implements LoginUsuarioDaoInterface {
			private function verificaEmailCadastro(LoginUsuario $insert) {
				$query = "SELECT * FROM usuarios WHERE email = :email";
				$query = ConnectMysql::getInstancePdo()->prepare($query);
				$query->bindValue(":email", $insert->getEmail());
				$query->execute();
				if($query->rowCount() === 0) {
					return true;
				}else {
					return false;
				}
			}

			public function insertCadastroLoginUsuario(LoginUsuario $insert) {
				if($this->verificaEmailCadastro($insert) === true) {
					$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome, :email, :senha)";
					$query = ConnectMysql::getInstancePdo()->prepare($query);
					$query->bindValue(":nome", $insert->getNome());
					$query->bindValue(":email", $insert->getEmail());
					$query->bindValue(":senha", $insert->hashSenha());
					$query->execute();
					header("Location: login.php");
					return true;
				}
			}

			public function validarLoginUsuario(LoginUsuario $validarLoginUsuario) {
				$hashSenha = "SELECT senha FROM usuarios WHERE email = :email";
				$hashSenha = ConnectMysql::getInstancePdo()->prepare($hashSenha);
				$hashSenha->bindValue(":email", $validarLoginUsuario->getEmail());
				$hashSenha->execute();
				if($hashSenha->rowCount() > 0) {
					$senhaUsuario = $hashSenha->fetch(\PDO::FETCH_ASSOC);
					$loginUsuario = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
					$loginUsuario = ConnectMysql::getInstancePdo()->prepare($loginUsuario);
					$loginUsuario->bindValue(":email", $validarLoginUsuario->getEmail());
					$loginUsuario->bindValue(":senha", $senhaUsuario["senha"]);
					$loginUsuario->execute();
					if(password_verify($validarLoginUsuario->getSenha(), $senhaUsuario["senha"])) {
						if($loginUsuario->rowCount() > 0) {
							$dados = $loginUsuario->fetch(\PDO::FETCH_ASSOC);
							$_SESSION["loginUsuario"] = $dados["email"];
							header("Location: index.php");
							return true;
						}else {
							header("Location: login.php");
							return false;
						}
					}else {
						header("Location: login.php");
						return false;
					}
				}else {
					header("Location: login.php");
					return false;
				}
			}

			public function updateSenhaLoginUsuario(LoginUsuario $update) {
				$query = "UPDATE usuarios SET senha = :nova_senha WHERE nome = :nome";
				$query = ConnectMysql::getInstancePdo()->prepare($query);
				$query->bindValue(":nova_senha", $update->hashSenha());
				$query->bindValue(":nome", $update->getNome());
				$query->execute();
				header("Location: login.php");
				return true;
			}

			public function deleteSessionLoginUsuario() {
				if(isset($_SESSION["loginUsuario"]) AND !empty($_SESSION["loginUsuario"])) {
					$_SESSION["loginUsuario"] = null;
					unset($_SESSION["loginUsuario"]);
					header("Location: index.php");
					return true;
				}else {
					header("Location: login.php");
					return false;
				}
			}
		}
?>