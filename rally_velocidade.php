<div id="container_velocidade">
    <h1>RALLY DE VELOCIDADE</h1>
    <h2>SELECIONE UMA DAS ETAPAS ABAIXO:</h2>
    <table  align="center" width="50%" border="0" cellspacing="0" cellpadding="0 ">
        <tr>
            <td><img src="skin/img/banner_regularidade1.png" width="80%"></td>
            <td><img src="skin/img/banner_regularidade2.png" width="80%"></td>
            <td><img src="skin/img/banner_regularidade3.png" width="80%"></td>
            <td><img src="skin/img/banner_regularidade4.png" width="80%"></td>
        </tr>
        </table>
    <table align="center" width="50%" border="0" cellspacing="0" cellpadding="0" >
    <td><img src="skin/img/logo_raposa.png" style="margin-top: -10%;position: absolute;margin-left: 2%;"></td>    
    <tr><img src="skin/img/bg_laranja.png" style="margin: 5% auto;display: block;"></tr>
    <td style="position: absolute;margin-left: 8%;margin-top: -11%; background-image:url(skin/img/numero_regularidade.png);background-position: top;width: 8%;height: 12%;background-repeat: no-repeat;background-size: contain;color: white;text-align: center;/*! top: 180%; */font-size: 4rem;font-weight: bold;">3°</td>
    <td style="position: absolute;margin-top:-9%;left: 40%;color: white;font-size: 2rem;font-weight: bold;display: inline;">LUGAR</td>
    <td style="position: absolute;display: inline;margin-top: -10%;width: 5%; margin-left:24%"><img src="skin/img/profile.png" alt=""></td>
    <td style="display: inline;position: absolute;margin-left: 31%;margin-top: -8%;color: white;font-size: 1.5rem;font-weight: bold;">CLAUDIO RICARDO</td>
    </table>
    <td class="btn_ranking" align="right" ><a onclick="navega('ganhadores',this)" style="display: block;margin-left: 66%;font-size: 1.2rem;font-weight: bold;color:var(--main-color);margin-top: -4%; cursor:pointer">VER RANKING</a></td>
    <div class="bateu_velocidade">
            <h2>BATEU, LEVOU</h2>
            <p><strong>1500</strong>PONTOS</p>
        </div>
    <div class="velocidade_box">
        <div class="v_box1">
            <h3>META</h3>
            <div>100%</div>
        </div>
        <div class="pontos_regularidade v_box2">
            <h3 class="italico">REALIZADO</h3>
            <div>107%</div>
        </div>
    </div>
    <div ><img src="skin/img/img_marca_pneu.png"style="margin: 0px auto;display: block;"></div>
    <table id="table_regularidade" align="center" width="60%" border="0" cellspacing="5" cellpadding="15">     
        <tr class="border_table" align="center" style="font-size: 1.5rem;">
            <td style="border-bottom: solid 2px white;"></td>
            <td style="border-bottom: solid 2px white;">META</td>
            <td style="border-bottom: solid 2px white;">REAL</td>
            <td style="border-bottom: solid 2px white;">%ATING</td>
            
        </tr>
        <tr class="border_table" align="center">
            <td style="background-color: rgb(0,152,164);transform: skew(-15deg);width: 20%;color: white;border-bottom:solid 2px white">DESAFIO DE VENDAS</td>
            <td style="border-bottom: solid 2px white;">35.165.095</td>
            <td style="border-bottom: solid 2px white;">51.965.095</td>
            <td style="border-bottom: solid 2px white;">148%</td>
           

        </tr>
        <tr align="center">
            <td style="background-color: rgb(0,152,164);transform: skew(-15deg);width: 20%;color: white;border-bottom:solid 2px white">VOLUME DE PEÇAS</td>
            <td style="border-bottom: solid 2px white;">35.165.095</td>
            <td style="border-bottom: solid 2px white;">51.965.095</td>
            <td style="border-bottom: solid 2px white;">148%</td>

        </tr>
        <tr align="center">
            <td style="background-color: rgb(0,152,164);transform: skew(-15deg);width: 20%;color: white;border-bottom:solid 2px white">HYDRA</td>
            <td style="border-bottom: solid 2px white;">35.165.095</td>
            <td style="border-bottom: solid 2px white;">51.965.095</td>
            <td style="border-bottom: solid 2px white;">148%</td>

        </tr>
    </table>
    <div class="produtos_velocidade"><img src="skin/img/banner_produtos.png" alt=""></div>
    <div class="txt_velocidade">
        <h2>NÓS DETEMINAMOS A META E VOCÊ, COM DETERMINAÇÃO E COMPROMETIMENTO COM A CONQUISTA, SUPERA!</h2>
        <P>EM CADA TRIMESTRE UM DESAFIO DE VENDA SERÁ DADO, E A FORMA DE PREMIAÇÃO SERÁ ALTERADA ENTRE <strong>"BATEU-LEVOU" E RANKING.</strong> AO ALCANÇAR OS MELHORES RESULTADOS, IREMOS TE PREMIAR COM PONTOS QUE PODERÃO SER TROCADOS POR PRÊMIOS DISPONÍVEL EM UM</P>
        <div class="itenMenu" onclick="navega('produtos',this)">CATÁLOGO EXCLUSIVO</div>
    </div>
    <script>
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
</script>