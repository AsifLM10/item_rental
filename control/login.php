<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if(empty($user) || empty($pass)){
        echo "All fields required";
    }
}

?>