<?php
        if( $_POST['email'] === "habang@gmail.com" && $_POST['password'] === "12345"){
            echo "welcom to admin";
        }else{
            echo "email or password sai";
            header("Location: ./form_post.html");
        }
    