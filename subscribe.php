<?php
header('Content-Type: application/json');

require_once 'db.php';

if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
    echo json_encode(['status'=>'error','message'=>'Email is required']);
    exit;
}

$email = strtolower(trim($_POST['email']));

try {
    // 1. Check if it exists
    $stmt = $conn->prepare("SELECT id FROM subscribers WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo json_encode(['status'=>'exists','message'=>'Email already subscribed']);
        $stmt->close();
        $conn->close();
        exit;
    }
    $stmt->close();

    // 2. Try to insert
    $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo json_encode(['status'=>'success','message'=>'Thank you for subscribing!']);
    } else {
        // This handles database-level errors
        echo json_encode(['status'=>'error','message'=>'Database error: ' . $stmt->error]);
    }
    $stmt->close();

} catch (Exception $e) {
    echo json_encode(['status'=>'error','message'=>'System error: ' . $e->getMessage()]);
}

$conn->close();
?>