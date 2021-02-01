function statusForm(status){
	if(status == 1){
		$('#formLogin').hide();
		$('#formRecovery').show();
	}
	else if(status == 2){
		$('#formLogin').show();
		$('#formRecovery').hide();
	}
}

$("#btLogin").click(function(){
	var erro = 1;
	console.log('teste')
	
	if($("#cpf").val() == ''){
		alerta('input','AlertCpf','Erro','Informe o CPF.');
		erro = 1
	}
	else{
		cpf = $("#cpf").val().replace(/\D/g,"");
		if(cpf.length == 11){
			
			var Soma; 
			var Resto;
			var erroGeral = 0;
			Soma = 0;
			if (cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999" ){
				erroGeral = 1;
			}
			
			for (i=1; i<=9; i++){
				Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i); Resto = (Soma * 10) % 11; if ((Resto == 10) || (Resto == 11)) Resto = 0;
			}
			if (Resto != parseInt(cpf.substring(9, 10)) ){
				erroGeral = 1;
			}
			Soma = 0;
			for (i = 1; i <= 10; i++){
				Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
			}
			Resto = (Soma * 10) % 11;
			if ((Resto == 10) || (Resto == 11)){
				Resto = 0;
			}
			if (Resto != parseInt(cpf.substring(10, 11))){
				erroGeral = 1;
			}
			
			//VERIFICA SE CPF É VALIDO
			if(erroGeral == 1){
				alerta('input','AlertCpf','Erro','CPF inválido.');
				$("#cpf").val('');
				erro = 1;
			}
			else{
				alerta('input','AlertCpf','Ok','');
			}
		}
		else{
			alerta('input','AlertCpf','Erro','CPF inválido.');
			$("#cpf").val('');
			erro = 1;
		}
	}
	
	if($("#senha").val() == ''){
		alerta('input','AlertSenha','Erro','Informe a SENHA.');
		erro = 1
	}
	else{
		if($("#senha").val().length != 6){
			alerta('input','AlertSenha','Erro','Informe a SENHA corretamente');
			erro = 1
		}
		else{
			alerta('input','AlertSenha','Ok','');
		}
	}
	
	if(erro == 0){
		//envia
		location.href='./?='+$("#cpf").val()
	}
	
});

function logar() {
	cpf = $("#cpf").val().replace(/\D/g,"");
	
	var senha = $('#senha').val();
	
	if(senha!=''&&cpf!=''){
		$.ajax({
		//async: false, //trava o script ate ter retorno
		url: "index.php",
		type: "POST",
		data:{'logintipo':'normal',
			  'cpf':cpf,
			  'senha':senha},
		success: function(data){
			//console.log(data)
			
			if(data=="LOGIN_NAO_ENCONTRADO"){
				alerta('popup','','Erro','usuário ou senha não encontrados.');
				$('.trocasenha').hide();
				$('.loginsucess').hide();
			}else if(data=="STATUS_DEFEAT"){
				alerta('popup','','Erro','Usuário bloqueado.');
				$('.trocasenha').hide();
				$('.loginsucess').hide();
			}else{
				window.location.href = 'index.php';
			}
		},
		//ERRO GERAL
		error: function(error){
			//erro
		}
	});
	}else{
		$('.loginsucess').css('display','none');
		alerta('popup','','Erro','Algum campo de login está vazio.');
	}
	
	
}
