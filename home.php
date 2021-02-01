<?php
include 'profile.php'
?>
<div id="container_home">
  <div id="velocimetro">
        <img src="skin/img/bg_velocimentro_home.png" style="width: 100%;">
        <h1>CONFIRA SUA PERFORMACE NA COMPETIÇÃO</h1>
        <div id="container_bloco"><!--comeca teste-->
          <div id="v_bloco_1"><!--comeca bloco 1-->
            <h3>RALLY DE REGULARIDADE</h3>
            <div class="v_item1">
                <div>1° POSIÇÃO</div>
                <div>105 PTS %</div>
            </div>    
            <div class="v_item2">
                <div class="paralelograma_branco">METAS E REALIZADO </div>
                <div class="paralelograma_branco">INDICADORES</div>
            </div>    
          </div><!--termina bloco 1-->
          <div id="v_bloco_2"><!--comeca bloco 2-->
            <h3>RALLY DE VELOCIDADE</h3>
              <div class="v_item3">
                <div>META <span>100%</span></div>
              <div>REALIZADO <span>110%</span></div>
          </div>    
            <div class="v_item4">
              <div class="paralelograma_branco">METAS E REALIZADO </div>
              <div class="paralelograma_branco">INDICADORES</div>
            </div>
          </div><!--termina bloco 2-->

        </div><!--termina teste-->

        <div class="border">
        <div id="mapa_nav">
            <h3 class="italico">MAPA DO NAVEGADOR</h3>
            <div class="map_items1">
                <p>VOCE CONCLUIU</p>
                <div>3 treinamentos</div>
            </div>
            <div class="map_items2">
                <P>FALTAM</P>
                <div>2 treinamentos</div>
            </div>
        </div>
        <button id="btn_velocimentro" onclick="navega('ganhadores',this)">VER PONTOS</button>
        </div>
  </div>
        <div id="home_personalizacao" style="cursor: pointer;">
                <h2>CLIQUE AQUI <span>E FAÇA SUA PERSONALIZAÇÃO</span></h2>
                <img src="skin/img/carro_personalizacao.png" onclick="navega('personalize',this)">
        </div>

        <div id="container_catalogo">
            <div class="home_catalogo_item">
                <div class="paralelograma3"></div>
                <p>Depois de milhares de Km percorridos, vamos te levar às premiações que você merece em um catálogo de produtos exclusivo </p>
            </div>
             <img src="skin/img/banner_produtos.png" style="width: 60%;">
            <button align='center'onclick="navega('resgate',this)">RESGATE AQUI</button>
        </div>
        <div class="home_mural" align="center">
	<h1 class="txtVermelho txtItalico">Mural</h1>
    <div class="divTab">
    	<div class="divCell">
        	<table border="0" cellspacing="0" cellpadding="5" width="100%">
              <tr>
                <td class="txtVermelho"><strong>Central de Relacionamento</strong></td>
                <td align="right" class="txtVermelho"><img  class="home_calendario" src="skin/img/logo_calendario_home.png" alt=""><?=date("d/m/Y H:i:s")?></td>
              </tr>
              <tr>
                <td colspan="2"><img src="skin/img/banner_home_mural1.png" /></td>
              </tr>
              <tr>
                <td align="center" class="txtVermelho home_like"><img src="skin/img/logo_curtida.png" class="click" style="cursor: pointer;">CURTIR<span id="totalLike"> 0</span></td>
                </tr>
            </table>
           
        </div>
        <div class="divCell noBorder" style="width:1px; padding:30px; border:none;"></div>
        <div class="divCell">
        	<table border="0" cellspacing="0" cellpadding="5" width="100%">
              <tr>
                <td class="txtVermelho"><strong>Central de Relacionamento</strong></td>
                <td align="right" class="txtVermelho"><img  class="home_calendario" src="skin/img/logo_calendario_home.png" alt=""><?=date("d/m/Y H:i:s")?></td>
              </tr>
              <tr>
                <td colspan="2"><img src="skin/img/banner_home_mural2.png" /></td>
              </tr>
              <tr>
                <td align="center" class="txtVermelho home_like"><img src="skin/img/logo_curtida.png" class="click2" style="cursor: pointer;">CURTIR<span id="totalLike2"> 0</span></td>
                </tr>
              
            </table>
        </div>
    </div>
</div>
    </div> 
</div>
</div>
<!-- <script type="text/javascript" src="/script/js/curtir.js"></script> -->

<script>


var count = 0;
$(".click").click(function() {
  count++;
  $(".click").css('opacity', "0.7");
  $("#totalLike").html("|" + count + " CURTIDAS");
  $(this).off(event);
  if(count === 1){
    $(this).off(count == 0);
  }
});


var count2 = 0;
$(".click2").click(function() {
  count2++;
  $(".click2").css('opacity', "0.7");
  $("#totalLike2").html("|" + count2 + " CURTIDAS");
  // $(this).off(event);
  
  if(count2 === 1){
    $(this).off(count2 == 0);
  }
});
// $(document).ready(function(){
//   var botao = $(".click");

//   //ação de clicar no botão +1
//   botao.on("click", function(){
//        var numero = 1;
//        $.ajax({
//              url: "processa.php",
//              data: {valor: numero},
//              dataType: "HTML",
//              method: "GET"
//        }).done(function(retorno){
//                 alert(retorno);   
//        }).fail(function(retorno){
//              alert(retorno);
//        });

//   }); 
// });

</script>