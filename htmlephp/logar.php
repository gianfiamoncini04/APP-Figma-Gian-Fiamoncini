<?php

session_start();
include('conect.php');

$email = mysqli_real_escape_string($conn, trim($_POST['email_usuario_login']));
$password = mysqli_real_escape_string($conn, trim($_POST['senha_usuario_login']));


$sql = "SELECT COUNT(*) AS total FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['login_efetuado'] = true;
    header("Location: login_figma_html.php");
    exit;
} else {
    $_SESSION['login_erro'] = true;
}


$conn->close();

header("Location: login_figma_html.php");
exit;
