<?php
    //requirement for connection
    $host = "localhost";
    $user = "root";
    $passward = "";
    $database = "school";
    //method for connection
    $conn = mysqli_connect($host, $user, $passward, $database);
    //test connection
    if(!$conn){
        die(mysqli_connect_error());
    }else{
        echo("connection successfull");
    }