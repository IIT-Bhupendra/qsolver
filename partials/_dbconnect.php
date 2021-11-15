<?php

    $server = "bfizooxdv5y7ss6iba6j-mysql.services.clever-cloud.com";
    $username = "uczfmuguxda7r5ym";
    $password = "s1fTGxBIdfkhGJmFsiQR";
    $database = "bfizooxdv5y7ss6iba6j";

    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->safeLoad();    

    $server = $_ENV['SERVER_NAME'];
    $username = $_ENV['USER_NAME'];
    $password = $_ENV['USER_IDENTIFICATION'];
    $database = $_ENV['DB_NAME'];

    // echo vardum($server);

    $conn = mysqli_connect($server, $username, $password, $database);
?>