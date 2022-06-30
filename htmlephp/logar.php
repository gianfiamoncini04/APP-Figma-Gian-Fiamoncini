<?php

    include_once('conect.php');

    
    $email = '';
    $password = '';
    $logar = '';


    if(!empty($_POST['email_usuario_login'])){
        $email = $_POST['email_usuario_login'];
        // echo "EMAIL: $email <br/>";

    }

    if(!empty($_POST['senha_usuario_login'])){
        $password = $_POST['senha_usuario_login'];
        // echo "SENHA: $password <br/>";

    }


    if(!empty($_POST['logar'])){
        $logar = $_POST['logar'];
        // echo "CADASTRADO: $logar <br/>";
    }
    


    if($logar == 'Logar'){
        $res_inserir = "SELECT email_usuario, senha_usuario FROM usuario WHERE email_usuario= $email AND senha_usuario= $password ";
        $resposta_inserir = mysqli_query($conn,$res_inserir);
        echo "Logado <br/><br/>";
    }

    header("Location: inicio_figma_html.php");
