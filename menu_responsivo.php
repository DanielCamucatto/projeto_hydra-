<table border="0" cellspacing="0" cellpadding="0" id="menu_responsivo" style="width:100% !important">
<tr>
    <img src="skin/img/login_rally2020.png" alt="" style="position: absolute;width: 30%;z-index: 2;top: 1%;">
</tr>
  <tr class="tilleMenu">
    <td colspan="3" onClick="mostraMenuResp()" align="right" id="btMenuResp"  style="height:50px !important;"><img src="skin/img/toggle.png"></td>
  </tr>
  <tr class="infoMenu" rowspan="3">
  	
  </tr>


    <tr onclick="navega('profile2','');mostraMenuResp()"  class="infoMenu" align="center" style="background-color: #FFF; height:50% !important;" >
    	<?php echo'<td style="border-bottom: solid 2px;"><div class="fotoPerfil" style="background-image:url('.$_SESSION['foto'].'); width: 20%; height: 80%;"></div>' ?>
        	<!-- <img src="skin/img/Menu_APP_editar.png" /> -->
        </td> 
        <td colspan ="2" style="border-bottom: solid 2px;"><p style="margin: 0 auto; font-size:185%;white-space: normal;">PILOTO</p>
        <p style="margin: 0 auto; font-size:110%;">Editar Perfil</p></td>
    </tr>
    
    <tr class="infoMenu" align="center" style="background-color: #FFF; height:10% !important;" >
        <td style="border-bottom: solid 2px;">
        	<p style="margin: 0 auto; font-size:180%;">Saldo
        </td>
        <td style="border-bottom: solid 2px;">
        	<p style="margin: 0 auto; font-size:191%;">500 pontos
        </td>
        <td style="border-bottom: solid 2px;" onclick="navega('extrato','');mostraMenuResp()">
        	<p style="margin: 0 auto; font-size:130%;">Ver Extrato</p>
        </td>
    </tr>
    
    <tr class="infoMenu" align="center" style="background-color: blue" >
    	<td colspan="3" style="padding: 5px;">
			<img onclick="navega('fale2','');mostraMenuResp()" src="skin/img/icon_resp_fale.png" style="max-width: 40%; max-height: 60%;"/>			
            <img src="skin/img/Menu_APP_traco.png" style=" width:5%; height: 70%; padding: 0px 30px;"/>
        <?php /*?><?php
	if($_SESSION['id_usuario_cargo'] == 7 || $_SESSION['id_usuario_cargo'] == 3 || $_SESSION['id_usuario_cargo'] == 1){
		echo '<a href="http://www.liveclientes1.hospedagemdesites.ws/BAUDUCCO/final/V1/admin/home_admin.php" style="text-decoration:none;"><div class="itenMenu"><img src="skin/img/icon_m7.png" />MTRIX</div></a>';
	}
	else{
		echo '<a href="admin/"><img src="skin/img/btn_admin_resp.png"/></a>';
	}
	?><?php */?>
    		<a href="controle/api/catalogo/"><img src="skin/img/icon_resp_resgate.png"/></a>
        </td>
    </tr>
  
  <tr class="infoMenu">
  	<td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('home',this);mostraMenuResp()">HOME</td>
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('campanha',this);mostraMenuResp()">A CAMPANHA</td>
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('rally_regularidade',this);mostraMenuResp()">RALLY DE REGULARIDADE</td>
  </tr>
  
  <tr class="infoMenu">
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('rally_velocidade',this);mostraMenuResp()">RALLY DE VELOCIDADE</td>
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('mapa_navegador',this);mostraMenuResp()">MAPA DO NAVEGADOR</td>
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('games',this);mostraMenuResp()">GAMES</td>
  </tr>
  
  <tr class="infoMenu">
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('downloads',this);mostraMenuResp()">DOWNLOADS</td>
    <td style="background-color: blue;color: white;font-weight: bold;text-align: center;padding: 5%;margin: 10% 5%;" onclick="navega('logout',this);mostraMenuResp()">SAIR</td>
    <!-- <td onclick="navega('download','');mostraMenuResp()"><img src="skin/img/icon_resp_down.png" width="100%" height="120px" /></td>
    <td onclick="navega('treinamento','');mostraMenuResp()"><img src="skin/img/icon_resp_trein.png" width="100%" height="120px"/></td> -->
  </tr>
  	
</table>

<script>
function mostraMenuResp(){
	if($('.infoMenu').is(':visible')){
		$('.infoMenu').hide();
		$('#btMenuResp').html('<img src="skin/img/toggle.png">');
		
		$('.menuHeader2').css('padding-top','50px');
		
		$('html').css('overflow','auto');
		
	}
	else{
		$('#menuResponsivo2020').css('height','100%');
		$('.infoMenu').fadeIn('fast');
		$('#btMenuResp').html('<img src="skin/img/toggle.png">');
		
		$('html').css('overflow','hidden');
		
		
	}
}
function logout(session) {
	 $('#loadPage').show();
	 setTimeout(function(){
		$(location).attr("href",'logout.php');
	 },500)
            
            
    }
function navega(pagina, element){
	console.log(pagina)
	escondeBanner();
		};
	

function escondeBanner(){
	var altura = $('#bannerTop').height();
	//console.log(altura, 'teste');
	
	if(altura <= 450){
		//$('#bannerTop').removeAttr('class');
		$('.bulletMenu').hide();
	}
	else{
		//$('#bannerTop').addClass('banner'+banner);
		$('.bulletMenu').show();
		// nao faz nada
	}
	setTimeout('escondeBanner()',500);
}

function navega(page,element){
	$('#loadPage').show();
	setTimeout(function() {
		$("#conteudo").load(page+'.php', function(){
			
			$('.menuDesk div').removeClass('ativo');
			$(element).addClass('ativo');
			$('#loadPage').hide();
			
			if(page == 'fale' || page == 'profile' || page == 'mtriz' || page == 'incentivo'){
				$('#banner').hide();
			}
			else{
				$('#banner').show();
			}
			
			//SOBE PAGINA ATÉ O MENU
			var etop = $('#conteudo').offset().top;
			$('html, body').animate({
				scrollTop: (etop-0)
			}, 600);
			
			
		});
	}, 500);
}
</script>

<style>

/* #menu_responsivo{
	width:100% !important;
	top:0;
	left:0;
	position:fixed;
	z-index:3;

}
.infoMenu{
	display:none;
}
.infoMenu td{
	width:33%;
	height:16%;
	cursor:pointer;
}
.infoMenu td img{
	height:60%;
}
.tilleMenu td{
	padding:7px 30px;
	height:1px;
	
}
#btMenuResp img{
    width: 20% !important;
    margin-right: -10%;
}
.pefilUser{
	background-color:#fff;
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
} */

</style>
