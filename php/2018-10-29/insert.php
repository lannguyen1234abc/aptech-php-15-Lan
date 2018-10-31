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

// Thêm 5 dữ liệu vào bảng users 
$sql = "INSERT INTO USERS (name, email, password)
VALUES  ('lan', 'abc@gmail.com', '12345'),
        ('an', 'an@gmail.com', '11111'),
        ('lam', 'lam@gmail.com', '22222'),
        ('ba', 'ba@gmail.com', '33333'),
        ('mai', 'mai@gmail.com', '44444')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);