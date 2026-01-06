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
        <img src="image/banner (4).jpg" class="banner-img">

            <div class="banner-overlay">
                <h1>NEW ARRIVALS</h1>
                <p>Fresh Styles Just Dropped</p>
            </div>
        </section>


        


        <!-- PRODUCTS -->
        <section id="product" >
            
            <div class="product-container">
                
                <div class="pro product-box">
                    <img src="image/newarrivals1.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">V Neck Inen Dress With Kimono Sleeve</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/newarrivals2.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Short Sleeve Button Down Dress With Mandarin Collar</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/newarrivals3.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">V Neck Button Down Dress</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/newarrivals4.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Uneven Hem Midi Dress With Side Ruched Detail</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals5.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Balloon Sleeve V- Neck Top</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals6.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Batik top with hidden buttonhole placket</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals7.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Mock wrap midi skirt</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals8.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Side Draping Detailed Shirt</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals9.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Printed Crop Top</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals10.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">V Neck Oversized Button Down Ramie Blouse</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Wide Leg Pant With Pleats</h5>
                    <h4 class="price">LKR 4,800.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/newarrivals12.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Round Neck Trapeze Dress</h5>
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
