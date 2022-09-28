<?php
if(isset($_GET['p_id'])){
    $the_post_id=$_GET['p_id'];
}

    $query="SELECT * FROM posts WHERE post_id=$the_post_id";
    $select_all_post_by_id=mysqli_query($connection,$query);    
    while($row=mysqli_fetch_assoc($select_all_post_by_id)){
    $post_id=$row['post_id'];
    $post_author=$row['post_author'];
    $post_title=$row['post_title'];
    $post_category_id=$row['post_category_id'];
    $post_status=$row['post_status'];
    $post_image=$row['post_image'];
    $post_tags=$row['post_tags'];
    $post_comment_count=$row['post_comment_count'];
    $post_date=$row['post_date'];
    }
if(isset($_POST['update_post'])){
    $post_title=$_POST['post_title'];
    $post_author=$_POST['post_author'];
    $post_category_id=$_POST['post_category'];
    $post_status=$_POST['post_status'];
    $post_image=$_FILES['post_image']['name'];
    $post_image_temp=$_FILES['post_image']['tmp_name'];
    $post_tags=$_POST['post_tags'];
    $post_content=$_POST['post_content'];
    
    move_uploaded_file($post_image_temp,"../images/$post_image");
    if(empty($post_image)){
        $query="SELECT * FROM posts WHERE post_id=$the_post_id";
    $select_image=mysqli_query($connection,$query);    
    while($row=mysqli_fetch_assoc($select_image)){
        $post_image=$row['post_image'];
    }
    }
    
    $query="UPDATE posts SET ";
    $query.="post_title = '{$post_title}', ";
    $query.="post_category_id = {$post_category_id}, ";
    $query.="post_date = now(), ";
    $query.="post_author = '{$post_author}', ";
    $query.="post_status = '{$post_status}', ";
    $query.="post_tags = '{$post_tags}', ";
    $query.="post_content = '{$post_content}', ";
    $query.="post_image = '{$post_image}' ";
    $query.="WHERE post_id = {$the_post_id} ";
    
    $update_post=mysqli_query($connection,$query);
     if(!$update_post){
         echo $query;
        die("Query Failed".mysqli_error($connection));
    }
  
}

?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <lable for="title">Post Title</lable>
    <input type="text" class="form-control" name="post_title" value="<?php echo $post_title; ?>" >
</div>
<div class="form-group">
<select name="post_category" id="">
<?php 
$query="SELECT * FROM categories";
$select_categories=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($select_categories)){
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
    echo "<option value='$cat_id'>{$cat_title}</option>";
}
    
?>    
    
    
</select>
</div>
<div class="form-group">
    <lable for="title">Post Author</lable>
    <input type="text" value="<?php echo $post_author; ?>" class="form-control" name="post_author">
</div>
<div class="form-group">
    <lable for="title">Post Status</lable>
    <input type="text" class="form-control" name="post_status" value="<?php echo $post_status; ?>" >
</div>
<div class="form-group">
    <img width="100" src="../images/<?php echo $post_image; ?>">
    <input type="file"  name="post_image" value="" >
</div>
<div class="form-group">
    <lable for="title">Post Tags</lable>
    <input type="text" class="form-control" name="post_tags" value="<?php echo $post_tags; ?>" >
</div>
<div class="form-group">
    <lable for="title">Post Content</lable>
    <textarea class="form-control" id="" cols="30" rows="10" name="post_content" value="<?php echo $post_content; ?>" ></textarea>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Publish">
</div>

</form>