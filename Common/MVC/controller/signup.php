<?php 
session_start();
include("../database/config.php");
$message = "";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
    $username =trim($_POST["username"]);
    $password=$_POST["password"];
    $email=trim($_POST["email"]);
    $role=$_POST["role"];
     if(empty($username)|| empty($password)|| empty($email) || empty($role)){
    $message = "<p class='error'> All fields are required</p>";
     }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
         $message="<p class='error'>Invalid email format(use @)</p>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $message = "<p class='error'>Invalid role selected</p>";
    }
    else{
     $check = "SELECT id FROM users WHERE username='$username'";
     $result = mysqli_query($conn, $check);

     if(mysqli_num_rows($result) > 0){
          $message = "<p class='error'>Username already exists</p>";
     }
          else{
               $hash=password_hash($password,PASSWORD_DEFAULT);
               $sql="INSERT INTO users(username,password,role,email) VALUES ('$username','$hash','$role','$email')";
               if(mysqli_query($conn,$sql))
                    {
                         $message="<p class='success'>Account created successfully!</p>";
                         $message.="<a href='../view/login.php'>Login Now</a>";
                         } else{
                              $message="<p class='error'>Username already exists</p>";
                              }
          }
        }
}
?>
