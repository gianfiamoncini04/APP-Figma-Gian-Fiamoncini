

<button onclick="location.href='login_figma_html.php'">VOLTAR PARA O LOGIN</button><br><br>

<?php

    include_once('conect.php');

    $name = '';
    $fone = '';
    $email = '';
    $password = '';
    $address = '';
    $cadastrar = '';

    if(!empty($_POST['nome_usuario'])){
        $name = $_POST['nome_usuario'];
        // echo "NOME: $name <br/>";

    }

    if(!empty($_POST['telefone_usuario'])){
        $fone = $_POST['telefone_usuario'];
        // echo "TELEFONE: $fone <br/>";

    }

    if(!empty($_POST['email_usuario'])){
        $email = $_POST['email_usuario'];
        // echo "EMAIL: $email <br/>";

    }

    if(!empty($_POST['senha_usuario'])){
        $password = $_POST['senha_usuario'];
        // echo "SENHA: $password <br/>";

    }

    if(!empty($_POST['endereco_usuario'])){
        $address = $_POST['endereco_usuario'];
        // echo "ENDEREÇO: $address <br/>";

    }

    if(!empty($_POST['cadastrar'])){
        $cadastrar = $_POST['cadastrar'];
        // echo "CADASTRADO: $cadastrar <br/>";
    }
    

    if($cadastrar == 'Cadastrar'){
        $res_inserir = "INSERT INTO usuario(nome_usuario, telefone_usuario, email_usuario, senha_usuario, endereco_usuario) 
        VALUES ('$name', '$fone', '$email', '$password', '$address')";
        $resposta_inserir = mysqli_query($conn,$res_inserir);
    }

    header("Location: inicio_figma_html.php");


?>






    