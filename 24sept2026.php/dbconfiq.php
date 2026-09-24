<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "pwad73";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn){
        die("Database conection error" .mysqli_connect_error());
    }
?>