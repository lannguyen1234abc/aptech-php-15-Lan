<?php
if(isset($_POST['sign']))
{
    $name = $email = $password = "";

    if($_POST['name'] == NULL){
        echo "Please enter your name <br/>";
    }else{
        $name = $_POST['name'];
    }

    if($_POST['email'] == NULL)
    {
        echo "Please enter your email <br />";
    }else{
        $email = $_POST['email'];
    }

    if($_POST['password'] == NULL)
    {
        echo "Please enter your password<br />";
    }else{
        $password = $_POST['password'];
    }

    if($name && $email && $password){
        require 'connect.php';
        $conn = connectDatabase();

        $sql = "select * from users where email='".$email."' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != "") {
            echo "Email đã tồn tại ! ";
        }else {
            $sql2 = "insert into users(name, email, password) values('".$name."', '".$email."', '".$password."')";
            $result2 = mysqli_query($conn, $sql2);
            echo "Thêm thành công !";
        }

        mysqli_close($conn);
    }
}else{
    header("Location: ./dangky.html");
}  

