<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content="Login"/>
	<meta name="author" content="Roger Panosso"/>
	<meta http-equiv="http-equiv" content="text/html"/>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap4.5/css/style.css"/>
</head>
<body>
	<article>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1 mt-5">
						<div class="h1 page-header text-center">Login</div>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12 order-1">
						<div class="alert alert-primary text-center shadow-sm" role="alert">
							Informe seu endereço de e-mail e senha cadastrados realizando o login !!
						</div>
						<a class="text-primary mr-2" href="#" data-toggle="modal" data-target="#ModalCadastroLoginUsuario">Realizar Cadastro</a>
						<a class="text-primary" href="#" data-toggle="modal" data-target="#ModalUpdateSenhaLoginUsuario">Esqueci Minha Senha ?</a>
						<hr class="my-2 bg-light">
						<form name="login" method="POST" action="validar_login_usuario.php">
							<div class="form-row">
								<div class="col-md-12 order-1 mb-1">
									<div class="form-group">
										<label for="email" class="form-label">E-Mail</label>
										<input type="email" name="email" class="form-control form-control-md" autocomplete="off" autofocus placeholder=" exemplo@hotmail.com.. " id="email" required/>
									</div>
								</div>
								<div class="col-md-12 order-2 mb-1">
									<div class="form-group">
										<label for="senha" class="form-label">Senha</label>
										<input type="password" name="senha" class="form-control form-control-md" autocomplete="off" placeholder=" Senha.. " id="senha" required/>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 order-1 mb-1">
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-md shadow-sm" onclick="return validarFormLogin()">Logar</button>
										<button type="reset" class="btn btn-danger btn-md shadow-sm">Resetar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</article>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap4.5/js/script.js"></script>
	<?php require_once "modais/modal_cadastro_login_usuario.php"; ?>
	<?php require_once "modais/modal_update_senha_login_usuario.php"; ?>
</body>
</html>