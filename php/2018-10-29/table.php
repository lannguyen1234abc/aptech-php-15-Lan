<?php
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
echo "Connected successfully";

// Create table
$sql = " CREATE TABLE USERS (
    id int primary key auto_increment,
    name varchar(255),
    email varchar(255) unique,
    password varchar(255))";
    if( mysqli_query($conn, $sql)){
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
