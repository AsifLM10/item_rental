<?php
session_start();

if(!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner"){
    header("Location: ../../../Common/MVC/view/login.php")
    exit();
}

$displayName = $_SESSION["username"];
?>

