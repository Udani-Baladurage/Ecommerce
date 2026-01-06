<?php
session_start();

// Allow only admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if ($conn->connect_error) {
    die("Database connection failed");
}

// Block / Unblock user
if (isset($_GET['toggle_id'])) {
    $user_id = (int)$_GET['toggle_id'];

    // Prevent admin blocking themselves
    if ($user_id != $_SESSION['user_id']) {
        $conn->query("
            UPDATE users
            SET status = IF(status='active','blocked','active')
            WHERE id = $user_id
        ");
    }
}

// Fetch all users
$result = $conn->query("SELECT id, name, email, role, status, created_at FROM users ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – users| PINKORA</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="admin_users.css">
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
<h2>Admin – Users</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Joined</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= $row['role'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
                <?php if ($row['id'] != $_SESSION['user_id']) { ?>
                    <?php if ($row['status'] === 'active') { ?>
                        <a href="?toggle_id=<?= $row['id'] ?>">Block</a>
                    <?php } else { ?>
                        <a href="?toggle_id=<?= $row['id'] ?>">Unblock</a>
                    <?php } ?>
                <?php } else { ?>
                    —
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
</table>
</div>

</body>
</html>
