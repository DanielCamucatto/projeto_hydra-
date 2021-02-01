<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'cabecalho.php';?>
</head>

<body>
  <?php
    include 'menu_principal.php';
      $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
      $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
      $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
      $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      $webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
        if( $iPod || $iPhone || $iPad || $Android){
          include 'menu_responsivo.php';
	      
}
    include 'banner.php';
    include 'btn_resgate.php';
  ?>
  
  <div id="conteudo">
    <?php
      include 'home.php';
    ?>
  </div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="msgGeral" id="pageVideo" style="display:none">
    <tr>
      <td align="center">
        <div style="display:inline-block; margin:0 auto; width:100%; max-height:725px;">
          <img id="closedBt" src="skin/img/bt_popupOk.png" width="30" style="cursor:pointer; float: right; position: absolute; margin:8px" onclick="$('#pageVideo').hide();$('#iframeVideo').attr('src','')"/>
        <iframe id="iframeVideo" width="910" height="625" style="border: solid 5px #fff; border-radius: 10px;"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </td>
  </tr>
  </table>
  <?php
    include 'rodape.php'
  ?>
</body>
</html>
