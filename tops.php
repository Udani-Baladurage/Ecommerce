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
        <img src="image/banner (8).jpg" class="banner-img">

            <div class="banner-overlay">
                <h1>TOPS  COLLECTION</h1>
                <p>Everyday Essentials</p>
            </div>
        </section>

        


        <!-- PRODUCTS -->
        <section id="product" >
            
            <div class="product-container">
                
                <div class="pro product-box">
                    <img src="image/top1.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Sleeveless Printed Black & White Shirt</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/top14.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Long Sleeve Printed Blouse</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/top3.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Oversized Navy Blue T-shirt</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/top4.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">		Orchid Printed Oversized T-shirt</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top5.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Round Neck Linen Blouse</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top6.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Bathik Kurtha Top</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top7.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Batik Shirt Kurtha</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top8.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Crop top with shoulder tie ups</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top9.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Tie-up Strap Crop Top</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top10.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">		Loose Fitted Button Down Crop Top</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Elasticated Neckline Blouse With Tie</h5>
                    <h4 class="price">LKR 4,800.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/top12.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Cropped Cami</h5>
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
