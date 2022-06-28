

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANCO</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body> 
    
    <h1>CADASTRO</h1><br><br>
    <form action="proc.php" method="post">
        <label for="id_usuario">CÓDIGO:</label>
        <input type="number" name="id_usuario" id="id_usuario" placeholder="Digite seu código:"><br><br>
        <label for="nome_usuario">NOME:</label>
        <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Digite seu nome:"><br><br>
        <label for="telefone_usuario">TELEFONE:</label>
        <input type="number" name="telefone_usuario" id="telefone_usuario" placeholder="Digite seu telefone:"><br><br>
        <label for="email_usuario">EMAIL:</label>
        <input type="text" name="email_usuario" id="email_usuario" placeholder="Digite seu email:"><br><br>
        <label for="senha_usuario">SENHA:</label>
        <input type="text" name="senha_usuario" id="senha_usuario" placeholder="Digite sua senha:"><br><br>
        <label for="endereco_usuario">ENDEREÇO:</label>
        <input type="text" name="endereco_usuario" id="endereco_usuario" placeholder="Digite seu endereço:"><br><br>

        <button type="submit" name="cadastrar" value="Cadastrar">CADASTRAR</button>
        <button type="submit" name="delete" value="Delete">DELETAR</button>
        <button type="submit" name="update" value="Update">ATUALIZAR</button>
        <button type="submit" name="list" value="List">LISTAR</button>

    </form>
</body>
</html>


