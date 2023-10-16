<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "ben_invest";

    $conn = mysqli_connect($host, $user, $password, $db);

    if(!$conn){
        echo "<h1 class='container bg-dark text-center text-warning'>Not able to connect to database</h1>";
    }

?>