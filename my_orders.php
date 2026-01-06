

<?php

require_once 'db.php';

// Protect page — only for logged-in customers
if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer'){
    header("Location: login.php");
    exit();
}

// Get customer ID
$user_id = $_SESSION['user_id'];

// Fetch customer orders
$stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Orders - PINKORA</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="my_order.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="cart.css">
   
    

</head>
<body>

<?php include 'navbar.php'; ?> <!-- Use your navbar -->

<h2>My Orders</h2>

<?php if($result->num_rows > 0): ?>
<table border="1" cellpadding="10">
<tr>
    <th>Order ID</th>
    <th>Products</th>
    <th>Total Amount</th>
    <th>Payment Method</th>
    <th>Status</th>
    <th>Order Date</th>
</tr>


<?php while($row = $result->fetch_assoc()): ?>
<tr>

    <!-- Order ID -->
    <td><?= $row['id'] ?></td>

    <!-- Products -->
    <td>
    <?php
    $itemStmt = $conn->prepare(
        "SELECT product_name, quantity, price, image 
         FROM order_items 
         WHERE order_id = ?"
    );
    $itemStmt->bind_param("i", $row['id']);
    $itemStmt->execute();
    $itemResult = $itemStmt->get_result();

    while ($item = $itemResult->fetch_assoc()) {
        echo '
        <div class="order-item-container">
        <div style="display:flex; gap:10px; margin-bottom:8px;">
            <img src="'.$item['image'].'" width="50" style="border-radius:6px;">
            <div>
                <strong>'.htmlspecialchars($item['product_name']).'</strong><br>
                Qty: '.$item['quantity'].'<br>
                LKR '.number_format($item['price'], 2).'
            </div>
        </div>
        ';
    }
    $itemStmt->close();
    ?>
    </td>

    <!-- Total Amount -->
    <td>LKR <?= number_format($row['total_amount'], 2) ?></td>

    <!-- Payment Method -->
    <td><?= htmlspecialchars($row['payment_method']) ?></td>

    <!-- Status -->
    <td><?= htmlspecialchars($row['status'] ?? 'Paid') ?></td>

    <!-- Order Date -->
    <td><?= date("d M Y, H:i", strtotime($row['created_at'])) ?></td>

</tr>
<?php endwhile; ?>


</table>
<?php else: ?>
<p>You have no orders yet. <a href="shop.php">Shop Now</a></p>
<?php endif; ?>



<script src="script.js">
    
</script>


</body>
</html>
