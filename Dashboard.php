<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
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
                <span class="ti-home"></span>
                 <li> <span class="fa fa-dashboard">Dashboard </span> </li>
                 <li> <span><a href="user.php" class="fa fa-user">User</a></span> </li>
                 <li> <span><a href="product.php" class="fa fa-pencil-square">Product</a></span> </li>
                 <li> <span><a href="searchUsers.php" class="fa fa-search-plus">Search Users</a></span> </li>      
                        <li> <span><a href="search.php" class="fa fa-search-minus">Search Products</a></span> </li>  
                 <li> <span><a href="logout.php" class="fa fa-sign-out">LogOut</a> </span> </li>
                 
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <h3> Contact Dashboard </h3>
            
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
                        <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                    <tbody>  <?php
                         $connect = mysqli_connect("localhost","root","","user_db");
                         $query = "SELECT * FROM contact_form";
                         $result = mysqli_query($connect,$query);
                         while($row = mysqli_fetch_array($result)){?>
                                    
                                    <tr>
                         <td> <?=$row['name'] ?>  </td> 
                         <td><?=$row['email'] ?>   </td>
                         <td><?=$row['subject'] ?>    </td>
                         <td><?=$row['message'] ?>     </td>  
                         </tr>
               
           <?php }
?>  
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
    </div>
    
</body>
</html>