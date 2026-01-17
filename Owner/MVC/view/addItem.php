<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
?>