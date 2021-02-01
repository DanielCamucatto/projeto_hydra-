//MARCARA PADRAO
function mascara(objeto,funcao){
	
	if(funcao == mcpf){
		//cpf
		if(objeto.value.length <= 14){
			//objeto.setAttribute("maxlength","14");
			v_obj=objeto;
			v_fun=mcpf;
			setTimeout("execmascara()",1);
		}
		//cnpj
		else{
			objeto.setAttribute("maxlength","18");
			v_obj=objeto;
			v_fun=mcnpj;
			setTimeout("execmascara()",1)
		}
	}
	else{
		v_obj=objeto;
		v_fun=funcao;
		setTimeout("execmascara()",1)
	}
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value);
}

//FORMATAÇÃO DE TELEFONE OU CELULAR COM 8 OU 9 DIGITOS
function mtel(v){
	v=v.replace(/\D/g,"");            		//Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}

//FORMATAÇÃO DE CNPJ
function mcnpj(v){
	v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}

//FORMATAÇÃO CPF
function mcpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}

//FORMATAÇÃO DATA "DD/MM/AAAA"
function mdate(v){
    //v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
	if (v.match(/^\d{2}$/) !== null) {
		v = v + '/';
	} else if (v.match(/^\d{2}\/\d{2}$/) !== null) {
		v = v + '/';
	}
    return v
}