<?php include("../controller/signup.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet"href="../stylesheets/signup.css">
</head>
<body>
    <div class="container">
        <h2>Create Account</h2>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="text" name="email" placeholder="Email"><br><br>
            <input type="submit" value="Sign Up" class="btn">
</form>
<div class="message">
    <?php if(!empty($message))echo $message;?>
</div>
</div>
</body>
</html>