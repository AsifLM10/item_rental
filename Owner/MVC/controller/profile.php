<?php
session_start();
include "../../../Common/MVC/database/config.php";

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$username = $_SESSION["username"];
$message = "";
$result = mysqli_query(
    $conn,
    "SELECT email FROM users WHERE username='$username'");

$user = mysqli_fetch_assoc($result);