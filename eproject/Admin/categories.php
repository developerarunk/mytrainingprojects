<?php include "includes/header.php"; ?>

<?php

if(isset($_GET['del'])){
    $del=$_GET['del'];
    $sql = "DELETE FROM `product_cat` WHERE `product_cat`.`cat_id` = $del";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
    
}

if(isset($_POST['edit'])){


$name=mysqli_real_escape_string($conn, $_POST['name']);
$id=mysqli_real_escape_string($conn, $_POST['id']);

     $sql = "UPDATE `product_cat` SET `cat_name` = '$name ' WHERE `product_cat`.`cat_id` = $id";
  

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo $sql;
    echo "Error updating record: " . mysqli_error($conn);
}

    
}
if(isset($_POST['add_type'])){


$name=mysqli_real_escape_string($conn, $_POST['name']);

     $sql = "INSERT INTO `product_cat` (`cat_id`, `cat_name`) VALUES (NULL, '$name')";
  

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo $sql;
    echo "Error updating record: " . mysqli_error($conn);
}

    
}
    

    
?>
        <div id='wrapper'>

            <section id="contact-section">
                <div class="container">
                   
                    <h2 class="section-heading" style="position:relative"> <a href="#"  data-toggle="modal" data-target="#add_type" class="btn btn-info cart-delete-btn" style="position:absolute;left:0"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>categories</h2>
                    <div class="table-responsive">
                                    <table width="100%" class="cart-table">
                        
                                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `product_cat`";
                            $result = mysqli_query($conn, $sql);

                           

                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                                            
                                          
                                            <tr>
                                            <td>
                                                <ul class="list-inline shopped-item-ul">
                                                    <!--Shopped item image-->
                                                    <li>
                                                        <div class="shopped-item-img">
                                                            <img src="images/menu-women.jpg" class="img-responsive">
                                                        </div>
                                                    </li>
                                                    <!--Shopped item description-->
                                                    <li>
                                                        <div class="shopped-tem-description">
                                                            <p class="shopped-item-name"><?php echo $row['cat_name']; ?> </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            
                                         
                                            <td>
                                                <a href="categories.php?del=<?php echo $row['cat_id']; ?>" class="btn btn-info cart-delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $row['cat_id']; ?>" class="btn btn-info cart-delete-btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            </td> 
                                            
                                        </tr>
                            <?php  } ?>
                          
                                    </tbody>
                        </table>
                                </div>
                </div>
            </section>


  <!-- Modal -->
            <?php
                            $psql = "SELECT * FROM `product_cat`";
                            $presult = mysqli_query($conn, $psql);

                           

                            while($prow = mysqli_fetch_assoc($presult)) {

                            ?>
  <div class="modal fade" id="myModal<?php echo $prow['cat_id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $prow['cat_name']; ?></h4>
        </div>
        <div class="modal-body">
          <div class="form-col">
                                <form  method="post" action="">
                                    <div class="input-field">
                                        <label for="telephone">Change Name</label>
                                        <input id="telephone"  value="<?php echo $prow['cat_name']; ?>" name="name" type="text" class="validate form-control" required> 
                                        <input type="hidden" name="id" value="<?php echo $prow['cat_id']; ?>" />
                                        
                                    </div>
                          
                                        
                                    <div class="contact-btn-col">
                                        <button type="submit" style="margin-top:10px" class="btn btn-info btn-block waves-effect waves-light" name="edit">update</button>
                                    </div>
                                </form>
                            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <?php  } ?>
 <!-- Add -->           
            
<div class="modal fade" id="add_type" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add category</h4>
        </div>
        <div class="modal-body">
          <div class="form-col">
                                <form  method="post" action="">
                                    <div class="input-field">
                                        <label for="telephone">Type category name</label>
                                        <input id="telephone"  value="<?php echo $prow['cat_name']; ?>" name="name" type="text" class="validate form-control" required> 
                                        
                                    </div>
                                   
                                        
                                    <div class="contact-btn-col">
                                        <button type="submit" style="margin-top:10px" class="btn btn-info btn-block waves-effect waves-light" name="add_type">Add </button>
                                    </div>
                                </form>
                            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </div>

<?php include "includes/footer.php"; ?>