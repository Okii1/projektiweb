<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, lastname, email, password, user_type) VALUES('$name','$lastname','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
  
<div class="signup">
    <div class="container">
        <div class="header">
            <h2 style="padding-left : 155px;color:white; font-size: 40px;">SignUp Form</h2>
        </div>

    
      <div class="form-control">

<form action="" method="post">
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
    <label >Name</label>
   <input type="text" name="name" required placeholder="enter your name">
   <label>Lastname</label>
   <input type="text" name="lastname" required placeholder="enter your lastname">
   <label>Email</label>
   <input type="email" name="email" required placeholder="enter your email">
   <label>Password</label>
   <input type="password" name="password" required placeholder="enter your password">
   <label>Confirm Password</label>
   <input type="password" name="cpassword" required placeholder="confirm your password">
   <select name="user_type">
      <option value="user">user</option>
      <option value="admin">admin</option>
   </select>
   <input type="submit" name="submit" value="register now" class="btn">
   
</form>
<p>You have a account?<a href="login.php"><button class="normal">login</button> </a></p> 


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html> 