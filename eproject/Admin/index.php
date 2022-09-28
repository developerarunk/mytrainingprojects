<?php include "includes/header.php"; ?>
<?php
if(isset($_POST['add_pro'])){
    
$title=$_POST['title'];
$image=$_POST['image'];
$price=$_POST['price'];
$cat=$_POST['cat'];
    
    
$sql="INSERT INTO `products` (`pro_id`, `pro_title`, `pro_img`, `pro_price`, `pro_cat_id`) VALUES (NULL, '$title', '$image', '$price', '$cat')";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<script>window.location="index.php"</script>';  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}?>
        <div id='wrapper'>

            <section id="contact-section">
                <div class="container">
                    <div class="m-12 l-12 contact-main-col">
                        <div class="m-12 l-12 contact-form-col animation-element">
                            <p class="contact-heading">Add <span>Product</span></p>

                            <div class="form-col">
                                <form  method="post" action="">
                                    <div class="input-field">
                                        <label for="name">Chose Category</label>
                                        <select id="cat" name="cat" type="text" class="validate form-control" required>
                                <?php 
                            
                            $sql = "SELECT * FROM `product_cat`";
                            $result = mysqli_query($conn, $sql);

                           

                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                            
                                    <div class="input-field">
                                        <label for="telephone">Product title</label>
                                        <input id="telephone" name="title" type="text" class="validate form-control" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="subject">Product Image</label>
                                        <input id="subject" name="image" type="text" class="validate form-control" required>
                                    </div> 
                                    <div class="input-field">
                                        <label for="subject">Product Price</label>
                                        <input id="subject" name="price" type="number" class="validate form-control" required>
                                    </div>
                                    <div class="contact-btn-col">
                                        <button type="submit" class="btn btn-info btn-block waves-effect waves-light" name="add_pro">Add</button>
                                    </div>
                                </form>
                            </div>

                        </div>



                        


                    </div>
                </div>
            </section>
            
            

      

        </div>

<?php include "includes/footer.php"; ?>