//valida campos(input) form login
function validarFormLogin() {
	let email = login.email.value;
	let senha = login.senha.value;
	if(email == "" || email.indexOf("@") == -1) {
		window.alert("Informe seu endereço de E-Mail valido !!");
		return false;
	}

	if(senha == "") {
		window.alert("Informe sua Senha !!");
		return false;
	}
}

//valida campos(input) form cadastro
function validarFormCadastroLogin() {
	let nome = cadastroLogin.nome.value;
	let email = cadastroLogin.email.value;
	let senha = cadastroLogin.senha.value;

	if(nome == "" || nome.length < 3) {
		window.alert("Informe um nome valido para cadastro !!");
		return false;
	}

	if(email == "" || email.indexOf("@") == -1) {
		window.alert("informe um endereço de E-Mail valido para cadastro !!");
		return false;
	}

	if(senha == "") {
		window.alert("informe uma senha valida para cadastro !!");
		return false;
	}
}