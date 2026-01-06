<?php
   
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
        <link rel="stylesheet" href="aboutus.css">
      
        
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>

    <body>
        <?php include 'navbar.php'; ?>


    
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




 <!-- ABOUT US SECTION -->
<section class="about-us">
    <div class="about-container">

        <h1 class="about-title">ABOUT US</h1>

        <p class="about-text">
            PINKORA is a contemporary women’s fashion brand inspired by elegance,
            confidence, and modern style. Our collections are designed to celebrate
            individuality while embracing comfort and timeless beauty.
        </p>

        <p class="about-text">
            Inspired by the journey of iconic Sri Lankan fashion houses, PINKORA
            reflects a deep appreciation for craftsmanship, quality, and sustainability.
            Every piece is thoughtfully designed to suit the lifestyle of today’s
            modern woman.
        </p>

        <p class="about-text">
            From everyday essentials to statement pieces, our women’s collections
            are created with attention to detail, durability, and graceful aesthetics.
            We believe fashion should empower women and tell a story of confidence
            and authenticity.
        </p>

        <p class="about-text highlight">
            Join PINKORA — where every outfit is a blend of style, comfort,
            and timeless elegance.
        </p>

    </div>
</section>





    

<script src="script.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>