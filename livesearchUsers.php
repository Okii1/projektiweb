<?php
include("config.php");
if(isset($_POST['input'])){
   $input = $_POST['input'];
   $query = "SELECT user_form.ID, user_form.Name, user_form.LastName, user_form.* from user_form WHERE `ID` LIKE '$input%' OR `Name` LIKE '$input%' OR `LastName` LIKE '$input%' OR `Email` LIKE '$input%' OR `User_Type` LIKE '$input%'" ; 
   $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){?>

<main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Results</h3>
                        <a style="background-color:#5F9EA0; float:right;margin-top:15px;color:black; border: none;color: white;padding: 17px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;" href="create.php"><b>  Create  </b><a>
                     <div class="table-responsive">
                        <table>
                        <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Actions</th>     
                                        
                                    </tr>
                                </thead>
                                 <?php
               while($row = mysqli_fetch_assoc($result)){
                $ID = $row['id'];
                $Name = $row['name'];
                $LastName = $row['lastname'];
                $Email = $row['email'];
                $User_Type = $row['user_type'];               
?>  
       <tr>
            <td><?php echo $ID;?></td>
            <td><?php echo $Name;?></td>
            <td><?php echo $LastName;?></td>
            <td><?php echo $Email;?></td> 
            <td><?php echo $User_Type;?></td> 
            <td><a href="update.php?id=<?php echo $row['id']; ?>"><button style="background-color:#4CAF50;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Edit</button></a> <a href="delete.php?id=<?php echo $row['id']; ?>"><button style="background-color:#f44336;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Delete</button></a></td>
        </tr>
        <?php 
    }
    ?>
    </tbody>
</table>
<?php
}

else if($row = mysqli_fetch_assoc($result) == 0){
    echo '<main>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Results</h3>
                    <a style="background-color:#5F9EA0; float:right;margin-top:15px;color:black; border: none;color: white;padding: 17px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;" href="create.php"><b>  Create  </b><a>
                    
                    <div class="table-responsive">
                    <table>
                            <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Actions</th>     
                                
                            </tr>
                            </thead>
                    </table>
                    </div>
                </div>
            </div>
        </section>
        
    </main>';
    }  }
?>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
