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

    <div id="subentalhe">
        <p class="subtitulo">Pizzaria IQ</p>
    </div>

    <!-- Início botões e textos da tela login -->

    <div class="titulo_cadastro"> CADASTRO</div>

    <div id="fundo_cadastro">

        <form action="cadastrar.php" method="post">
            <div class="cadastro_body">
                <div id="name_struct">
                    <img src="../imgs/icon_name.png" class="icon_name">
                    <input type="text" name="nome_usuario" id="nome_usuario" placeholder="NOME:"><br><br>
                </div>
                <div id="fone_struct">
                    <img src="../imgs/icon_fone.png" class="icon_fone">
                    <input type="text" name="telefone_usuario" id="telefone_usuario" placeholder="TELEFONE:"><br><br>
                    <small id="textTelefone"></small>
                </div>
                <div id="email_struct">
                    <img src="../imgs/icon_email.png" class="icon_email">
                    <input type="text" name="email_usuario" id="email_usuario" placeholder="EMAIL:"><br><br>
                    <small id="textEmail"></small>
                </div>
                <div id="senha_struct">
                    <img src="../imgs/icon_senha.png" class="icon_senha">
                    <input type="text" name="senha_usuario" id="senha_usuario" placeholder="SENHA:"><br><br>
                    <small id="textSenha"></small>
                </div>
                <div id="endereço_struct">
                    <img src="../imgs/icon_endereço.png" class="icon_endereço">
                    <input type="text" name="endereco_usuario" id="endereco_usuario" placeholder="ENDEREÇO:"><br><br>
                </div>
            </div>

            <div id="botao_register">
                <button id="register" type="submit" name="cadastrar" value="Cadastrar">CADASTRAR</button>
            </div>

        </form>
        <div>
            <button id="nadaver" onclick="location.href='login_figma_html.php'">VOLTAR AO LOGIN</button><br><br>
        </div>
    </div>



    <div class="help">Precisa de ajuda?</div>

    <!-- Término botões e textos da tela login -->

    <script src="../js/cadastro_figma.js"></script>
</body>

</html>