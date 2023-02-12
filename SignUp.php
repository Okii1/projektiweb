<?php

class User {
   private $conn;
   private $error = [];
   
   public function __construct() {
      @include 'config.php';
      $this->conn = $conn;
   }

   public function addUser() {
      if (isset($_POST['submit'])) {
         $name = mysqli_real_escape_string($this->conn, $_POST['name']);
         $lastname = mysqli_real_escape_string($this->conn, $_POST['lastname']);
         $email = mysqli_real_escape_string($this->conn, $_POST['email']);
         $pass = md5($_POST['password']);
         $cpass = md5($_POST['cpassword']);
         $user_type = $_POST['user_type'];

         $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

         $result = mysqli_query($this->conn, $select);

         if (mysqli_num_rows($result) > 0) {
            $this->error[] = 'User already exists!';
         } 

      else {
            if ($pass != $cpass) {
               $this->error[] = 'Password does not match!';
            } 
            else {
               $insert = "INSERT INTO user_form(name, lastname, email, password, user_type) VALUES('$name','$lastname','$email','$pass','$user_type')";
               mysqli_query($this->conn, $insert);
               header('location:login.php');
            }
         }
      }
   }

   public function getErrors() {
      return $this->error;
   }
}

$user = new User();
$user->addUser();
$errors = $user->getErrors();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
   <link rel="stylesheet" href="style.css">
   </head>
<body>
  
<div class="signup">
    <div class="container">
        <div class="header">
        <h2 style="padding-left:155px; color:white; font-size: 40px;">SignUp Form</h2>
        </div>
        <div class="form-control" style="margin-left: 10px;">

<div class="form-signup" style="padding-right:10px">
<form action="" method="post">
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
    <br>
   <label>Name</label>
   <input type="text" name="name" required placeholder="Enter your name...">
   <label style="padding-top:10px">Last Name</label>
   <input type="text" name="lastname" required placeholder="Enter your last name...">
   <label style="padding-top:10px">Email</label>
   <input type="email" name="email" required placeholder="Enter your email...">
   <label style="padding-top:10px">Password</label>
   <input type="password" name="password" required placeholder="Enter your password...">
   <label style="padding-top:10px">Confirm Password</label>
   <input type="password" name="cpassword" required placeholder="Confirm your password...">
   <br>
   <select name="user_type">
      <option value="user">User</option>
      <option value="admin">Admin</option>
   </select>
   <div class="submit-btn" style="padding-top:20px;">
   <input type="submit" name="submit" value="Submit" class="btn" style="cursor:pointer;background-color:#159b83;color:white;">
</div>
</form>
</div>
<p>Already have an account? <a href="login.php">Login here! </a></p> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
</body>
</html> 