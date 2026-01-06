<?php
session_start(); // REQUIRED for user_id

$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if ($conn->connect_error) die("DB Connection Error");

//  Make sure user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['user_id']; //  THIS WAS MISSING

$cart = json_decode($_POST['cart_data'], true);
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$payment_method = $_POST['payment_method'];
$total_amount = $_POST['total_amount'];

if (!$cart || count($cart) === 0) {
    die("Cart is empty");
}

/* =========================
   INSERT ORDER (FIXED)
   ========================= */
$stmt = $conn->prepare(
    "INSERT INTO orders 
    (user_id, full_name, address, phone, total_amount, payment_method, created_at)
    VALUES (?, ?, ?, ?, ?, ?, NOW())"
);

$stmt->bind_param(
    "isssds",
    $user_id,
    $full_name,
    $address,
    $phone,
    $total_amount,
    $payment_method
);

$stmt->execute();
$order_id = $stmt->insert_id;
$stmt->close();

/* =========================
   INSERT ORDER ITEMS
   ========================= */
$stmt = $conn->prepare(
    "INSERT INTO order_items 
    (order_id, product_name, price, quantity, image)
    VALUES (?, ?, ?, ?, ?)"
);

foreach ($cart as $item) {
    $stmt->bind_param(
        "isdis",
        $order_id,
        $item['title'],
        $item['price'],
        $item['quantity'],
        $item['image']
    );
    $stmt->execute();
}
$stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<style>
.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #f5edf3ff;
    padding: 20px 30px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    text-align: center;
    z-index: 9999;
    font-family: sans-serif;
}
</style>
</head>
<body>

<div class="popup">
    <h2>Order Successful 🎉</h2>
    <p>Thank you, <?= htmlspecialchars($full_name) ?></p>
</div>

<script>
    localStorage.removeItem("cart"); // ✅ clear cart
    window.location.href = "index.php?order=success"; // ✅ redirect
</script>

</body>
</html>
