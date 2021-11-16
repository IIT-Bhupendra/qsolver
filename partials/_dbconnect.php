<?php
    $server = "bfizooxdv5y7ss6iba6j-mysql.services.clever-cloud.com";
    $username = "uczfmuguxda7r5ym";
    $password = "s1fTGxBIdfkhGJmFsiQR";
    $database = "bfizooxdv5y7ss6iba6j";
    echo getenv('DB_NAME');
    echo "<br>";
    echo getenv('SERVER_NAME');
    echo "<br>";
    echo getenv('USER_IDENTIFICATION');
    echo "<br>";
    echo getenv('USER_NAME');
    echo "<br>";
    $conn = mysqli_connect($server, $username, $password, $database);
?>
