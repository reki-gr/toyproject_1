<?php
    echo "Utility";
    
    $mysqli_host = "localhost";
    $mysqli_user = "root";
    $mysqli_password = "";
    $mysqli_db = "reki_project_1";

    $connect = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_password, $mysqli_db);
    mysqli_set_charset($connect, 'utf8');
?>
