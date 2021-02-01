<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="skin/css/style.css">
<script type="text/javascript" src="script/js/alertaMensagem.js"></script>  
<script type="text/javascript" src="script/js/allMaskInput.js"></script> 
<script src="script/jquery/jquery-3.5.0.min.js"></script>
<head>
<body id="container_login">
<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%">
  <tr>
    <td class="paddinL_login">
      <table border="0" cellspacing="0" cellpadding="0" align="center" id="formLogin" >
        <tr>
          <td style="padding-bottom:7px"><strong class="txtTituloLogin">LOGIN</strong></td>
        </tr>
        <tr>
          <td><input type="tel" maxlength="14" onkeyup="mascara(this, mcpf);" name="cpf" id="cpf" placeholder="CPF" /><div id="AlertCpf"></div></td>
        </tr>
        <tr>
          <td><input type="password" maxlength="6" name="senha" id="senha" placeholder="SENHA" /><div id="AlertSenha"></div></td>
        </tr>
        <tr>
          <td align="left" border="0" cellspacing="0" cellpadding="0"><strong class="btLogin" id="btLogin" onclick="logar()">ENTRAR</strong></td>
          <td align="right"border="0" cellspacing="0" cellpadding="0"><span class="txtRecovery" onclick="statusForm(1)">ESQUECI MINHA SENHA</span></td>
        </tr>
      </table>
      
      <table border="0" cellspacing="0" cellpadding="0" align="center" id="formRecovery" style="display:none">
        <tr>
          <td style="padding-bottom:7px;"><strong class="txtTituloLogin">RECUPERAR SENHA</strong></td>
        </tr>
        <tr>
          <td><input type="tel" maxlength="14" onkeyup="mascara(this, mcpf);" name="cpf" id="cpfRecovery" placeholder="CPF"/></td>
        </tr>
        <tr>
          <td><input type="text" maxlength="100" name="email" id="email" placeholder="E-MAIL" /></td>
        </tr>
        <tr>
          <td align="center"><strong class="btLogin" id="btRecovery">RECUPERAR</strong></td>
          <td align="center"><span class="txtRecovery" onclick="statusForm(2)">VOLTAR PARA O LOGIN</span></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="msgGeral" id="msgPage" style="display:none">
  <tr>
    <td align="center">
      <div id="msgMsg"></div>
    </td>
  </tr>
</table>
<script type="text/javascript" src="script/js/login.js"></script>
</body>