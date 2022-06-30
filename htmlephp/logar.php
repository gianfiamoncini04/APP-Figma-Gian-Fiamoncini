<?php

include_once('conect.php');

$email = $_REQUEST["email_usuario_login"];
$senha = $_REQUEST["senha_usuario_login"];

$sql = "select * from usuario where email_usuario= :email and senha_usuario= :senha";

$result = $conexao->prepare($sql);
$result->bindValue(":email", $email);
$result->bindValue(":senha", $senha);
$result->execute();

$qtde = $result->rowCount();

if ($qtde == 1) {
    session_start();
    $linha = $result->fetch(PDO::FETCH_ASSOC);
    $_SESSION["email"] = $linha["email"];
    $_SESSION["nome"] = $linha["nome"];

    header("location: inicio_figma_html.php");
} else {
    header("location: login_figma_html.php?erro=E-mail ou senha invalidos.");
}

// $email = '';
// $password = '';
// $logar = '';


// if (!empty($_POST['email_usuario_login'])) {
//     $email = $_POST['email_usuario_login'];
//     // echo "EMAIL: $email <br/>";

// }

// if (!empty($_POST['senha_usuario_login'])) {
//     $password = $_POST['senha_usuario_login'];
//     // echo "SENHA: $password <br/>";

// }


// if (!empty($_POST['logar'])) {
//     $logar = $_POST['logar'];
//     // echo "CADASTRADO: $logar <br/>";
// }



// if ($logar == 'Logar') {
//     $res_inserir = "SELECT email_usuario, senha_usuario FROM usuario WHERE email_usuario= '$email' AND senha_usuario= '$password' ";
//     $resposta_inserir = mysqli_query($conn, $res_inserir);
//     echo "Logado <br/><br/>";
//     header("Location: inicio_figma_html.php");
// } else {
//     header("Location: login_figma_html.php");
// }
