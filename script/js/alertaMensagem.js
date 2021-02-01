
function fechaElement(idElement){
	$("#"+idElement).css('display','none');
}


function alerta(tipo,idElement,classe,mensagem){
	
	if(tipo == 'popup'){
		var fechaPop = '<img src="skin/img/bt_close_mensagem.png" onclick="fechaElement(\'msgPage\');" />';
		//VERMELHO
		if(classe == 'Erro'){
			fechaPop = '<img src="skin/img/bt_popupErro.png" onclick="fechaElement(\'msgPage\');" />';
		}
		
		//AMARELO
		else if(classe == 'Alert'){
			fechaPop = '<img src="skin/img/bt_popupAlert.png" onclick="fechaElement(\'msgPage\');" />';
		}
		
		//VERDE
		else if(classe == 'Ok'){
			fechaPop = '<img src="skin/img/bt_popupOk.png" onclick="fechaElement(\'msgPage\');" />';
		}
		
		//ADICIONA CLASSE CSS DO ERRO
		$("#msgPage").show();
		$("#msgMsg").removeAttr("class");
		$("#msgMsg").addClass('msgMsg'+classe);
		$("#msgMsg").html(fechaPop+'<p>'+mensagem+'</p>');
		
		//POSSIBILITA FECHAR MENSAGEM COM O TECLADO
		$("#msgMsg").attr('tabindex',-1).focus();
	}
	else if(tipo == 'input'){
		
		//ADICIONA CLASSE CSS DO ERRO
		$("#"+idElement).removeAttr("class");
		$("#"+idElement).addClass('input'+classe);
		$("#"+idElement).html('<div></div>'+mensagem);
	}
}

//FECHA POPUP COM O TECLADO
$("#msgMsg").bind("keypress", function (e) {
	var keyCode = e.keyCode ? e.keyCode : e.which;
	if (keyCode == 13) {
		$("#msgMsg").removeAttr("tabindex");
		fechaElement('msgPage');
	}
});