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
                    <a href="">
                        <span class="ti-home"></span>
                        <span>  <a href=Dashboard.php class="fa fa-dashboard">Dashboard </a></span>
                        <li> <span><a href="user.php" class="fa fa-user">User</a></span> </li>
                        <li> <span><a href="product.php" class="fa fa-pencil-square">Product</a></span> </li>       
                        <li> <span><a href="logout.php" class="fa fa-sign-out">LogOut</a> </span> </li>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
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
                        <?php 

include "config.php";

    if (isset($_POST['submit'])) {
       
        $name = $_POST['name'];

        $model = $_POST['model'];

        $image = $_POST['image'];

        $price = $_POST['price'];

        $sql = "INSERT INTO `card_item`(`name`, `model`, `image`, `price`) VALUES ('$name','$model','$image','$price')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header('location:product.php');

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>
         <div class="form-control">

         <h2>Create Form For Products</h2>

          <form action="" method="post">

         <label >Name : </label><br>
            <input type="text" name="name" required placeholder="enter your name"><br>
            <label>Model : </label><br>
            <input type="text" name="model" required placeholder="enter your model"><br>
            <label>Image : </label><br>
            <input type="file" id="myFile" name="image" ><br>
            <label>Price : </label><br>
            <input type="text" name="price" required placeholder="enter your Price"><br>
            
                  
            <input type="submit" name="submit" value="submit">

        

        </form> 
        </div>

    </body>

</html> 

