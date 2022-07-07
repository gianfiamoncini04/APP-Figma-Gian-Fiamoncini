<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil Pizzaria IQ</title>

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

    <!-- /* Inicio botões e textos da tela perfil */ -->

    <div id="perfil">
        <img class="perfil_logo" src="../imgs/perfil.png" alt="Perfil">
        <p class="perfil_texto">Gian Fiamoncini</p>
        <img class="perfil_edit" src="../imgs/edit.png" alt="Editar">
    </div>


    <div id="colunas">

        <div id="chat">
            <img class="chat_logo" src="../imgs/chat.png" alt="Chat">
            <p class="chat_texto">Minhas Conversas</p>
        </div>
        <div id="sino">
            <img class="sino_logo" src="../imgs/notificacoes.png" alt="Notificações">
            <p class="sino_texto">Notificação</p>
        </div>
        <div id="carteira">
            <img class="carteira_logo" src="../imgs/carteira.png" alt="Carteira">
            <p class="carteira_texto">Carteira</p>
        </div>
        <div id="cupom">
            <img class="cupom_logo" src="../imgs/cupom.png" alt="Cupom">
            <p class="cupom_texto">Cupons</p>
        </div>
        <div id="fidelidade">
            <img class="fidelidade_logo" src="../imgs/fidelidade.png" alt="Estrela">
            <p class="fidelidade_texto">Fidelidade</p>
        </div>
        <div id="favoritos">
            <img class="favoritos_logo" src="../imgs/favoritos.png" alt="Coração">
            <p class="favoritos_texto">Favoritos</p>
        </div>

    </div>

    <a href="login_figma_html.php">
        <div id="sair">
            <button class="botao_sair">
                <div class="text_sair">Sair</div>
            </button>
        </div>
    </a>

    <!-- /* termino botões e textos da tela perfil */ -->

    <!-- Início do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <div class="cabecalho">
        <ul class="menu">
            <li><a href="inicio_figma_html.php"><span class="iconify" data-icon="codicon:home" data-width="100" data-height="100"></span></a>Inicio</li>
            <li><a href="sabores_figma_html.php"><span class="iconify" data-icon="fluent:search-28-regular" data-width="100" data-height="100"></span></a>Sabores</li>
            <li><a href="pedidos_figma_html.php"><span class="iconify" data-icon="clarity:note-line" data-width="100" data-height="100"></span></a>Pedidos</li>
            <li><a href="perfil_figma_html.php"><span class="iconify" data-icon="carbon:user-avatar-filled" data-width="100" data-height="100"></span></a>Perfil</li>
        </ul>
    </div>

    <!-- Término do entalhe menu no fundo de todas as telas (inicio,sabores,pedidos,perfil) -->

    <!-- <script src="../javascript/pedido.js"></script> -->
</body>

</html>