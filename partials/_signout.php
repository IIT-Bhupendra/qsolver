<?php
    session_start();
    echo "Please wait , We are signing you out.";
    session_destroy();
    session_unset();
    header("location: /forum_1/main.php?lo=true");
    exit();
?>