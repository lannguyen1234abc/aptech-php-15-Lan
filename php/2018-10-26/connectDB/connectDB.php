<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "aptech_php_15_ss4";
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "CREATE DATABASE aptech_php_15_ss4";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>