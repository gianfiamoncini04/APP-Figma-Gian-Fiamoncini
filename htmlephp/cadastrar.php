<?php


session_start();
include('conect.php');


$name = mysqli_real_escape_string($conn, trim($_POST['nome_usuario']));
$fone = mysqli_real_escape_string($conn, trim($_POST['telefone_usuario']));
$email = mysqli_real_escape_string($conn, trim($_POST['email_usuario']));
$password = mysqli_real_escape_string($conn, trim($_POST['senha_usuario']));
$address = mysqli_real_escape_string($conn, trim($_POST['endereco_usuario']));

$sql = "SELECT COUNT(*) AS total FROM usuario WHERE email_usuario = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['email_existe'] = true;
    header("Location: cadastro_figma_html.php");
    exit;
}

$sql = "INSERT INTO usuario(nome_usuario, telefone_usuario, email_usuario, senha_usuario, endereco_usuario, data_cadastro) 
        VALUES ('$name', '$fone', '$email', '$password', '$address', NOW())";

if ($conn->query($sql) === TRUE) {
    $_SESSION['cadastro_efetuado'] = true;
}

$conn->close();

header("Location: cadastro_figma_html.php");
exit;
