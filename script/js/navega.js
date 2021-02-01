function navega(page,element){
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('.menuDesk div').removeClass('ativo');
			$(element).addClass('ativo');
			$('#loadPage').hide();
			//SOBE PAGINA ATÉ O MENU
			var etop = $('#conteudo').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			
		});
	}, 500);
}
function navegaSub22(page,elemento){
 
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('#mySuMenu .actionMenu').removeClass('ativo');
			$('.'+elemento).addClass('ativo')
            $('#loadPage').hide();
            

			//SOBE PAGINA ATÉ O MENU
			var etop = $('#container_sub_menu').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			
		});
	}, 500);
}
function navegaDownload(page,elemento){
 
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('.download_items .actionMenu').removeClass('ativo');
			$('.'+elemento).addClass('ativo')
			$('#loadPage').hide();
			
   
			//SOBE PAGINA ATÉ O MENU
			var etop = $('#container_sub_menu').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			
		});
	}, 500);
   }

function navegaMapa(page,elemento){
 
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('.menu_navegador .actionMenu').removeClass('ativo');
			$('.'+elemento).addClass('ativo')
			$('#loadPage').hide();
			
   
			//SOBE PAGINA ATÉ O MENU
			var etop = $('#container_sub_menu').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			
		});
	}, 500);
}
function navegaProdutos(page, elemento){
 
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('.menu_produtos .actionMenu').removeClass('ativo');
			$('.' + elemento).addClass('ativo')
			$('#loadPage').hide();
			
   
			//SOBE PAGINA ATÉ O MENU
			var etop = $('.menu_produtos').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
		   
			  });
	}, 500);
   }