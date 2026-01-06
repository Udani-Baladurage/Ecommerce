<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PINKORA</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="shop.css">
      
        
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

     
<!-- Hero Slider -->
<div class="hero">
  <!-- Slide 1 -->
  <div class="hero-slide active">
    <img src="image/hero1.png" alt="New Collection">
  <div class="hero-text1">
     
    <pre>Discover Your Style</pre>
     
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="hero-slide">
    <img src="image/hero2.jpg" alt="Exclusive Offers">
    <div class="hero-text2">
      <pre>Exclusive Offers</pre>
      
     
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="hero-slide">
    <img src="image/hero3.jpg" alt="Free Delivery">
    <div class="hero-text3">
      
      <pre>Celebrate Every 
             Movement </pre>
        </p>
     
    </div>
  </div>
</div>




   

        <!-- FEATURED PRODUCTS -->
        <section id="product1" >
            <h2>Fetured Products</h2>
            <p>Winter Collection New Modern Design</p>
            <div class="product-container">
                <div class="pro product-box">
                    <img src="image/top9.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Crop top with shoulder tie ups</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/top11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Elasticated Neckline Blouse With Tie</h5>
                    <h4 class="price">LKR 2,500.00</h4>
                    </div>
                <button class="add-cart">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/bottom6.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Women's Teal Textured Cargo Pant</h5>
                    <h4 class="price">LKR 3,000.00</h4>
                    </div>
                    <button class="add-cart">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/formal11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Blue Striped Blouse with Metal Neck Clasp Detail</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/dress2.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Sleeveless maxi wrap dress</h5>
                    <h4 class="price">LKR 3,000.00</h4>
                    </div>
                    <button class="add-cart">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/bottom7.jpg" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">High waisted wide leg pant</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/dress8.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Bra Cut Printed Maxi Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/top10.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Loose Fitted Button Down Crop Top</h5>
                    <h4 class="price">LKR 2,700.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/dress7.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Sage Green Textured V-Neck Babydoll Mini Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/top12.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Cropped Cami</h5>
                    <h4 class="price">LKR 3,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/formal2.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Pleated Sleeve Detailed Blouse</h5>
                    <h4 class="price">LKR 2,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/dress3.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Printed maxi dress with self fabric tie</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">               
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
            </div>
        </section>





        <!-- BEST SELLING PRODUCTS -->
        <section id="product2" >
            <h2>Best Selling</h2>
            <p>Our Most Loved Looks</p>
            <div class="product-container">
                
                <div class="pro product-box">
                    <img src="image/dress13.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Sleeveless Tiered Maxi Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/top14.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title"> Long Sleeve Printed Blouse</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/top3.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Light Blue Short Sleeve Polka Dot Dress</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/top4.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Navy Blue Scalloped Hem Blouse</h5>
                    <h4 class="price">LKR 2,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
            </div>
        </section>





        <section id="category-banners">
            <h2>Shop By Category</h2>
            <p>Find Your Favorites</p>

            <div class="category-banners">
                <div class="category-banner">
                    <a href="tops.php">
                        <img src="image/bottom11.webp" alt="Tops">
                        <div class="banner-text">Tops</div>
                    </a>
            </div>
            <div class="category-banner">
            <a href="office.php">
                <img src="image/formal2.webp" alt="Office Wear">
                <div class="banner-text">Office Wear</div>
            </a>
            </div>
            <div class="category-banner">
                <a href="Dresses.php">
                    <img src="image/dress4.webp" alt="Dresses">
                    <div class="banner-text">Dresses</div>
            </a>
            </div>
            <div class="category-banner">
                <a href="party.php">
                    <img src="image/party2.webp" alt="Party Wear">
                    <div class="banner-text">Party Wear</div>
            </a>
        </div>
    </div>
</section>

 <!-- Mid-Page CTA Banner -->
    <section id="cta-banner">
        <div class="cta-content">
            <h2>Subscribe & Save!</h2>
            <p>Sign up for our newsletter and get 10% off your first order.</p>
            <a href="#" class="cta-button">Subscribe Now</a>
        </div>
    </section>

    <!-- Global Subscribe Message -->
    <div id="global-subscribe-message"></div>

    <!-- Subscribe Modal -->
    <div id="subscribe-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get 10% off your first order!</p>

            <!-- Form -->
            <form id="subscribe-form">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

 <?php
    // index.phpinclude 'footer.php';
    include 'footer.php';
    ?>

           



<script src="script.js">
    
</script>



    

    

</body>
</html>

