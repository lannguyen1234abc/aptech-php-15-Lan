<?php
        if( $_GET['email'] === "habang@gmail.com" && $_GET['password'] === "12345"){
            echo "welcom to admin";
        }else{
            echo "email or password sai";
            header("Location: ./form_get.html");
        }
    