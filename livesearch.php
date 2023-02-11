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
            <td><a style="color:black;" href="update.php?id=<?php echo $row['id']; ?>">Edit</a> | <a style="color:black;" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
        </tr>
        <?php 
    }
    ?>
    </tbody>
</table>
<?php
}

else{
    echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
}    }
?>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
