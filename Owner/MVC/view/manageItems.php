<?php
session_start();
include "../../../Owner/MVC/controller/manageItems.php";

$owner = $_SESSION["username"];
$result = mysqli_query($conn,"SELECT * FROM items WHERE owner_username='$owner'");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Manage Items</title>
        <link rel="stylesheet" href="../stylesheets/manageItems.css">
    </head>
    <body>

    <a href="dashboard.php" class="home-btn">Dashboard</a>

    <h2 class="title">Manage Your Items</h2>
    <div class="container">
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="card">   
                    <?php if(!empty($row["image"])): ?>
                        <img src="../../../uploads/<?php echo $row["image"]; ?>" alt="Item Image">
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($row["item_name"]); ?></h3>
                        <p><?php echo htmlspecialchars($row["descriptions"]); ?></p>
                        <p>Price: ৳<?php echo $row["price"]; ?></p>
                        <p>Status: <?php echo $row["status"]; ?></p>
                        <a href= "../controller/deleteItems.php?id=<?php echo $row["id"]; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?')">
                            Delete
                        </a>
                    </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="empty">No items added yet.</p>
        <?php endif; ?>    
    </div>

    </body>
</html>