<?php
if(isset($_POST['login']))
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
    }
    else
    {
        $email = $_POST['email'];
    }

    if($_POST['password'] == NULL)
    {
        echo "Please enter your password<br />";
    }
    else
    {
        $password = $_POST['password'];
    }

    if($email && $password){
        require 'connect.php';
        $conn = connectDatabase();

        $sql="select * from users where email='".$email."' and password='".$password."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Đăng nhập thành công";
        } 
        else {
            header("Location: ./dangnhap.html");
        }

        mysqli_close($conn);
    }
    
}else{
    header("Location: ./dangnhap.html");
}



