<?php
include("config.php");
if(isset($_POST['input'])){
   $input = $_POST['input'];
   $query = "SELECT card_item.ID, card_item.Name, card_item.Model, card_item.* from card_item WHERE `ID` LIKE '$input%' OR `Name` LIKE '$input%' OR `Price` LIKE '$input%' OR `Model` LIKE '$input%'" ; 
   $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){?>

<main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Results</h3>
                        <a style="background-color:#5F9EA0; float:right;margin-top:15px;color:black; border: none;color: white;padding: 17px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;" href="create_dashboard.php"><b>  Create  </b></a>
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
                                 <?php
               while($row = mysqli_fetch_assoc($result)){
                $ID = $row['id'];
                $Name = $row['name'];
                $Model = $row['model'];
                $Image = $row['image'];
                $Price = $row['price'];               
?>  
       <tr>
            <td><?php echo $ID;?></td>
            <td><?php echo $Name;?></td>
            <td><?php echo $Model;?></td>
            <td><?php echo $Image;?></td> 
            <td><?php echo $Price;?></td> 
            <td><a href="update_product.php?id=<?php echo $row['id']; ?>"><button style="background-color:#4CAF50;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Edit</button></a> <a href="delete_product.php?id=<?php echo $row['id']; ?>"><button style="background-color:#f44336;border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;">Delete</button></a></td>
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
                <a style="background-color:#5F9EA0; float:right;margin-top:15px;color:black; border: none;color: white;padding: 17px 22px;text-align: center;text-decoration: none;font-size: 12px;margin: 1px .5px;cursor: pointer;" href="create_dashboard.php"><b>  Create  </b><a>
                    
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
    
</main>';
}}
?>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
