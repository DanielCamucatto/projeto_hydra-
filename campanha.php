<?php
    include 'sub_menu.php'
?>
<div id="container_campanha">
    <div id="campanha">
    <div id="campanha_bandeira"><img src="skin/img/bandeira_campanha.png" alt=""></div>
        <div id="campanha_items">
            <h2>A CAMPANHA</h2>
            <P>SUAS VENDAS VALEM MAIS, SUA PARTICIPAÇÃO RENDE PREMIOS, SEU FOCO TRAZ RESULTADOS MELHORES</P>
            <P class="bem_vindo">SEJA BEM-VINDO AO RALLY DOS CAMPEÕES 2021 </P>
            <p>PENSAMOS E CRIAMOS CAMPAMNHAS PARA QUE SUA MOTIVAÇÃO CRESÇA E PERMANEÇA DURANTE TODO O PERIODO DA COMPETIÇÃO:</p>
        </div>
    </div>
    <h2 class="camp_text">CONFIRA</h2>
    <div class="campanha_banner" style="cursor: pointer;">
        <img src="skin/img/campanha_banner1.png" onclick="navega('rally_regularidade',this)">
        <img src="skin/img/campanha_banner2.png" onclick="navega('rally_velocidade',this)">
        <img src="skin/img/campanha_banner3.png" onclick="navega('mapa_navegador',this)">
    </div>
    <div class="campanha_banner_resp" style="cursor: pointer;">
        <img src="skin/img/campanha_responsivo_banner1.png" onclick="navega('rally_regularidade',this)">
        <img src="skin/img/campanha_responsivo_banner2.png" onclick="navega('rally_velocidade',this)">
        <img src="skin/img/campanha_responsivo_banner3.png" onclick="navega('mapa_navegador',this)">
    </div>
</div>
<script type="text/javascript" src="script/js/navega.js"></script>
