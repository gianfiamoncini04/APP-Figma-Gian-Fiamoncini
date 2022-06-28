<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Início Pizzaria IQ</title>

    <link rel="stylesheet" type="text/css" href="../css/estilo_figma.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../imgs/logoempresa.png">
    
</head>
<body>
    <!-- Início barra entalhe no topo em todas as telas -->

    <div id="entalhe">
        <div id="hora">
            <thead>
                <tr>
                    <th>12:53</th>
                </tr>  
            </thead>
        </div>
        <div class="iconsignal">
            <img src="../imgs/signal.png" alt="Sinal" width="70px" height="70px">
        </div>
        <div class="iconwifi">
            <img src="../imgs/wifi.png" alt="Wifi" width="60px" height="60px">
        </div>
        <div class="iconbattery">
            <img src="../imgs/battery.png" alt="Bateria" width="70px" height="70px">
        </div>
    </div>

    <!-- Término da barra entalhe no topo em todas as telas -->

    <!-- Início  sub entalhe no topo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div id="subentalhe">
        <p class="subtitulo">Pizzaria IQ</p>
    </div>

    <!-- Término  sub entalhe no topo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <!--  Inicio botões e textos da tela inicio  -->


    <div id="linhas_inicio">
        <div id="linha_1_inicio">
            <p class="texto_pequena">Pizza Pequena R$ 35,00 (Dois Sabores)</p>
            <img class="pizza_pequena" src="../imgs/pizza_pequena.png" alt="Pizza Pequena">
            <button class="botao_pequena"> <a href="../html/sabores_figma.html" style="text-decoration: wavy; color: white;">SELECIONAR</a></button>
        </div>
    
        <div id="linha_2_inicio">
            <p class="texto_media">Pizza Média R$ 45,00 (Três Sabores)</p>
            <img class="pizza_media" src="../imgs/pizza_media.png" alt="Pizza Média">
            <button class="botao_media"> <a href="../html/sabores_figma.html" style="text-decoration: wavy; color: white;">SELECIONAR</a></button>
        </div>
    
        <div id="linha_3_inicio">
            <p class="texto_grande">Pizza Grande R$ 60,00 (Quatro Sabores)</p>
            <img class="pizza_grande" src="../imgs/pizza_grande.png" alt="Pizza Grande">
            <button class="botao_grande"> <a href="../html/sabores_figma.html" style="text-decoration: wavy; color: white;">SELECIONAR</a></button>
        </div>
        
        <div id="linha_4_inicio">
            <p class="texto_gigante">Pizza Gigante R$ 75,00 (Quatro Sabores)</p>
            <img class="pizza_gigante" src="../imgs/pizza_gigante.png" alt="Pizza Gigante">
            <button class="botao_gigante"> <a href="../html/sabores_figma.html" style="text-decoration: wavy; color: white;">SELECIONAR</a></button>
        </div>
    </div>

    <!--  Termino botões e textos da tela inicio  -->
    
    <!-- Início do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div id="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><img class="logo_menu_inicio" src="../imgs/inicio_logo_selecionado.png" alt="Início"></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><img class="logo_menu_sabores" src="../imgs/sabores_logo.png" alt="Buscar"></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><img class="logo_menu_pedidos" src="../imgs/pedidos_logo.png" alt="Pedidos"></a>Pedidos</li>  
            <li><a href="perfil_figma_html.php"><img class="logo_menu_perfil" src="../imgs/perfil_logo.png" alt="Perfil"></a>Perfil</li>
        </ul>       
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->


    <script src="../javascript/pedido.js"></script>

</body>
</html>