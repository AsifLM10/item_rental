<?php
session_start();
include "../../../Common/MVC/database/config.php";

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "owner") {
    header("Location: ../../../Common/MVC/view/login.php");
    exit();
}

$owner = $_SESSION["username"];

$sql = "
    SELECT * FROM rental_requests 
    WHERE item_id IN (
        SELECT id FROM items WHERE owner_username = '$owner'
    )
";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Requests</title>
    <link rel="stylesheet" href="../stylesheets/dashboard.css">
</head>
<body>

<a href="dashboard.php" class="home-btn">Dashboard</a>

<h2 class="title">Booking Requests</h2>

<div class="container">
    <div class="card" style="padding:20px;">
        <table width="100%" cellpadding="10">
            <tr style="background:#2ecc71;color:white;">
                <th>Item</th>
                <th>Renter</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>

                    <?php
                    $itemId = $row["item_id"];
                    $itemQuery = mysqli_query(
                        $conn,
                        "SELECT item_name, price FROM items WHERE id = $itemId"
                    );
                    $item = mysqli_fetch_assoc($itemQuery);
                    ?>

                    <tr>
                        <td><?php echo $item["item_name"]; ?></td>
                        <td><?php echo $row["renter_username"]; ?></td>
                        <td>৳<?php echo $item["price"]; ?></td>
                        <td><?php echo $row["request_status"]; ?></td>
                        
                        <td>
                            <?php if($row["request_status"] === "pending"): ?>
                                <a href="../controller/updateBookingStatus.php?id=<?php echo $row['id']; ?>&status=approved">
                                    Accept
                                </a>

                                <a href="../controller/updateBookingStatus.php?id=<?php echo $row['id']; ?>&status=rejected">
                                    Reject
                                </a>
                        </td>
                    </tr>

                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">
                        No booking requests yet.
                    </td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</div>

</body>
</html>
