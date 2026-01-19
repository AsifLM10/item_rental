<?php 
include("../controller/viewBookings.php"); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Booking Requests</title>
        <link rel="stylesheet" href="../stylesheets/viewBookings.css">
    </head>

    <body>
        <a href="dashboard.php" class="home-btn">Dashboard</a>

        <h2 class="title">Booking Requests</h2>

        <div class="container">
            <?php if($result && mysqli_num_rows($result) > 0): ?>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Renter</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>

                    <?php while($row=mysqli_fetch_assoc($result)): ?>

                        <?php
                        $itemId = $row["item_id"];
                        $itemReq = mysqli_query($conn, "SELECT item_name,price FROM items WHERE id=$itemId");
                        $item = mysqli_fetch_assoc($itemReq);
                        ?>
                        
                        <tr>
                            <td><?php echo $row["item_name"]; ?></td>
                            <td><?php echo $row["renter_username"]; ?></td>
                            <td>৳<?php echo $row["price"]; ?></td>
                            <td><?php echo $row["request_status"]; ?></td>
                        </tr>
                        <?php endwhile; ?>
                </table>
                <?php else: ?>
                    <p class="empty">No booking requests yet.</p>
                    <?php endif; ?>
        </div>
    </body>
</html>