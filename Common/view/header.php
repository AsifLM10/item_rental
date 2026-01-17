<div class="navbar">
    <div class="logo">ItemRental</div>
    <div class="nav-links">
        <a href="index.php">Home</a>

        <?php
        if(isset($_SESSION["username"])){
            echo "Welcome ".$_SESSION["username"]."";
        }
        else{
            echo "<a href='login.php'>Login</a>";
            
        }
        ?>
    </div>
</div>