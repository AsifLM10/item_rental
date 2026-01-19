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

</body>
</html>
