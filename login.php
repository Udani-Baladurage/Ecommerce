<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])){
    // Redirect based on role
    if($_SESSION['role'] === 'admin'){
        header("Location: admin_orders.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}

// Get errors and active form from session
$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',
];
$activeForm = $_SESSION['active_form'] ?? 'login';

// Clear errors after fetching
unset($_SESSION['login_error'], $_SESSION['register_error'], $_SESSION['active_form']);

function showError($error){
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PINKORA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php include 'navbar.php'; ?>

<div class="cart">
    <h2 class="cart-title">Shopping Cart</h2>
    <div class="cart-content"></div>
    <div class="total">
        <div class="total-title">Total:</div>
        <div class="total-price">LKR 0.00</div>
    </div>
    <button class="btn-buy">Checkout</button>
    <i class="ri-close-line" id="cart-close"></i>

    <div class="cart-empty" id="cart-empty">
        <p>No Cart Items</p>
        <a href="shop.php" class="shop-now-btn">Shop Now</a>
    </div>
</div>

<?php if(!isset($_SESSION['user_id'])): ?>
<div class="login-register-container">
    <!-- LOGIN FORM -->
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <form action="login_register.php" method="POST">
            <h2>Login</h2>
            <?= showError($errors['login']) ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showRegister()">Create an account</a></p>
        </form>
    </div>

    <!-- REGISTER FORM -->
    <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <form action="login_register.php" method="POST">
            <h2>Create Account</h2>
            <?= showError($errors['register']) ?>
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" name="register">Register</button>
            <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
        </form>
    </div>
</div>
<?php endif; ?>

<script>
function showRegister() {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('register-form').classList.add('active');
}
function showLogin() {
    document.getElementById('register-form').classList.remove('active');
    document.getElementById('login-form').classList.add('active');
}

</script>


<script src="script.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
