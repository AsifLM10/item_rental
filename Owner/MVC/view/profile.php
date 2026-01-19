<?php
include "../controller/profile.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../stylesheets/profile.css">
</head>
<body>
    <a href="dashboard.php" class="home-btn">Dashboard</a>

<div class="container">
    <div class="card">
        <h2>Edit Profile</h2>

        <?php if (!empty($message)): ?>
            <p class="msg"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="post">
            <label>Username</label>
            <input type="text" value="<?php echo $_SESSION["username"]; ?>" disabled>

            <label>Email</label>
            <input type="email" name="email"
                   value="<?php echo $user["email"]; ?>" required>

            <label>New Password (leave blank to keep current)</label>
            <input type="password" name="password">

            <button type="submit">Update Profile</button>
        </form>
    </div>
</div>
</body>
</html>