
<?php
if(isset($_POST['ok']))
{
$u=$p="";
 if($_POST['username'] == NULL)
 {
  echo "Please enter your username<br />";
 }
 else
 {
  $u=$_POST['username'];
 }
 if($_POST['password'] == NULL)
 {
  echo "Please enter your password<br />";
 }
 else
 {
  $p=$_POST['password'];
 }
 if($u && $p)
 {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_15_ss3";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "SELECT * FROM USERS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. "  - Email: " . $row["email"]. " - Password: " . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();*/

}
}