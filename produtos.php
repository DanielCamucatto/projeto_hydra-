<?php
    include 'sub_menu.php'
?>
<div id="container_produtos">
<h1>Produtos Participantes</h1>
<div class="menu_produtos">
    <div class="produto_items itenMenu actionMenu prod1 ativo" onclick="navegaProdutos(this,'prod1')">DUCHAS</div>
    <div class="produto_items  itenMenu actionMenu prod2"onclick="navegaProdutos(this,'prod2')">TORNEIRAS</div>
    <div class="produto_items  itenMenu actionMenu prod3"onclick="navegaProdutos(this,'prod3')">SISTEMA DE DESCARGA</div>
    <div class="produto_items  itenMenu actionMenu prod4"onclick="navegaProdutos(this,'prod4')">ACESSÓRIOS</div>
</div>
    <div class="menu_categoria">
        <div class="ducha active" ><img src="skin/img/produto_safira.png"></div>
        <div class="ducha active"><img src="skin/img/produto_quadratta.png"></div>
        <div class="ducha active"><img src="skin/img/produto_optima.png" /></div>
        <div class="torneira active"><img src="skin/img/produto_polo.png" /></div>
        <div class="torneira active"><img src="skin/img/produto_eletronica.png" /></div>
        <div class="descarga active"><img src="skin/img/produto_blindada.png" /></div>
        <div class="descarga active"><img src="skin/img/produto_gorducha.png" /></div>
        <div class="acessorios active"><img src="skin/img/produto_hit.png" /></div>
        <div class="acessorios active"><img src="skin/img/produto_banhao.png" /></div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.menu_categoria').show();
    
    $('.prod1').click(function(){
        //$('.active').show()
        $('.ducha').fadeOut('slow')
    })
    $('.prod2').click(function(){
        //$('.active').fadeIn('slow')
        $('.torneira').fadeOut('slow')
    })
    $('.prod3').click(function(){
        //$('.active').fadeIn('slow')
        $('.descarga').fadeOut('slow')
    })
    $('.prod4').click(function(){
        $('.active').fadeIn('slow')
        $('.acessorios').fadeOut('slow')
    })
       

})

</script>


