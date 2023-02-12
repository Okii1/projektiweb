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
                        <span> <a href=Dashboard.php class="fa fa-dashboard">Dashboard </a></span>
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
            <div class="social-icons">
            <h3>User Management</h3>
                <div></div>
            </div>
        </header>
        
        <main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        
                        <a style="float:right;margin-top:15px;color:black;" href="create.php"><b> | Create  </b></a>
                        <div class="table-responsive">
                        <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>User_type</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                    <tbody>  <?php
                         $connect = mysqli_connect("localhost","root","","user_db");
                         $query = "SELECT * FROM user_form";
                         $result = mysqli_query($connect,$query);
                         while($row = mysqli_fetch_array($result)){?>
                                    
                                    <tr>
                         <td> <?=$row['id'] ?>   </td> 
                         <td> <?=$row['name'] ?>   </td> 
                         <td> <?=$row['lastname'] ?>  </td> 
                         <td><?=$row['email'] ?>   </td>
                         <td><?=$row['user_type'] ?>   </td>  
                         <td><a href="update.php?id=<?php echo $row['id']; ?>"><button style="background-color:#4CAF50;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Edit</button></a> <a href="delete.php?id=<?php echo $row['id']; ?>"><button style="background-color:#f44336;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Delete</button></a></td>
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