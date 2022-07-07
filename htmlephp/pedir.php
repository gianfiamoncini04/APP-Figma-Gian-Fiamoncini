<?php

session_start();

include('conect.php');

$price_size = mysqli_real_escape_string($conn, trim($_GET['pizza_pequena']));
$price_size = mysqli_real_escape_string($conn, trim($_GET['pizza_media']));
$price_size = mysqli_real_escape_string($conn, trim($_GET['pizza_grande']));
$price_size = mysqli_real_escape_string($conn, trim($_GET['pizza_gigante']));

$price_flavor = mysqli_real_escape_string($conn, trim($_POST['calabresa']));
$price_flavor = mysqli_real_escape_string($conn, trim($_POST['vegana']));
$price_flavor = mysqli_real_escape_string($conn, trim($_POST['egg']));
$price_flavor = mysqli_real_escape_string($conn, trim($_POST['frango']));


$sql = "INSERT INTO `pedido`(`sabor_produto`, `tamanho_pizza`) VALUES ('$price_flavor','$price_size')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['pedido'] = true;
}

$conn->close();

header("Location: pedidos_figma_html.php");
exit;
