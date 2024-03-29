<?php 

class ContactForm {
    private $conn;

    public function __construct() {
        include "config.php";
        $this->conn = $conn;
    }

    public function create($name, $subject, $email, $message) {
            $sql = "INSERT INTO `contact_form`(`name`, `subject`, `email`, `message`) VALUES ('$name','$subject','$email','$message')";

            $result = $this->conn->query($sql);

            if ($result == TRUE) {
                header('location:Dashboard.php');
            } else {
                echo "Error:" . $sql . "<br>" . $this->conn->error;
            } 
        }
    }

    if (isset($_POST['submit'])) {
        $contactForm = new ContactForm();
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $contactForm->create($name, $subject, $email, $message);
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
                        <span class="fa fa-dashboard">Dashboard</span>
                        <li> <span><a href="user.php" class="fa fa-user">User</a></span> </li>
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
                <h3>Create Form For Contact Dashboard<h3>
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
            <label>Email: </label><br>
            <input type="text" name="email" required placeholder="Enter the email..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Subject: </label><br>
            <input type="text" name="subject" required placeholder="Enter the subject..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <label>Message: </label><br>
            <input type="text" name="message" required placeholder="Enter the message..."style="padding: 6px 10px;margin: 8px 0;"><br>
            <div style="padding-top:10px;">
            <input type="submit" name="submit" value="SUBMIT" style="background: #0066A2;color: white;border:none;padding: 10px 22px;margin: 1px .5px;font: bold15px arial,sans-serif;cursor:pointer;">
            </div>
        </form> 
        </div>
    </body>
</html> 