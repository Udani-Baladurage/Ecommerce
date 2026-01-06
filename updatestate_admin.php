<?php
// 1. Establish database connection
$conn = new mysqli("localhost", "root", "", "ecommerce_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Capture the data from the POST request
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // 3. Logic for Revenue Tracking
    // If status is 'Paid', we sync 'total' with 'total_amount'.
    // Otherwise, we keep 'total' as NULL so it doesn't count as revenue.
    if ($status === 'Paid') {
        $sql = "UPDATE orders SET status = ?, total = total_amount WHERE id = ?";
    } else {
        $sql = "UPDATE orders SET status = ?, total = NULL WHERE id = ?";
    }

    // 4. Use a Prepared Statement for security
    $stmt = $conn->prepare($sql);
    
    // "si" means: String (status), Integer (id)
    $stmt->bind_param("si", $status, $id);

    // 5. Execute the update
    if ($stmt->execute()) {
        // Success: Redirect back to the admin orders page
        // Note: Ensure /Ecommerce/orders_admin.php is the correct path
        header("Location: /Ecommerce/orders_admin.php?msg=updated");
    } else {
        // Error handling
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
exit();
?>
