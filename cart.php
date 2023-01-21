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
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active"  href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
            <i id="bar" class="fa fa-outdent"></i>
        </div>
        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70%!</p>

    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="fa fa-times-circle"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-times-circle"></i></a></td>
                    <td><img src="img/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa fa-times-circle"></i></a></td>
                    <td><img src="img/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td><input type="number" value="1" name="" id=""></td>
                    <td>$118.19</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="cuopon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" name="" id="" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>


    <?php include 'footer.php';?>

    <script src="script.js"></script>

</body>

</html>