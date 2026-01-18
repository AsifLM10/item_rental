<?php
session_start();
include("../database/rent.php");
$username="";
$userError="";
$passError="";
$error="";
if(isset($_SESSION["username"]))
{
  header("Location:dashboard.php");
  exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["username"]))
    {
        $userError="Username is required";
    }
    else
    {
        $username=trim($_POST["username"]);
    }
    if(empty($_POST["password"]))
    {
        $passError="Password is required";
    }
    else
    {
        $password=$_POST["password"];
    }
    if(empty($userError)&&empty($passError))
        {
            $sql="SELECT * FROM users WHERE username='$username'";
            $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
        {
            $row=mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"]))
        {
            $_SESSION["username"]=$username;
    if(isset($_POST["remember"]))
        {
            setcookie("username",$username,time()+(86400*30),"/");
        }
            header("Location:dashboard.php");
            exit();
        }
    else
         {
             $error="Invalid username or password";
        }
        }
    else
        {
             $error="User not found";
        }
        }
    }?>






         
  