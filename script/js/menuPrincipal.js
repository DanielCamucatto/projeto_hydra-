function menu(page,element){
	
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			//SOBE PAGINA ATÉ O MENU
			var etop = $('#menuPrincipal').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			$('#menuPrincipal div').removeClass('ativo');
			$('#'+element).addClass('ativo');
			
			if(element == 'm7'){
				$('#m7 img').attr('src','skin/img/bt_liderCena_ativo.png');
			}
			else{
				$('#m7 img').attr('src','skin/img/bt_liderCena.png');
			}
			
			$('#loadPage').hide();
			
			var myWidth = $( window ).width();
			if(myWidth <= 500){
				$('#menuPrincipal').hide()
			}
			
		});
	}, 500);
}