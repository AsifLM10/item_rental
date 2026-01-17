<?php
session_start();
include "../database/config.php";

$user = $_POST["username"];
$pass = $_POST["password"];

if(empty($user) || empty($pass)){
    echo "All fields required";
    exit();
}

$sql = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];
    }
?>