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
                        <li> <span><a href="searchUsers.php" class="fa fa-search-plus">Search Users</a></span> </li>     
                        <li> <span><a href="search.php" class="fa fa-search-minus">Search Products</a></span> </li>  
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
                <h3> Update Products</h3>
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

    if (isset($_POST['update'])) {
        $product_id = $_GET['id']; 

        $name = $_POST['name'];

        $model = $_POST['model'];

        $image = $_POST['image'];

        $price = $_POST['price'];

        $sql = "UPDATE `card_item` SET `name`='$name',`model`='$model',`image`='$image',`price`='$price' WHERE `id`='$product_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            header('location:product.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $product_id = $_GET['id']; 

    $sql = "SELECT * FROM `card_item` WHERE `id`='$product_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $model = $row['model'];

            $image = $row['image'];

            $price = $row['price'];

            $id = $row['id'];

        } 

    ?>
         <div class="form-control">

        

        <form action="" method="post">

        <label >Name : </label><br>
       
        <input type="text" name="name" value="<?php echo $name; ?>"><br>

        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
        
        <label>Model : </label><br>
            <input type="text" name="model" value="<?php echo $model; ?>"><br>
            <label>Image : </label><br>
            <input type="text" id="img" name="image" value="<?php echo $image; ?>"> <br>
            <label>Price : </label><br>
            <input type="text" name="price" value="<?php echo $price; ?>"><br>
            
                    
            <input type="submit" value="Update" name="update">



            </form> 
        </div>
        

    <?php

} else{ 

    header('Location: dashboard.php');

} 

}

?> 

</body>
</html>


