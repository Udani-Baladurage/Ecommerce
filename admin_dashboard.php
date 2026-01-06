<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// DATABASE CONNECTION
$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// FETCH STATISTICS
// Total Orders
$orderResult = $conn->query("SELECT COUNT(*) AS total_orders FROM orders");
$totalOrders = $orderResult->fetch_assoc()['total_orders'];

// Total Products
$productResult = $conn->query("SELECT COUNT(*) AS total_products FROM products");
$totalProducts = $productResult->fetch_assoc()['total_products'];

// Total Users
$userResult = $conn->query("SELECT COUNT(*) AS total_users FROM users");
$totalUsers = $userResult->fetch_assoc()['total_users'];

// Total Revenue (Only summing the 'total' column which we now fill when Paid)
$revenueResult = $conn->query("SELECT SUM(total) AS total_revenue FROM orders");
$totalRevenue = $revenueResult->fetch_assoc()['total_revenue'] ?? 0;

// Fetch Recent Orders (latest 5)
$recentOrders = $conn->query("
    SELECT id, full_name AS customer_name, status, total_amount, created_at
    FROM orders
    ORDER BY created_at DESC
    LIMIT 5
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – Dashboard | PINKORA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin_dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">PINKORA</div>
    <ul class="nav-center">
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="orders_admin.php">Orders</a></li>
        <li><a href="admin_products.php">Products</a></li>
        <li><a href="admin_users.php">Users</a></li>
       
    </ul>
    <ul class="nav-right">
        <li><a href="#"><i class="ri-user-3-line"></i> Welcome, <?= htmlspecialchars($_SESSION['name']) ?></a></li>
        <li><a href="logout.php"><i class="ri-logout-box-line"></i> Logout</a></li>
    </ul>
</nav>

<!-- DASHBOARD WRAPPER -->
<div class="admin-dashboard">

    <!-- HEADER -->
    <div class="dashboard-header">
        <h1>Dashboard</h1>
        <p>Welcome back, <?= htmlspecialchars($_SESSION['name']) ?> 👋</p>
    </div>

    <!-- STAT CARDS -->
    <div class="dashboard-stats">

        <div class="stat-card">
            <div class="stat-icon orders"><i class="ri-shopping-bag-line"></i></div>
            <div class="stat-info">
                <h3>Total Orders</h3>
                <span><?= $totalOrders ?></span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon products"><i class="ri-store-2-line"></i></div>
            <div class="stat-info">
                <h3>Products</h3>
                <span><?= $totalProducts ?></span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon users"><i class="ri-user-3-line"></i></div>
            <div class="stat-info">
                <h3>Users</h3>
                <span><?= $totalUsers ?></span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon revenue"><i class="ri-line-chart-line"></i></div>
            <div class="stat-info">
                <h3>Revenue</h3>
                <span>Rs. <?= number_format($totalRevenue, 2) ?></span>
            </div>
             </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="dashboard-content">

        <!-- RECENT ORDERS -->
        <div class="dashboard-box">
            <h2>Recent Orders</h2>

            <table class="dashboard-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($recentOrders->num_rows > 0) {
                        while ($row = $recentOrders->fetch_assoc()) {
                            $statusClass = strtolower($row['status']); // CSS classes: pending/completed
                            echo "<tr>
                                    <td>#{$row['id']}</td>
                                    <td>{$row['customer_name']}</td>
                                    <td><span class='status {$statusClass}'>{$row['status']}</span></td>
                                    <td>\${$row['total_amount']}</td>
                                    <td>{$row['created_at']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No recent orders</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- QUICK ACTIONS -->
        <div class="dashboard-box">
            <h2>Quick Actions</h2>
            <div class="quick-actions">
                <a href="admin_products.php">➕ Add Product</a>
                <a href="orders_admin.php">📦 View Orders</a>
                <a href="admin_users.php">👤 Manage Users</a>
               
            </div>
        </div>

    </div>

</div>

</body>
</html>

