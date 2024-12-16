<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "db";

    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    if(!$conn){
        echo '<script>alert("Could not connect: ' . mysqli_connect_error() . '")</script>';
    }

?>
