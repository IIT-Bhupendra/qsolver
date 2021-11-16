<!-- <?php
    $server =  getenv('SERVER_NAME');
    $username = getenv('USER_NAME');
    $password = getenv('USER_IDENTIFICATION');
    $database = getenv('DB_NAME');
    $conn = mysqli_connect($server, $username, $password, $database);
?> -->

<?php
    $server = "bfizooxdv5y7ss6iba6j-mysql.services.clever-cloud.com";
    $username = "uczfmuguxda7r5ym";
    $password = "s1fTGxBIdfkhGJmFsiQR";
//     $database = "bfizooxdv5y7ss6iba6j";
    $database = getenv('DB_NAME');
    $conn = mysqli_connect($server, $username, $password, $database);
?>
