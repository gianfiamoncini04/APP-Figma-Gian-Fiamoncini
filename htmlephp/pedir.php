<?php

session_start();

include('conect.php');

$price_size = mysqli_real_escape_string($conn, trim($_POST['tamanho']));

$price_flavor = mysqli_real_escape_string($conn, trim($_POST['sabor']));

$sql = "INSERT INTO `pedido`(`sabor_produto`, `tamanho_pizza`) VALUES ('$price_flavor','$price_size')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['pedido'] = true;
}

$conn->close();

header("Location: pedidos_figma_html.php");
exit;
