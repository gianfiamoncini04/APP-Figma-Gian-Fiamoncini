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

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

</head>

<body>

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

    <div class="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><span class="iconify" data-icon="codicon:home" data-width="100" data-height="100"></span></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><span class="iconify" data-icon="fluent:search-28-regular" data-width="100" data-height="100"></span></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><span class="iconify" data-icon="clarity:note-solid" data-width="100" data-height="100"></span></a>Pedidos</li>
            <li><a href="perfil_figma_html.php"><span class="iconify" data-icon="carbon:user-avatar" data-width="100" data-height="100"></span></a>Perfil</li>
        </ul>
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <script src="../javascript/pedido.js"></script>
</body>

</html>