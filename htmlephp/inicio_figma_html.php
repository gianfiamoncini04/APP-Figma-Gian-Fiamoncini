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

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

</head>

<body>

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

    <div class="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><span class="iconify" data-icon="bxs:home" data-width="100" data-height="100"></span></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><span class="iconify" data-icon="fluent:search-28-regular" data-width="100" data-height="100"></span></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><span class="iconify" data-icon="clarity:note-line" data-width="100" data-height="100"></span></a>Pedidos</li>
            <li><a href="perfil_figma_html.php"><span class="iconify" data-icon="carbon:user-avatar" data-width="100" data-height="100"></span></a>Perfil</li>
        </ul>
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->


    <script src="../javascript/pedido.js"></script>

</body>

</html>