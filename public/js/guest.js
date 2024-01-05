function mostrarSenha(id, eye) 
{
	var inputPass = document.getElementById(id);
	var icon = document.getElementById(eye);
	
	if (inputPass.type == 'password') {
		icon.setAttribute('d', '')
		inputPass.type = 'text';
	} else {
		icon.setAttribute('d', 'M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88')
		inputPass.type = 'password';
	}
}


/*
			 * Para efeito de demonstração, o JavaScript foi
			 * incorporado no arquivo HTML.
			 * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
			 * visite o endereço https://developer.yahoo.com/performance/rules.html#external
			 */
			
// Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
// quando o usuário sair do campo "cep"
$("#cep").blur(function(){
	// Remove tudo o que não é número para fazer a pesquisa
	var cep = this.value.replace(/[^0-9]/, "");
	
	// Validação do CEP; caso o CEP não possua 8 números, então cancela
	// a consulta
	if(cep.length != 8){
		return false;
	}
	
	// A url de pesquisa consiste no endereço do webservice + o cep que
	// o usuário informou + o tipo de retorno desejado (entre "json",
	// "jsonp", "xml", "piped" ou "querty")
	var url = "https://viacep.com.br/ws/"+cep+"/json/";
	
	// Faz a pesquisa do CEP, tratando o retorno com try/catch para que
	// caso ocorra algum erro (o cep pode não existir, por exemplo) a
	// usabilidade não seja afetada, assim o usuário pode continuar//
	// preenchendo os campos normalmente
	$.getJSON(url, function(dadosRetorno){
		try{
			// Preenche os campos de acordo com o retorno da pesquisa
			$("#address").val(dadosRetorno.logradouro);
			$("#district").val(dadosRetorno.bairro);
			$("#city").val(dadosRetorno.localidade);
			$("#state").val(dadosRetorno.uf);
		}catch(ex){}
	});
});