<?php
session_start();
require_once 'db.php'; // Your DB connection

// ---------------- REGISTER ----------------
if(isset($_POST['register'])){
    $name = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Password match check
    if($password !== $confirm_password){
        $_SESSION['register_error'] = "Passwords do not match!";
        $_SESSION['active_form'] = 'register';
        header("Location: login.php");
        exit();
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $_SESSION['register_error'] = "Email is already registered!";
        $_SESSION['active_form'] = 'register';
        header("Location: login.php");
        exit();
    }

    // Insert new user with default role 'customer'
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users(name, email, password, role) VALUES (?, ?, ?, 'customer')");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    $stmt->execute();

    // Auto-login after registration
    $_SESSION['user_id'] = $stmt->insert_id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['role'] = 'customer';

    // After registration, merge any guest cart to user cart
    echo "
    <script>
    const guestCart = JSON.parse(localStorage.getItem('cart_guest')) || [];
    const userCartKey = 'cart_user_{$_SESSION['user_id']}';
    const userCart = JSON.parse(localStorage.getItem(userCartKey)) || [];

    guestCart.forEach(gItem => {
        const existing = userCart.find(uItem => uItem.title === gItem.title);
        if(existing){
            existing.quantity += gItem.quantity;
        } else {
            userCart.push(gItem);
        }
    });

    localStorage.setItem(userCartKey, JSON.stringify(userCart));
    localStorage.removeItem('cart_guest');
    </script>
    ";

    header("Location: index.php"); // Customer home/shop page
    exit();
}

// ---------------- LOGIN ----------------
if(isset($_POST['login'])){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Merge guest cart to user cart
            if($user['role'] !== 'admin'){
                echo "
                <script>
                const guestCart = JSON.parse(localStorage.getItem('cart_guest')) || [];
                const userCartKey = 'cart_user_{$user['id']}';
                const userCart = JSON.parse(localStorage.getItem(userCartKey)) || [];

                guestCart.forEach(gItem => {
                    const existing = userCart.find(uItem => uItem.title === gItem.title);
                    if(existing){
                        existing.quantity += gItem.quantity;
                    } else {
                        userCart.push(gItem);
                    }
                });

                localStorage.setItem(userCartKey, JSON.stringify(userCart));
                localStorage.removeItem('cart_guest');
                </script>
                ";
            }

            // Redirect based on role
            if($user['role'] === 'admin'){
                header("Location: admin_dashboard.php"); // Admin dashboard
            } else {
                header("Location: index.php"); // Customer home/shop page
            }
            exit();
        }
    }

    // Login failed
    $_SESSION['login_error'] = "Incorrect Email or Password";
    $_SESSION['active_form'] = 'login';
    header("Location: login.php");
    exit();
}
?>





