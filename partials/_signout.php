<?php
    session_start();
    echo "Please wait , We are signing you out.";
    session_destroy();
    session_unset();
    header("location: /main.php?lo=true");
    exit();
?>