<?php

    $server = "localhost:3306";
    $user = "root";
    $password = "";
    $db = "banco_figma_gian";

    $conn = mysqli_connect($server, $user, $password, $db);

    // if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
    // }
