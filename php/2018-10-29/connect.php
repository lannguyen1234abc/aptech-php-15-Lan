<?php

function connectDatabase(){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "aptech_php_15_ss4";
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;


}