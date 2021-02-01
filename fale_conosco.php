<?php
include 'sub_menu.php'

?>
<div class="pageFale">
    <h1 class="txtVermelho txtItalico" style="text-align: center; font-size: 250%;">Fale Conosco</h1>
    <h2>Assunto</h2>
    <select id="assunto_fale" class="txtDestaque caixaSelec" style="border: none;">
        <option value="">SELECIONE O ASSUNTO</option>
        </select>
    <br/>
    <br/>
    <h2>Mensagem</h2>
    <textarea id="mensagem_fale" class="txtDestaque caixaMSG" style="background-color:#e6e7e8 ;"></textarea>
    <div class="botoes">
      <div class="btFale">
        <div class="botaoFale btn_fale1"><img src="skin/img/logo_btn_enviar.png" alt="">ENVIAR</div>
        <div class="botaoFale btn_fale2"><img src="skin/img/logo_btn_historico.png" alt="">HISTÓRICO DE INTERAÇÃO</div>
      </div>
    </div>
    
    <!-- <div class="botoes">
    	<div class="btFale" onclick="enviaMensagem()">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="botaoFale txtDestaque btn_fale1"><img src="skin/img/logo_btn_enviar.png" alt=""> ENVIAR</td>
              </tr>
            </table>
        </div><br/>
        
        <div class="btFale" onclick="$('#showInteracao').fadeIn('fast')">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="botaoFale txtDestaque btn_fale2"><img src="skin/img/logo_btn_historico.png" alt="">HISTÓRICO DE INTERAÇÕES</td>
              </tr>
            </table>
        </div>
        
    </div> -->
        
    <!-- <div id="showInteracao" style="margin-top:50px; background:#ba0401;display:none">
    	<table width="100%" border="1" cellspacing="0" cellpadding="5">
          <tr style="color: #fff;" class="tdBottonBold">
            <td align="center"><strong>ASSUNTO</strong></td>
            <td align="center"><strong>DATA ABERTURA</strong></td>
            <td align="center"><strong>STATUS</strong></td>
            <td align="center"><strong>TOTAL INTERAÇÃO</strong></td>
            <td></td>
          </tr>
        </table>
    </div> -->
</div>
  <div id="central_relacionamento" style="margin-top: 20%;">
    <img src="skin/img/logo_fale.png" alt="">
      <div class="relacionamento_items">
        <p>OU LIGUE PARA NOSSA CENTRAL DE RELACIONAMENTO:</p>
        <div class="number_fale">0800 770 1234</div>
      </div>
  </div>