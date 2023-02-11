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
                <li>
                    <a href="">
                        <span class="ti-home"></span>
                        <span>  <a href=Dashboard.php class="fa fa-dashboard">Dashboard </a></span> 
                        <li> <span><a href="user.php" class="fa fa-user">User</a></span> </li>
                        <li> <span><a href="product.php" class="fa fa-pencil-square">Product</a></span> </li> 
                        <li> <span><a href="searchUsers.php" class="fa fa-search-plus">Search Users</a></span> </li>        
                        <li> <span><a href="search.php" class="fa fa-search-minus">Search Products</a></span> </li>  
                        <li> <span><a href="logout.php" class="fa fa-sign-out">LogOut</a> </span> </li>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" id="user_db" placeholder="Search Products...">
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>
        <div id="searchresult">
        <main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Results</h3>
                        <a style="float:right;margin-top:15px;color:black;" href="create.php"><b> | Create  </b></a>
                        <div class="table-responsive">
                        <table>
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Model</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Actions</th>     
                                        
                                    </tr>
                                </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#user_db").keyup(function(){
            var input = $(this).val();
            //alert(input);
            if(input != ""){
                $.ajax({
                    url:"livesearch.php",
                    method:"POST",
                    data:{input:input},
                    success:function(data){
                    $("#searchresult").html(data);
                    $("#searchresult").css("display","block");
                    }
                });
            }
        });
    });
    </script>
    
</body>
</html><?php ?>