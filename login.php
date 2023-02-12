<?php

class Login {
    private $conn;
    private $email;
    private $password;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function setData($postData) {
        $this->email = mysqli_real_escape_string($this->conn, $postData['email']);
        $this->password = md5($postData['password']);
    }

    public function login() {
        $select = "SELECT * FROM user_form WHERE email = '$this->email' && password = '$this->password' ";
        $result = mysqli_query($this->conn, $select);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            if ($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_page.php');
            } elseif ($row['user_type'] == 'user') {
                $_SESSION['user_name'] = $row['name'];
                header('location:index.php');
            }
        } else {
            echo '<script>alert("Incorrect email or password! Try again.")</script>';
        }
    }
}

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $login = new Login($conn);
    $login->setData($_POST);
    $login->login();
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
            <div class="form-control" style="margin-left: 10px;">
                <div class="form-login" style="padding-right:10px">
                    <form action="" method="post">
                        <?php
                        if (isset($error)) {
                            foreach ($error as $error) {
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                        ?>
      <br>
      <label>Email</label>
      <input type="email" name="email" required placeholder="Enter your email">
      <label>Password</label>
      <input type="password" name="password" required placeholder="Enter your password">
      <div style="padding-top:10px">
      <input type="submit" name="submit" value="Login now" class="form-btn" style="cursor:pointer;background-color:#159b83;color:white;">
      </div>
      <p>Don't have an account? <a href="SignUp.php">Register now!</a></p>
</form>
</div>
</div>
</body>
</html>