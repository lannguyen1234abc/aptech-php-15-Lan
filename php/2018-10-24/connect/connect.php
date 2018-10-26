<?php
$servername = "localhost";
$username = "aptech";
$password = "12345";
$dbname = "aptech_php_15";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/* Create database
$sql = "CREATE DATABASE aptech_php_15";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
/* sql to create table
$sql = "CREATE TABLE USERS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) unique,
    pass VARCHAR(50))";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table USERS created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
 */
// Insert into table   
/*$sql = "INSERT INTO USERS (id, firstname, lastname, email, pass)
    VALUES (1,'Le', 'An', 'habang@gmail.com',12345)";*/
/*$sql = "INSERT INTO USERS (firstname, lastname, email, pass)
    VALUES ('Le', 'Anh', 'leanh@gmail.com',54321)";*/
/*$sql = "INSERT INTO USERS (firstname, lastname, email, pass)
    VALUES ('Hai', 'Ha', 'haiha@gmail.com',11111)";*/
/*$sql = "INSERT INTO USERS (firstname, lastname, email, pass)
    VALUES ('Mai', 'Vy', 'maivy@gmail.com',22222)"; */ 
/*$sql = "INSERT INTO USERS (firstname, lastname, email, pass)
    VALUES ('Tran', 'Na', 'tranna@gmail.com',33333)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
$sql = "SELECT * FROM USERS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. " - Password: " . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>