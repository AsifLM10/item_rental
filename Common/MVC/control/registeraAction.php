<?php
include "../database/config.php";

$user = $_POST["username"];
$pass = $_POST["password"];
$role = $_POST["role"];

if(empty($user) || empty($pass) || empty($role)){
    echo "All fields required";
    exit();
}

$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username,password,role) VALUES('$user','$hash','$role')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful <a href='../view/login.php'>Login</a>";
}
else{
    echo "Error";
}

?>