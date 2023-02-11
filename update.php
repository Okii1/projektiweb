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
                        <li> <span><a href="search.php" class="fa fa-search">Search</a></span> </li>    
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
                <h3>User Update Form</h3>
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
        $user_id = $_GET['id']; 

        $name = $_POST['name'];

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $password = md5($_POST['password']);


        $user_type = $_POST['user_type']; 

        $sql = "UPDATE `user_form` SET `name`='$name',`lastname`='$lastname',`email`='$email',`password`='$password',`user_type`='$user_type' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            header('location:user.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `user_form` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $user_type = $row['user_type'];

            $id = $row['id'];

        } 

    ?>
         <div class="form-control">

         

         <form action="" method="post">


           <label> First name:</label><br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            <label>Last name:</label><br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>

            <label>Email: </label><br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            <label>Password:</label><br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

           <label> User type:</label><br>
            <select name="user_type"><br>
                <option value="<?php echo $user_type; ?>"><?php echo $user_type; ?></option>
              
            </select><br>
            <br><br>

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



