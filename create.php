<?php

class User {
    private $conn;

    public function __construct() {
        include "config.php";
        $this->conn = $conn;
    }

    public function create($name, $lastname, $email, $password, $user_type) {
        $sql = "INSERT INTO `user_form`(`name`, `lastname`, `email`, `password`, `user_type`) VALUES ('$name','$lastname','$email','$password','$user_type')";
       
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            header('location:user.php');
        } else {
            echo "Error:" . $sql . "<br>" . $this->conn->error;
        }
    }
}

if (isset($_POST['submit'])) {
    $user = new User();
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];
    $user->create($name, $lastname, $email, $password, $user_type);
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
                        <li> <span class="fa fa-user">User</span> </li>
                        <li> <span><a href="product.php" class="fa fa-pencil-square">Product</a></span> </li> 
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
            <h3>Create Form For Users</h3>
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
          <form action="" method="post">
         <label >Name: </label><br>
            <input type="text" name="name" required placeholder="Enter the name..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Last Name: </label><br>
            <input type="text" name="lastname" required placeholder="Enter the last name..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Email: </label><br>
            <input type="email" name="email" required placeholder="Enter the email..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Password: </label><br>
            <input type="password" name="password" required placeholder="Enter the password..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Confirm Password: </label><br>
            <input type="password" name="cpassword" required placeholder="Confirm the password..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <select name="user_type"><br>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <div style="padding-top:10px;">
            <input type="submit" name="submit" value="SUBMIT" style="background: #0066A2;color: white;border:none;padding: 10px 22px;margin: 1px .5px;font: bold15px arial,sans-serif;cursor:pointer;">
            </div>
        </form> 
        </div>
    </body>
</html> 