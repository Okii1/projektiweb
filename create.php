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

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $password = md5($_POST['password']);

        $user_type = $_POST['user_type']; 

        $sql = "INSERT INTO `user_form`(`name`, `lastname`, `email`, `password`, `user_type`) VALUES ('$name','$lastname','$email','$password','$user_type')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header('location:user.php');

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>
         <div class="form-control">

         <h2>User Update Form</h2>

          <form action="" method="post">

         <label >Name : </label><br>
            <input type="text" name="name" required placeholder="enter your name"><br>
            <label>Lastname : </label><br>
            <input type="text" name="lastname" required placeholder="enter your lastname"><br>
            <label>Email : </label><br>
            <input type="email" name="email" required placeholder="enter your email"><br>
            <label>Password : </label><br>
            <input type="password" name="password" required placeholder="enter your password"><br>
            <label>Confirm Password : </label><br>
            <input type="password" name="cpassword" required placeholder="confirm your password"><br>
            <select name="user_type"><br>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select><br>

            <input type="submit" name="submit" value="submit">

        

        </form> 
        </div>

    </body>

</html> 


