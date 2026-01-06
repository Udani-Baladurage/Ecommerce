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
        <img src="image/banner (7).jpg" class="banner-img">

            <div class="banner-overlay">
                <h1>DRESSES</h1>
                <p>Style That Flows</p>
            </div>
        </section>

        


        <!-- PRODUCTS -->
        <section id="product" >
            
            <div class="product-container">
                
                <div class="pro product-box">
                    <img src="image/dress12.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Printed basic shift dress with half placket</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/dress2.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title"> 	Sleeveless maxi wrap dress</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                <div class="pro product-box">
                    <img src="image/dress3.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Printed maxi dress with self fabric tie</h5>
                    <h4 class="price">LKR 3,800.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>
                <div class="pro product-box">
                    <img src="image/dress4.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Batik floral basic dress</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">       
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress14.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Strappy Tiered Panel Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress15.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Short Sleeve Button Down Dress With Mandarin Collar</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress13.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">		Sleeveless Tiered Maxi Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress16.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Strappy Shirring Detailed Dress With Tiered Panel</h5>
                    <h4 class="price">LKR 3,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress9.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Panel Printed Floor Length Maxi Dress</h5>
                    <h4 class="price">LKR 4,500.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress8.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">	Bra Cut Printed Maxi Dress</h5>
                    <h4 class="price">LKR 4,000.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress11.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">Light Blue Short Sleeve Polka Dot Dress</h5>
                    <h4 class="price">LKR 4,800.00</h4>
                    </div>
                    <button class="add-cart">   
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </div>

                 <div class="pro product-box">
                    <img src="image/dress1.webp" alt="Product 1">
                    <div class="des">
                    <h5 class="product-title">		Sleeveless smocking dress</h5>
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
