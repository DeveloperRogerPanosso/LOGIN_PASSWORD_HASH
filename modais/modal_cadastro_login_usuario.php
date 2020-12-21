<div class="modal fade" id="ModalCadastroLoginUsuario" role="dialog">
	<div class="modal-dialog shadow-sm modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h5 class="modal-title">Realizar Cadastro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12 order-1">
							<div class="alert alert-info text-center shadow-sm" role="alert">
								Preencha os campos abaixo realizando cadastro para login !!
							</div>
							<hr class="my-2">
							<form name="cadastroLogin" method="POST" action="insert.php">
								<div class="form-row">
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label for="nome" class="form-label">Nome</label>
											<input type="text" name="nome" class="form-control form-control-md" autocomplete="off" autofocus="on" placeholder=" Nome.. " id="nome" required/>
										</div>
									</div>
									<div class="col-md-12 order-2 mb-1">
										<div class="form-group">
											<label for="email" class="form-label">E-Mail</label>
											<input type="email" name="email" class="form-control form-control-md" autocomplete="off"placeholder=" exemplo@hotmail.com.. " id="email" required/>
										</div>
									</div>
									<div class="col-md-12 order-3 mb-1">
										<div class="form-group">
											<label for="senha" class="form-label">Senha</label>
											<input type="password" name="senha" class="form-control form-control-md" autocomplete="off"placeholder=" Senha.. " id="senha" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-success btn-md shadow-sm" onclick="return validarFormCadastroLogin()">Cadastrar</button>
					<button type="button" class="btn btn-danger btn-md shadow-sm" data-dismiss="modal">Fechar</button>
				</div>
			</form>
		</div>
	</div>
</div>