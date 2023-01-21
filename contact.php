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
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a  class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
            <i id="bar" class="fa fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa fa-map"></i>
                    <p>Prishtina</p>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <p>contact@example.com </p>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <p>contact@example.com </p>
                </li>
                <li>
                    <i class="fa fa-clock"></i>
                    <p>Monday to Saturday: 8.00am to 16.pm </p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.8088025254456!2d-1.256555484681452!3d51.754819700404106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sbd!4v1637232208485!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    

    <section id="form-details">
        <form action="" id="form">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you </h2>
            

            <div class="form-control">
              
                <input type="text" name="" id="name" placeholder="Your Name">             
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
               
                <input type="text" name="" id="email" placeholder="E-mail">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
               
                <input type="text" name="" id="subject" placeholder="Subject">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                
                <textarea name="" id="message" cols="24" rows="5" placeholder="Your Message"></textarea>             
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
             <br>
                <small>Error Message</small>
            </div>
            <br>
            <input type="submit" class="btn" value="Submit">

        </form>
        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe </span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-m1 section-p1">
        <div class="newstext">
            <h4>Sign Up For Newsletters </h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" name="" placeholder="Your email address" id="">
            <a href="login.html"> <button class="normal">LogIn</button> </a>
        </div>
    </section>

    <?php include 'footer.php';?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="scriptContactForm.js"></script>
</body>

</html>