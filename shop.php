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
echo '<section id="header">';
echo '<a href="#"><img src="img/logo.png" class="logos" alt=""></a>';
echo '<div>';
echo '<ul id="navbar">';
echo '<li><a href="index.php">Home</a></li>';
echo '<li><a class="active" href="shop.php">Shop</a></li>';
echo '<li><a href="blog.php">Blog</a></li>';
echo '<li><a href="about.php">About</a></li>';
echo '<li><a href="contact.php">Contact</a></li>';
echo '<li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>';
echo '<a href="#" id="close"><i class="fa fa-times"></i></a>';
echo '</ul>';
echo '</div>';
echo '<div id="mobile">';
echo '<i class="fa fa-shopping-bag"></i>';
echo '<i id="bar" class="fa fa-outdent"></i>';
echo '';
echo '</div>';
echo '';
echo '</section>';
?>
    <section id="page-header">
        <h2>Super offers</h2>
        <p>Save more with coupons & up to 50% off!</p>
    </section>    
<?php
 $connect = mysqli_connect("localhost","root","","user_db");
 $query = "SELECT * FROM card_item";
 $result = mysqli_query($connect,$query);
?><section id="product1" class="section-p1"> 
<div class="pro-container"><?php
 while($row = mysqli_fetch_array($result)){?>

            <div class="pro" onclick="window.location.href='sproduct.php';">
                <img src="<?=$row['image'] ?>" alt="">
                <div class="des">
                    <span><?=$row['name'] ?></span>
                    <h5><?=$row['model'] ?></h5>
                    <h4><?=$row['price'] ?>€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
        
            </div>
            <?php }
 ?>
 
            </div>
            
 </section>


  <!--  <section id="product1" class="section-p1"> 
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img//products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img//products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img//products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct.html';">
                <img src="img//products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronuat T-Shirts</h5>
                    <h4>78€</h4>
                </div>
                <a href="#"> <i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" >
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
        </section> 
-->
         <!-- Slider -->
<div class="slider-container">
    <div id="slider">
        <div class="slides">
          <div class="slider">
            <div class="legend"></div>
            <div class="content">
            </div>
            <div class="image">
              <img src="img/shop/sh1.png">
              <div class="image-text">
                  Cheap Prices 
              </div>
            </div>
          </div>
          <div class="slider">
            <div class="legend"></div>
            <div class="content">
            </div>
            <div class="image">
              <img src="img/shop/sh2.jpg">
              <div class="image-text">
                Buy online in just one click!
              </div>
            </div>
          </div>
          <div class="slider">
            <div class="legend"></div>
            <div class="content">
            </div>
            <div class="image">
              <img src="img/shop/sh5.jpg">
              <div class="image-text">
                Fast, Easy and Flexible
              </div>
            </div>
          </div>
          <div class="slider">
            <div class="legend"></div>
            <div class="content">
            </div>
            <div class="image">
              <img src="img/shop/sh3.jpg">
              <div class="image-text">
              Find us in App Store too
            </div></div>
          </div>
        </div>
        <div class="switch">
          <ul>
            <li>
              <div class="on"></div>
            </li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
            
        <section id="product1" class="section-p1"> 
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
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa fa-angle-double-right"></i></a>
    </section>



<?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>