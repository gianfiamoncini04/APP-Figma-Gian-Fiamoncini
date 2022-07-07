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

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

</head>

<body>

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

    <form action="../htmlephp/pedir.php" method="post">
        <div id="pedido">
            <select name="tamanho" id="tamanho">
                <option>Tamanho</option>
                <option value="pequena">Pequena</option>
                <option value="media">Média</option>
                <option value="grande">Grande</option>
                <option value="gigante">Gigante</option>
            </select>
            <select name="sabor" id="sabor">
                <option>Sabor</option>
                <option value="calabresa">Calabresa</option>
                <option value="vegana">Vegana</option>
                <option value="frango">Frango</option>
                <option value="egg">Egg</option>
            </select>
        </div>
        <div id="btn_div_comfirma">
            <button type="submit" class="btn_comfirma">Comfirmar</button>
        </div>
    </form>


    <!-- /* termino botões e textos da tela sabores */ -->


    <!-- Início do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div class="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><span class="iconify" data-icon="codicon:home" data-width="100" data-height="100"></span></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><span class="iconify" data-icon="fluent:search-12-filled" data-width="100" data-height="100"></span></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><span class="iconify" data-icon="clarity:note-line" data-width="100" data-height="100"></span></a>Pedidos</li>
            <li><a href="perfil_figma_html.php"><span class="iconify" data-icon="carbon:user-avatar" data-width="100" data-height="100"></span></a>Perfil</li>
        </ul>
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <!-- <script src="../javascript/pedido.js"></script>s -->
</body>

</html>