<div class="pageDownload">
<h1>Downloads</h1>
<div class="menu_downloads">
    <div class="download_items">
        <div class="d_item itenMenu actionMenu sub1 " onclick="navegaDownload(this,'sub1')">COMUNICADOS</div>
        <div class="d_item itenMenu actionMenu sub2 " onclick="navegaDownload(this,'sub2')">IMAGENS</div>
        <div class="d_item itenMenu actionMenu sub3 " onclick="navegaDownload(this,'sub3')">INFORMATIVOS</div>
        <div class="d_item itenMenu actionMenu sub4 " onclick="navegaDownload(this,'sub4')" style="border:none">MATERIAIS</div>
    </div>
</div>
    <div class="DownloadCategoria">
        <div class='1' ><img src="skin/img/safira.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;">SAFIRA <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='1'><img src="skin/img/quadratta.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;">QUADRATTA PLUS <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='2'><img src="skin/img/optma.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;">OPTIMA MUSIC <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='2'><img src="skin/img/polo.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;white-space: nowrap;">POLO PLUS <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='2'><img src="skin/img/eletronica.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;white-space: nowrap;display:inline-block">FIT ELETRONICA <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='3'><img src="skin/img/blindada.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;white-space: nowrap;">FIT BLINDADA <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='4'><img src="skin/img/gorducha.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;display:inline-block">GORDUCHA <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='4'><img src="skin/img/hit.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;">HIT<img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        <div class='4'><img src="skin/img/banhao.png" class="categoria_items"><a href="download/index.php"style="color: white;text-decoration: none;font-size: 14px;">BANHÃO <img src="skin/img/logo_download.png" style="background-color: white;display: block;margin: 10px auto;"></div>
        
    </div>
</div>
<script>
if(tipo == 'COMUNICADOS'){
	$('.1').show();
	$('.2').hide();
	$('.3').hide();
	$('.4').hide();
}
else if(tipo == 'IMAGENS'){
	$('.1').hide();
	$('.2').show();
	$('.3').hide();
	$('.4').hide();
}
else if(tipo == 'INFORMATIVOS'){
	$('.1').hide();
	$('.2').hide();
	$('.3').show();
	$('.4').hide();
}
else if(tipo == 'MATERIAIS'){
	$('.1').hide();
	$('.2').hide();
	$('.3').hide();
	$('.4').show();
}
$(document).ready(function() {
    $('.menu_downloads').show();
    
    $('.sub1').click(function(){
        $('.1').fadeOut('slow')
        
    })
    $('.sub2').click(function(){
        $('.2 ').fadeOut('slow')
        $('DownloadCategoria').show()
    })
    $('.sub3').click(function(){
        $('.3 ').fadeOut('slow')
        $('DownloadCategoria').show()
    })
    $('.sub4').click(function(){
        $('.4 ').fadeOut('slow')
        $('DownloadCategoria').show()
    })
       

})

</script>