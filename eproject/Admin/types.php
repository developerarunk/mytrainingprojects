<?php include "includes/header.php"; ?>

<?php

if(isset($_GET['del'])){
    $del=$_GET['del'];
    $sql = "DELETE FROM `product_type` WHERE `product_type`.`type_id` = $del";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
    
}

if(isset($_POST['edit_type'])){


$title=mysqli_real_escape_string($conn, $_POST['title']);
$type_id=$_POST['type_id'];
$cat=implode(",",$_POST['cat']);
     $sql = "UPDATE `product_type` SET `type_name` = '$title', `pro_cats` = '$cat' WHERE `product_type`.`type_id` = $type_id";
  

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo $sql;
    echo "Error updating record: " . mysqli_error($conn);
}

    
}
if(isset($_POST['add_type'])){


$title=mysqli_real_escape_string($conn, $_POST['title']);
$cat=implode(",",$_POST['cat']);
     $sql = "INSERT INTO `product_type` (`type_id`, `type_name`, `pro_cats`) VALUES (NULL, '$title', '$cat')";
  

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
                   
                    <h2 class="section-heading"> <a href="#"  data-toggle="modal" data-target="#add_type" class="btn btn-info pull-left cart-delete-btn"><i class="fa fa-plus" aria-hidden="true"></i> Add Type</a>Product Types</h2>
                    <div class="table-responsive">
                                    <table width="100%" class="cart-table">
                        
                                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `product_type`";
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
                                                            <p class="shopped-item-name"><?php echo $row['type_name']; ?> </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            
                                         
                                            <td>
                                                <a href="types.php?del=<?php echo $row['type_id']; ?>" class="btn btn-info cart-delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <a href="#"  data-toggle="modal" data-target="#myModal<?php echo $row['type_id']; ?>" class="btn btn-info cart-delete-btn"><i class="fa fa-edit" aria-hidden="true"></i></a>
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
                            $psql = "SELECT * FROM `product_type`";
                            $presult = mysqli_query($conn, $psql);

                           

                            while($prow = mysqli_fetch_assoc($presult)) {

                            ?>
  <div class="modal fade" id="myModal<?php echo $prow['type_id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $prow['type_name']; ?></h4>
        </div>
        <div class="modal-body">
          <div class="form-col">
                                <form  method="post" action="">
                                    <div class="input-field">
                                        <label for="telephone">Type title</label>
                                        <input id="telephone"  value="<?php echo $prow['type_name']; ?>" name="title" type="text" class="validate form-control" required> 
                                        <input id="type_id"  value="<?php echo $prow['type_id']; ?>" name="type_id" type="hidden">
                                    </div>
                                    <div class="input-field">
                                        <label for="name">Chose Category</label>
                                        <select id="cat" name="cat[]" type="text" class="validate form-control"  multiple="multiple" required>
                                                <?php 

                                            $sql = "SELECT * FROM `product_cat`";
                                            $result = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                            
                                        
                                    <div class="contact-btn-col">
                                        <button type="submit" style="margin-top:10px" class="btn btn-info btn-block waves-effect waves-light" name="edit_type">update</button>
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
          <h4 class="modal-title">Add type</h4>
        </div>
        <div class="modal-body">
          <div class="form-col">
                                <form  method="post" action="">
                                    <div class="input-field">
                                        <label for="telephone">Type title</label>
                                        <input id="telephone"  value="<?php echo $prow['type_name']; ?>" name="title" type="text" class="validate form-control" required> 
                                        
                                    </div>
                                    <div class="input-field">
                                        <label for="name">Chose Category</label>
                                        <select id="cat" name="cat[]" type="text" class="validate form-control"  multiple="multiple" required>
                                                <?php 

                                            $sql = "SELECT * FROM `product_cat`";
                                            $result = mysqli_query($conn, $sql);



                                            while($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                                            <?php  } ?>
                                        </select>
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