<?php 
session_start();
include("../database/rent.php");
$message = "";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $username =trim($_POST["username"]);
    $password=$_POST["password"];
    $email=trim($_POST["email"]);
     if(empty($username)|| empty($password)|| empty($email)){
    $message = "<p class='error'> All fields are required</p>";
     }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
         $message="<p class='error'>Invalid email format(use @)</p>";
    }
    else{
         $hash=password_hash($password,PASSWORD_DEFAULT);
         $sql="INSERT INTO users(username,password,email) VALUES ('$username','$hash','$email')";
         if(mysqli_query($conn,$sql))
        {
          $message="<p class='success'>Account created successfully!</p>";
          $message.="<a href='../view/login.php'>Login Now</a>";
        }
        else{
             $message="<p class='error'>Username already exists</p>";
            }
        }
}
?>
