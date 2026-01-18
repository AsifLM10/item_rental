<?php
session_start();

session_destroy();

header("Location: ../../../Common/MVC/view/login.php");
exit();
?>