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
                        <li> <span class="fa fa-dashboard">Dashboard </span> </li>
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
class Dashboard {
    private $conn;

    public function __construct() {
        include "config.php"; 
        $this->conn = $conn;
    }

    public function deleteDashboard($dashboard_id) {
        $sql = "DELETE FROM `contact_form` WHERE `id`='$dashboard_id'";

        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            header('location:Dashboard.php');
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}
$dashboard = new Dashboard();

if (isset($_GET['id'])) {
    $dashboard_id = $_GET['id'];
    $dashboard->deleteDashboard($dashboard_id);
}
?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div> 
</body>
</html>