<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar">
    <div class="logo">PINKORA</div>

    <!-- CENTER MENU -->
    <ul class="nav-center">
        <li><a href="index.php">HOME</a></li>

        <li class="shop-hover">
            <a href="#">SHOP</a>
            <div class="shop-list">
                <a href="Dresses.php">DRESSES</a>
                <a href="tops.php">TOPS</a>
                <a href="bottoms.php">BOTTOMS</a>
                <a href="office.php">FORMAL WEAR</a>
                <a href="party.php">PARTY WEAR</a>
            </div>
        </li>

        <li><a href="newarrivals.php">NEW ARRIVALS</a></li>
        <li><a href="bestsell.php">BEST SELLERS</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
    </ul>

    <!-- RIGHT MENU -->
    <ul class="nav-right">
        <li>
            <a href="search.php">
                <i class="ri-search-line"></i> SEARCH
            </a>
        </li>

        <?php if (isset($_SESSION['user_id'])): ?>

            <!-- Logged-in user -->
            <li>
                <a href="#">
                    <i class="ri-user-3-line"></i>
                    WELCOME, <?= htmlspecialchars($_SESSION['name']) ?>
                </a>
            </li>

            <?php if ($_SESSION['role'] === 'customer'): ?>
                <li>
                    <a href="my_orders.php">
                        <i class="ri-shopping-cart-line"></i> MY ORDERS
                    </a>
                </li>
            <?php endif; ?>

            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li>
                    <a href="admin_orders.php">
                        <i class="ri-dashboard-line"></i> ADMIN
                    </a>
                </li>
            <?php endif; ?>

            <li>
                <a href="logout.php">
                    <i class="ri-logout-box-line"></i> LOGOUT
                </a>
            </li>

        <?php else: ?>

            <!-- Guest -->
            <li>
                <a href="login.php">
                    <i class="ri-user-3-line"></i> ACCOUNT
                </a>
            </li>

        <?php endif; ?>

        <!-- CART -->
        <li>
            <a href="#" id="cart-icon" class="cart-icon">
                <i class="ri-shopping-bag-line"></i>
                <span class="cart-item-count">0</span> CART
            </a>
        </li>
    </ul>
</nav>


<script>
const CART_KEY = "<?php
    if (isset($_SESSION['user_id'])) {
        echo 'cart_user_' . $_SESSION['user_id'];
    } else {
        echo 'cart_guest';
    }
?>";
</script>




<script src="script.js"></script>
