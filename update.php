<?php 

class User {
    private $conn;

    public function __construct() {
        include "config.php";
        $this->conn = $conn;
    }

    public function updateUser() {
        if (isset($_POST['update'])) {
            $user_id = $_GET['id']; 

            $name = $_POST['name'];

            $lastname = $_POST['lastname'];

            $email = $_POST['email'];

            $password = md5($_POST['password']);

            $user_type = $_POST['user_type']; 

            $sql = "UPDATE `user_form` SET `name`='$name',`lastname`='$lastname',`email`='$email',`password`='$password',`user_type`='$user_type' WHERE `id`='$user_id'"; 

            $result = $this->conn->query($sql); 

            if ($result == TRUE) {

                header('location:user.php');

            } else {

                echo "Error:" . $sql . "<br>" . $this->conn->error;

            }
        }
    }

    public function getUserData() {
        if (isset($_GET['id'])) {

            $user_id = $_GET['id']; 

            $sql = "SELECT * FROM `user_form` WHERE `id`='$user_id'";

            $result = $this->conn->query($sql); 

            if ($result->num_rows > 0) {        

                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $password  = $row['password'];
                    $user_type = $row['user_type'];
                    $id = $row['id'];
                } 

            return array(
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'password' => $password,
                'user_type' => $user_type,
                'id' => $id
            );
            }
        }
    }
}

$user = new User();
$userData = $user->getUserData();
$user->updateUser();

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
         <div class="form-control">
         <form action="" method="post">
           <label> First name:</label><br>
            <input type="text" name="name" value="<?php echo $userData['name']; ?>" style="padding: 6px 10px;margin: 8px 0;">
            <input type="hidden" name="user_id" value="<?php echo $userData['id']; ?>"style="padding: 6px 10px;margin: 8px 0;">
            <br>
            <label>Last name:</label><br>
            <input type="text" name="lastname" value="<?php echo $userData['lastname']; ?>"style="padding: 6px 10px;margin: 8px 0;">
            <br>
            <label>Email: </label><br>
            <input type="email" name="email" value="<?php echo $userData['email']; ?>"style="padding: 6px 10px;margin: 8px 0;">
            <br>
            <label>Password:</label><br>
            <input type="password" name="password" value="<?php echo $userData['password']; ?>"style="padding: 6px 10px;margin: 8px 0;">
            <br>
           <label> User type:</label><br>
           <div style="padding-top:10px;padding-bottom:10px;">
            <select name="user_type"><br>
            <option value="<?php echo $userData['user_type']; ?>"><?php echo $userData['user_type']; ?></option>
            </select><br>
           </div>
            <div style="padding-top:10px;">
            <input type="submit" name="update" value="UPDATE" style="background: #0066A2;color: white;border:none;padding: 10px 22px;margin: 1px .5px;font: bold15px arial,sans-serif;cursor:pointer;">
            </div>
         </form> 
        </div>   
</body>
</html>