<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oki</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logos" alt=""></a>
        <div>
       
            <ul id="navbar">
            <h4>welcome <span><?php echo $_SESSION['user_name'] ?></span></h4>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
                <li><a href="logout.php" class="fa fa-sign-out"></a></li>
            </ul>
        </div>
        <div id="mobile">
            <i class="fa fa-shopping-bag"></i>
            <i id="bar" class="fa fa-outdent"></i>
            
        </div>
        
    </section>

  <?php
echo '';
echo '<section id="hero">';
echo '<h4>Trade-in-offer</h4>';
echo '<h2>Super value deals</h2>';
echo '<h1>On all products</h1>';
echo '<p>Save more with coupons & up to 50% off!</p>';
echo '<a href="shop.php"><button>Shop now</button></a>';
echo '</section>';
?>


    

<?php
echo '<section id="feature" class="section-p1">';
echo '<div class="fe-box">';
echo '<img src="img/features/f1.png" alt="">';
echo '<h6>Free Shipping</h6>';
echo '</div>';
echo '<div class="fe-box">';
echo '<img src="img/features/f2.png" alt="">';
echo '<h6>Online Order</h6>';
echo '</div>';
echo '<div class="fe-box">';
echo '<img src="img/features/f3.png" alt="">';
echo '<h6>Save Money</h6>';
echo '</div>';
echo '<div class="fe-box">';
echo '<img src="img/features/f4.png" alt="">';
echo '<h6>Promotions</h6>';
echo '</div>';
echo '<div class="fe-box">';
echo '<img src="img/features/f5.png" alt="">';
echo '<h6>Happy Sell</h6>';
echo '</div>';
echo '<div class="fe-box">';
echo '<img src="img/features/f6.png" alt="">';
echo '<h6>Support</h6>';
echo '</div>';
echo '</section>';
echo '';
?>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Colletion New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img//products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            
            
        </div>
        
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>50% Off</span> - All t-Shirts</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Colletion New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img//products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img//products/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            
            
        </div>
        
    </section>
    
    <section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at myshop</span>
        <button class="white">Learn more</button>
    </div>
    <div class="banner-box2">
        <h4>Summer</h4>
        <h2>upcoming season</h2>
        <span>The best classic dress is on sale at myshop</span>
        <button class="white">Collection</button>
    </div>
</section>


<section id="banner3">
    <div class="banner-box">
        <h2>Sesonal Sale</h2>
        <h3>Winter Collection -30% off</h3>
    </div>
    <div class="banner-box2">
        <h2>New Footwear Collection</h2>
        <h3>Winter Collection -30% off</h3>
    </div>
    <div class="banner-box3">
        <h2>T-Shirts</h2>
        <h3>New Trendy</h3>
    </div>
</section>

    <?php include 'footer.php';?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html>