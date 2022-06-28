<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sabores Pizzaria IQ</title>

    <link rel="stylesheet" type="text/css" href="../css/estilo_figma.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../imgs/logoempresa.png">
    
</head>
<body>
    <!-- Início barra entalhe no topo em todas as telas -->

    <div id="entalhe">
        <div id="hora">
            <thead>
                <tr>
                    <th>12:54</th>
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


    <!-- /* Inicio botões e textos da tela sabores */ -->

    <div id="div_sabores">
        <div id="coluna_1_sabores">
            <img class="pizza_calabresa" src="../imgs/calabresa.png" alt="Pizza de Calabresa">
            <p class="titulo_calabresa"> Calabresa </p>
            <p class="subtitulo_calabresa"> Mussarela, calabresa e
                cebola, oregano.</p>

            <img class="pizza_vegana" src="../imgs/vegana.png" alt="Pizza Vegana">
            <p class="titulo_vegana"> Vegana </p>
            <p class="subtitulo_vegana">Champignon, 
                azeitona preta, cebola, 
                oregano e pimentão verde.</p>
            
        </div>
    
        <div id="coluna_2_sabores">
            <img class="pizza_frango" src="../imgs/frango.png" alt="Pizza de Frango c/ Catupiry">
            <p class="titulo_frango"> Frango c/ Catupiry </p>
            <p class="subtitulo_frango">Frango desfiado, cebola, 
                    oregano e catupiry.</p>    

            <img class="pizza_egg" src="../imgs/eggbacon.png" alt="Pizza de Egg & Bacon">
            <p class="titulo_egg"> Egg & Bacon </p>
            <p class="subtitulo_egg">Mussarela, bacon, cebola,
                cream cheese, oregano e 
                ovo de codorna.</p>
        </div>   
    </div>

    <div id="coletores">
        <img id="coluna_1_coletores">
            <img class="retangulo_calabresa" src="../imgs/retangulo_coletor.png">
            <img class="menus_calabresa" src="../imgs/line 1.png" alt="-">
            <img class="line2_calabresa" src="../imgs/line2.png" alt="+">
            <img class="line3_calabresa" src="../imgs/line3.png">
            <img class="zero_calabresa" src="../imgs/0.png" alt="0">

            <img class="retangulo_vegana" src="../imgs/retangulo_coletor.png">
            <img class="menus_vegana" src="../imgs/line 1.png" alt="-">
            <img class="line2_vegana" src="../imgs/line2.png" alt="+">
            <img class="line3_vegana" src="../imgs/line3.png">
            <img class="zero_vegana" src="../imgs/0.png" alt="0">
        </div>
    
        <div id="coluna_2_coletores">
            <img class="retangulo_frango" src="../imgs/retangulo_coletor.png">
            <img class="menus_frango" src="../imgs/line 1.png" alt="-">
            <img class="line2_frango" src="../imgs/line2.png" alt="+">
            <img class="line3_frango" src="../imgs/line3.png">
            <img class="zero_frango" src="../imgs/0.png" alt="0">

            <img class="retangulo_egg" src="../imgs/retangulo_coletor.png">
            <img class="menus_egg" src="../imgs/line 1.png" alt="-">
            <img class="line2_egg" src="../imgs/line2.png" alt="+">
            <img class="line3_egg" src="../imgs/line3.png">
            <img class="zero_egg" src="../imgs/0.png" alt="0">
        </div>
    </div>

    <!-- /* termino botões e textos da tela sabores */ -->


    <!-- Início do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div id="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><img class="logo_menu_inicio" src="../imgs/inicio_logo.png" alt="Início"></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><img class="logo_menu_sabores" src="../imgs/sabores_logo_selecionado.png" alt="Buscar"></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><img class="logo_menu_pedidos" src="../imgs/pedidos_logo.png" alt="Pedidos"></a>Pedidos</li>  
            <li><a href="perfil_figma_html.php"><img class="logo_menu_perfil" src="../imgs/perfil_logo.png" alt="Perfil"></a>Perfil</li>
        </ul>       
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <!-- <script src="../javascript/pedido.js"></script>s -->
</body>
</html>