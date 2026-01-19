<?php
session_start();
include "../../../Common/MVC/database/config.php";

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

if (!isset($_GET["id"]) || !isset($_GET["status"])) {
    header("Location: ../view/viewBookings.php");
    exit();
}
?>