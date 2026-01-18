<?php
session_start();
include "../../../Common/MVC/controller/manageItems.php";

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

        <div class="section">
            <h2>My Items</h2>
            <table border="1" align="center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php while($row=mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["item_name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td>
                    <a href="../control/itemAction.php?toggle=<?php echo $row["id"]; ?>">Toggle</a>
                    <a href="../controller/itemAction.php?delete=<?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </table>
        </div>

        <div class="section gray">
            <h3>Recent Comments</h3>

            <?php
            $comments=mysqli_query($conn, "SELECT * FROM comments");
            while($c=mysqli_fetch_assoc($comments)){
                echo "<p><b>" .$c[username]. "</b>: " .$c["comment"]. "</p>";
            }
            ?>
        </div>

    </body>
</html>