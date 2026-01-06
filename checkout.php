<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="checkout.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="shop.css">
      
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>

    <body>

            <?php include 'navbar.php'; ?>


            <!-- CLEAR CART IF ORDER JUST PLACED -->
        <script>
    // Make sure CART_KEY matches your script.js
        const CART_KEY = "cart"; // <-- or whatever key you use in localStorage
        if (window.location.search.includes("order=success")) {
            localStorage.removeItem(CART_KEY);
            console.log("Cart cleared after order!");
        }
   </script>





    <div class="cart">
            <h2 class="cart-title">Shopping Cart</h2>
            <div class="cart-content">
                <!-- class="cart-box">
                    <img src="image/bottom1.webp" alt="" class="cart-img">
                    <div class="cart-details">
                        <h3 class="cart-product-title">White Ditsy Floral Print Tiered Maxi Skirt</h3>
                        <span class="Cartprice">LKR 4,000.00</span>
                        <div class="cart-quantity">
                            <button id="decrement">-</button>
                            <span class="number">1</span>
                            <button id="increment">+</button>
                        </div>
                    </div>
                    <i class="ri-delete-bin-7-line" cart remover></i>
                </div>-->
            </div>
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




<form method="POST" action="place_order.php">
<div class="checkout-wrapper">

    <!-- LEFT SIDE -->
    <div class="checkout-left">
        <h2>Contact</h2>
        <input type="email" name="email" placeholder="Email" required>

        <h2>Delivery</h2>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <input type="text" name="phone" placeholder="Phone Number" required>

        <h2>Payment</h2>
        <p><strong>Cash on Delivery</strong></p>
        <input type="hidden" name="payment_method" value="COD">


        <!-- Hidden -->
        <input type="hidden" name="cart_data" id="cart_data">
        <input type="hidden" name="total_amount" id="total_amount">

        <button class="place-order-btn" type="submit">Place Order</button>
    </div>

    <!-- RIGHT SIDE -->
    <div class="checkout-right">
        <h2>Order Summary</h2>
        <div id="order_items"></div>

        <div class="total-box">
            <p>
                <span>Subtotal</span>
                <span>Rs <span id="subtotal">0</span></span>
            </p>
            <p>
                <strong>Total</strong>
                <strong>Rs <span id="total">0</span></strong>
            </p>
        </div>
    </div>

</div>
</form>




<script src="script.js"></script>



<script>
document.addEventListener("DOMContentLoaded", () => {
    const cart = JSON.parse(localStorage.getItem(CART_KEY)) || [];
    const orderItemsDiv = document.getElementById("order_items");
    const subtotalEl = document.getElementById("subtotal");
    const totalEl = document.getElementById("total");
    const cartDataInput = document.getElementById("cart_data");
    const totalAmountInput = document.getElementById("total_amount");

    if (!cart.length) {
        orderItemsDiv.innerHTML = "<p>Your cart is empty</p>";
        return;
    }

    let subtotal = 0;
    orderItemsDiv.innerHTML = "";

    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;

        orderItemsDiv.innerHTML += `
            <div class="summary-item">
                <img src="${item.image}" class="summary-img">
                <div class="summary-details">
                    <p><strong>${item.title}</strong></p>
                    <p>Qty: ${item.quantity}</p>
                    <p>Rs ${itemTotal.toFixed(2)}</p>
                </div>
            </div>
        `;
    });

    subtotalEl.innerText = subtotal.toFixed(2);
    totalEl.innerText = subtotal.toFixed(2);

    // Send data to PHP
    cartDataInput.value = JSON.stringify(cart);
    totalAmountInput.value = subtotal.toFixed(2);
});
</script>


</body>
</html>
<?php include 'footer.php'; ?>
