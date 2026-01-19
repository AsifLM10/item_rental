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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    } else {
        mysqli_query(
            $conn,
            "UPDATE users SET email='$email' WHERE username='$username'"
        );
        if (!empty($password)) {
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query(
                $conn,
                "UPDATE users SET password='$hashed' WHERE username='$username'"
            );      
        }

        $message = "Profile updated successfully";
    }
}
?>