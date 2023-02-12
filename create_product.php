<?php

class Product {
  private $conn;

  public function __construct() {
    include "config.php";
    $this->conn = $conn;
  }

  public function create($name, $model, $image, $price) {
    $sql = "INSERT INTO `card_item`(`name`, `model`, `image`, `price`) VALUES ('$name','$model','$image','$price')";

    $result = $this->conn->query($sql);

    if ($result == TRUE) {
      header('location:product.php');
    } else {
      echo "Error:". $sql . "<br>". $this->conn->error;
    } 
  }
}

if (isset($_POST['submit'])) {
  $product = new Product();
  $name = $_POST['name'];
  $model = $_POST['model'];
  $image = $_POST['image'];
  $price = $_POST['price'];
  $product->create($name, $model, $image, $price);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>User</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
        <a href="#"><img src="img/logo.png" class="logos" alt=""></a>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                        <span class="ti-home"></span>
                        <span>  <a href=Dashboard.php class="fa fa-dashboard">Dashboard </a></span>
                        <li> <span><a href="user.php" class="fa fa-user">User</a></span> </li>
                        <li> <span class="fa fa-pencil-square">Product</span> </li>  
                        <li> <span><a href="searchUsers.php" class="fa fa-search-plus">Search Users</a></span> </li>      
                        <li> <span><a href="search.php" class="fa fa-search-minus">Search Products</a></span> </li>      
                        <li> <span><a href="logout.php" class="fa fa-sign-out">LogOut</a> </span> </li>
                </li>
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <h3>Create Form For Products<h3>
                <span class="ti-search"></span>
                
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>
        
        <main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">          
                        <div class="table-responsive">
         <div class="form-control">
         <h2></h2>
          <form action="" method="post">
         <label >Name: </label><br>
            <input type="text" name="name" required placeholder="Enter the name..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Model: </label><br>
            <input type="text" name="model" required placeholder="Enter the model..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Image: </label><br>
            <input type="file" id="myFile" name="image" style="padding-top:10px;padding-bottom:10px;"><br>
            <label>Price: </label><br>
            <input type="text" name="price" required placeholder="Enter the Price..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <div style="padding-top:10px;">
            <input type="submit" name="submit" value="SUBMIT" style="background: #0066A2;color: white;border:none;padding: 10px 22px;margin: 1px .5px;font: bold15px arial,sans-serif;cursor:pointer;">
            </div>
        </form> 
        </div>
    </body>
</html> 