<form action="" method="post">
    <label for="cat_title">Edit Category</label>
    <?php
    if(isset($_GET['edit'])){
        $cat_id=$_GET['edit'];
        $query="SELECT * FROM categories WHERE cat_id={$cat_id}";
        $select_category=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($select_category);
        $cat_title=$row['cat_title'];
        if(!$select_category){ die("QUERY FAILED".mysqli_error($connection));}
    }
    ?>                         
    <div class="form-group">
        <input type="text" value="<?php if(isset($cat_title)){echo $cat_title;} ?>" class="form-control" name="cat_title">
    <?php
    if(isset($_POST['update_category'])){
    $the_cat_title=$_POST['cat_title'];
    $query="UPDATE categories SET cat_title ='{$the_cat_title}' WHERE cat_id={$cat_id}";
    $update_query=mysqli_query($connection,$query);
    }
    ?>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="update" name="update_category">
    </div>                            
</form>