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
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logos" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <i class="fa fa-shopping-bag"></i>
            <i id="bar" class="fa fa-outdent"></i>
            
        </div>
        
    </section>
    
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
            <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
            <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                        <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
                </div>
        </div>
        <div class="single-prodetails">
            <h6>Home / T-Shirts</h6>
            <h4>Men's Fashion T-Shirts</h4>
            <h2>$139.0</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz per 
                sq. yd. fabric constructef from 100% cotton, this classic fit preshrunk
                jersey knit provides unmatched cmfort with each wear. Featuring a taped 
                neck and shoulder, and a seamless double-needle collar, and available in 
                a range of colors, it offers it all in the ultimates head-turining package.
            </span>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
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
            
            
        </div>
        
    </section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <li><a href="SignUp.html"> <button class="normal">Sign Up</button> </a></li>
        <p>Get E-mail updates our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form" >
        <input type="text" placeholder="Your email address">
        <a href="login.html"> <button class="normal">LogIn</button> </a>
    </div>

    <?php include 'footer.php';?>

<script>
    var MainImg = document.getElementById("MainImg");
    var smalling = document.getElementsByClassName("small-img");

    smalling[0].onclick = function(){
        MainImg.src = smalling[0].src;
    }
    smalling[1].onclick = function(){
        MainImg.src = smalling[1].src;
    }
    smalling[2].onclick = function(){
        MainImg.src = smalling[2].src;
    }
    smalling[3].onclick = function(){
        MainImg.src = smalling[3].src;
    }
    </script>

    <script src="script.js"></script>
</body>
</html>