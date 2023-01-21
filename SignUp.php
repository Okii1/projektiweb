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

        <form action="" class="form" id="form">
            <div class="form-control">
                <label>First Name</label>
                <input type="text" name="" id="username" placeholder="Enter Your First Name" autocomplete="off">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label>Last Name</label>
                <input type="text" name="" id="lastname" placeholder="Enter Your Last Name" autocomplete="off" >
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label>Email</label>
                <input type="text" name="" id="email" placeholder="Enter Your Email" autocomplete="off">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label>Password</label>
                <input type="password" name="" id="password" placeholder="Enter Your Password" autocomplete="off">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="" id="cpassword" placeholder="Confirm Password" autocomplete="off">
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <input type="submit" value="Submit" class="btn">
        </form>
    </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html>