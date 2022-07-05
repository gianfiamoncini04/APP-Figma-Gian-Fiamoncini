<?php

error_reporting(E_ERROR | E_PARSE);
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pizzaria IQ</title>

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


    <!-- Início do fundo da tela login  -->

    <div class="fundologin">
        <img class="logoempresa" src="../imgs/logoempresa.png" alt="Pizzaria IQ">
        <h1 class="marca_titulo">Pizzaria IQ</h1>
    </div>


    <!-- Término do fundo da tela login -->

    <?php
    if ($_SESSION['login_erro']) :
    ?>
        <div id="cadastro_existe">
            <p>Email ou senha incorretos!</p>
            <p>Tente novamente</p>
        </div>
    <?php
    endif;
    unset($_SESSION['login_erro']);
    ?>

    <!-- Início botões e textos da tela login -->


    <div class="text_1_login"> Sua pizza está quase pronta!</div>

    <div id="fundo_login_login">


        <form action="logar.php" method="post">
            <div class="cadastro_body_login">
                <div id="email_struct_login">
                    <img src="../imgs/icon_email.png" class="icon_email">
                    <input type="text" name="email_usuario_login" id="email_usuario_login" placeholder="Email:"><br><br>
                    <small id="textEmail_login"></small>
                </div>
                <div id="senha_struct_login">
                    <img src="../imgs/icon_senha.png" class="icon_senha">
                    <input type="text" name="senha_usuario_login" id="senha_usuario_login" placeholder="Senha:"><br><br>
                    <small id="textSenha_login"></small>
                </div>
            </div>

            <div id="botao_register_login">
                <button id="register_login" type="submit" name="logar" value="Logar">Entrar</button>
            </div>

        </form>

        <div id="ou_login">Ou, se não possui uma conta:</div>

        <div id="botao_cadastro_div">
            <button id="btn_cadastro" onclick="location.href='cadastro_figma_html.php';">Cadastrar</button>
        </div>

    </div>

    <?php
    if ($_SESSION['login_efetuado']) :
    ?>
        <div id="resultado_login">
            <p class="login_text1">LOGIN EFETUADO COM SUCESSO!</p>
            <a href="inicio_figma_html.php">
                <p class="login_text2">FAÇA SEU PRIMEIRO PEDIDO</p>
            </a>
        </div>
    <?php
    endif;
    unset($_SESSION['login_efetuado']);
    ?>


    <!-- Término botões e textos da tela login -->

    <script src="../js/login_figma.js"></script>
</body>

</html>