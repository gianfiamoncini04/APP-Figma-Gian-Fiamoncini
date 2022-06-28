<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedidos Pizzaria IQ</title>

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
                    <th>12:55</th>
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

    <!-- /* Inicio botões e textos da tela pedidos */ -->


    <div id="barra1">
        <p class="texto1_pedido">VOCÊ NÃO PEDIU NADA AINDA!</p>
    </div>

    <div id="barra2">
        <img class="fundo_pedidos" src="../imgs/fundo_pedidos.png">
    </div>

    <a href="inicio_figma_html.php">
        <div id="barra3">
            <p class="texto2_pedido">PARA FAZER UM PEDIDO</p>
            <button class="botao_pedidos">CLIQUE AQUI</button>
        </div>
    </a>

    <!-- /* termino botões e textos da tela pedidos */ -->

    <!-- Início do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div id="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><img class="logo_menu_inicio" src="../imgs/inicio_logo.png" alt="Início"></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><img class="logo_menu_sabores" src="../imgs/sabores_logo.png" alt="Buscar"></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><img class="logo_menu_pedidos" src="../imgs/pedidos_logo_selecionado.png" alt="Pedidos"></a>Pedidos</li>  
            <li><a href="perfil_figma_html.php"><img class="logo_menu_perfil" src="../imgs/perfil_logo.png" alt="Perfil"></a>Perfil</li>
        </ul>       
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <script src="../javascript/pedido.js"></script>
</body>
</html>