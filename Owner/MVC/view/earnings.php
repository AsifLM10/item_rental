<?php
include "../controller/earnings.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Earnings</title>
    <link rel="stylesheet" href="../stylesheets/earnings.css">
</head>
<body>

<a href="dashboard.php" class="home-btn">Dashboard</a>

<h2 class="title">Your Earnings</h2>

<div class="summary">
    <h3>Total Earnings</h3>
    <p class="amount">৳<?php echo $total; ?></p>
</div>

<div class="table-box">
    <?php if (count($rows) > 0): ?>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row["item_name"]; ?></td>
                    <td>৳<?php echo $row["price"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p class="empty">No earnings yet.</p>
    <?php endif; ?>
</div>

</body>
</html>
