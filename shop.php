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
        <link rel="stylesheet" href="product.css">
        <link rel="stylesheet" href="banner.css">
      
        
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

        <!--banner-->
        <section class="banner">
        <img src="image/banner (6).jpg" class="banner-img">

            <div class="banner-overlay">
                <h1>Discover Your Style</h1>
            </div>
        </section>




        <!-- PRODUCTS -->
        <section id="product" >
            
            <div class="product-container">
                
                <div class="pro product-box">
                    <img src="image/party4.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Sweetheart Neckline Paneled Mini Dress</h5>
                    <h4 class="price">LKR 5,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/party5.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Satin Halter Bow Neck Tie Dress</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/bottom14.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Wide leg pin tuck detailed pant</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/bottom13.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Elasticated waist midi skirt</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom17.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Basic drawcord pant</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress15.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Short Sleeve Button Down Dress With Mandarin Collar</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom7.jpg" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">High waisted wide leg pant</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom8.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Culotte Pant</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom9.jpg" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Maxi skirt with elasticated waist</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom10.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	A Line Midi Skirt</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Drawcord Maxi Skirt</h5>
                    <h4 class="price">LKR 4,800.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/bottom12.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Tied Panel Basic Maxi Skirt</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>


            </div>
        </section>











        
 <?php
    // index.phpinclude 'footer.php';
    include 'footer.php';
    ?>

                



<script src="script.js">
    
</script>

</body>
</html>
