<?php include("../controller/login.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../stylesheets/login.css">
    </head>
<body>
    <a href="../view/home.php" class="home-btn">Home</a>
    <div class="login-box">
    <h2>&#128274;Login</h2>
    <p>Welcome back! Please login</p>
     
    <form method="post">
    <div class="input-group">
     <i>&#128100;</i>
    <input type=text name="username" placeholder="Username" value="<?php echo $username; ?>">
    </div>

    <div class="input-group">
    <i>&#128273;</i>
    <input type="password" name="password" id="password"placeholder="Password">
    </div>

    <div class="show-pass" onclick="togglePassword()">Show Password</div>

    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br>

    <input type="submit" value="Login" class="login-btn">
    <div class= "centre-box">
        <span>Don’t have an account?</span><br>
        <a href="../view/signup.php">Sign Up</a>
    </div>
    </form>
    <?php if ($userError) echo "<div class='error'>$userError</div>";?>
    <?php if($passError) echo "<div class='error'>$passError</div>";?>
    <?php if ($error) echo "<div class='error'>$error</div>";?>
    <div class = "footer-text">
    Rental Item Marketplace
    </div>
    </div>
<script src="../javascript/login.js"></script>
</body>
</html>