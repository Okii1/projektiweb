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
<?php

@include 'config.php';



?>
    
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
                        <span class="fa fa-dashboard">Dashboard </span>
                        
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
                        <h3>Contact</h3>
                        
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>App Development</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Logo Design</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        </td>
                                        <td>
                                            <span class="badge warning">Processing</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Server setup</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Front-end Design</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        </td>
                                        <td>
                                            <span class="badge warning">Processing</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web Development</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>196</h5>
                                    <small>Number of staff</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>16</h5>
                                    <small>Number of leave</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>12</h5>
                                    <small>Profile update request</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="bday-img"></div>
                                <div class="bday-info">
                                    <h5>Dwayne F. Sanders</h5>
                                    <small>Birthday Today</small>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button>
                                    <span class="ti-gift"></span>
                                    Wish him
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
    </div>
    
</body>
</html>