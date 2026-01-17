<?php
include "../database/config.php";

$user = $_POST["username"];
$pass = $_POST["password"];
$role = $_POST["role"];

if(empty($user) || empty($pass) || empty($role)){
    echo "All fields required";
    exit();
}