<?php
    $server =  getenv('SERVER_NAME');
    $username = getenv('USER_NAME');
    $password = getenv('USER_IDENTIFICATION);
    $database = getenv('DB_NAME');
    $conn = mysqli_connect($server, $username, $password, $database);
?>
