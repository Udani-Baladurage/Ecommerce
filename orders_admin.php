<?php
// Start session if not already started
session_start();

// 1️⃣ Redirect non-admin users
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// 2️⃣ Database connection
$conn = new mysqli("localhost", "root", "", "ecommerce_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3️⃣ Fetch orders
$result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – Orders | PINKORA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="order_admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">PINKORA</div>

    <!-- CENTER MENU -->
    <ul class="nav-center">
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="orders_admin.php">Orders</a></li>
        <li><a href="admin_products.php">Products</a></li>
        <li><a href="admin_users.php">Users</a></li>
        
    </ul>

    <!-- RIGHT MENU -->
    <ul class="nav-right">
        <li>
            <a href="#">
                <i class="ri-user-3-line"></i>
                Welcome, <?= htmlspecialchars($_SESSION['name']) ?>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="ri-logout-box-line"></i> Logout
            </a>
        </li>
    </ul>
</nav>


<div class="admin-content-wrapper">
<!-- PAGE CONTENT -->
<h2>Admin – Orders</h2>

<table class="orders-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Total Amount</th>
        <th>Payment</th>
        <th>Status</th>
        <th>Update</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['full_name'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['total_amount'] ?></td>
        <td><?= $row['payment_method'] ?></td>
        <td>
            <form method="post" action="updatestate_admin.php">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <select name="status">
                    <option <?= $row['status']=="Pending"?"selected":"" ?>>Pending</option>
                    <option <?= $row['status']=="Paid"?"selected":"" ?>>Paid</option>
                    <option <?= $row['status']=="Delivered"?"selected":"" ?>>Delivered</option>
                </select>
        </td>
        <td>
                <button>Save</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
</div>

</body>
</html>
