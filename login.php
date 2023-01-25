<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
   
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>  

   


    <div class="signup">
        <div class="container">
            <div class="header">
                <h2 style="padding-left : 155px;color:white; font-size: 40px;">Login Form</h2>
            </div>
            <form action="" class="form" id="form">
                
               
                <div class="form-control">
                <form action="" method="post">
      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <label> Email</label>
      <input type="email" name="email" required placeholder="enter your email">
      <label>Password</label>
      <input type="password" name="password" required placeholder="enter your password">
      <label> </label>
      <input type="submit" name="submit" value="login now" class="btnn">
   </form>
   </div>
   <p>don't have an account? <a href="SignUp.php"><button class="normal">Sign Up</button></a></p>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="scriptLogin.js"></script>
</body>
</html>
