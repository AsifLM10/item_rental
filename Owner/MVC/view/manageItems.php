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
                <div class="card" id="item-<?php echo $row['id']; ?>">   
                    <?php if(!empty($row["image"])): ?>
                        <img src="../../../uploads/<?php echo $row["image"]; ?>" alt="Item Image">
                        <?php endif; ?>
                        <h3><?php echo $row["item_name"]; ?></h3>
                        <p><?php echo $row["description"]; ?></p>
                        <p><strong>Price:</strong> ৳<?php echo $row["price"]; ?></p>
                        <p id="status- <?php echo $row['id']; ?>"><strong>Status:</strong> <?php echo $row["status"]; ?></p>

                        <button onclick="toggleStatus(<?php echo $row['id']; ?>)">
                            Toggle Status
                        </button>
                        <button onclick="deleteItem(<?php echo $row['id']; ?>)" class="delete-btn">
                            Delete
                        </button>
                    </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="empty">No items added yet.</p>
        <?php endif; ?>    
    </div>

    <script src="../javascript/manageItems.js"></script>

    </body>
</html>