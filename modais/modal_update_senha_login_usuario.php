<div class="modal fade" id="ModalUpdateSenhaLoginUsuario" role="dialog">
	<div class="modal-dialog shadow-sm modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header bg-light">
				<h5 class="modal-title">Atualizar Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12 order-1">
							<div class="alert alert-info text-center shadow-sm" role="alert">
								Informe seu nome cadastrado para realizar atualização de senha !!
							</div>
							<hr class="my-2">
							<form name="cadastroLogin" method="POST" action="update.php">
								<div class="form-row">
									<div class="col-md-12 order-1 mb-1">
										<div class="form-group">
											<label for="nome" class="form-label">Nome</label>
											<input type="text" name="nome" class="form-control form-control-md" autocomplete="off" autofocus="on" placeholder=" Nome.. " id="nome" required/>
										</div>
									</div>
									<div class="col-md-12 order-3 mb-1">
										<div class="form-group">
											<label for="nova_senha" class="form-label">Nova Senha</label>
											<input type="password" name="nova_senha" class="form-control form-control-md" autocomplete="off"placeholder=" Nova Senha.. " id="nova_senha" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer bg-light">
					<button type="submit" class="btn btn-success btn-md shadow-sm" onclick="return validarFormCadastroLogin()">Atualizar</button>
					<button type="button" class="btn btn-danger btn-md shadow-sm" data-dismiss="modal">Fechar</button>
				</div>
			</form>
		</div>
	</div>
</div>