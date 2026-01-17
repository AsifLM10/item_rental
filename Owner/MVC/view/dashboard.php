<?php
session_start();
if(!isset($_SESSION["username"]) || $_SESSION["role"] != "owner"){
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    
</html>