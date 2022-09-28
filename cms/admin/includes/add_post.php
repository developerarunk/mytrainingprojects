<?php
if(isset($_POST['create_post'])){
    $post_title=$_POST['post_title'];
    $post_author=$_POST['post_author'];
    $post_category_id=$_POST['post_category'];
    $post_status=$_POST['post_status'];
    $post_image=$_FILES['post_image']['name'];
    $post_image_temp=$_FILES['post_image']['tmp_name'];
    $post_tags=$_POST['post_tags'];
    $post_content=$_POST['post_content'];
    $post_date=date('d-m-y');
    $post_comment_count=4;
    
    move_uploaded_file($post_image_temp,"../images/$post_image");
    
    $query='INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status)';
    $query.="VALUE({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
    $create_post_query=mysqli_query($connection,$query);
    if(!$create_post_query){
        die("Query Failed".mysqli_error($connection));
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <lable for="title">Post Title</lable>
    <input type="text" class="form-control" name="post_title">
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
    <input type="text" class="form-control" name="post_author">
</div>
<div class="form-group">
    <lable for="title">Post Status</lable>
    <input type="text" class="form-control" name="post_status">
</div>
<div class="form-group">
    <lable for="title">Post Image</lable>
    <input type="file"  name="post_image">
</div>
<div class="form-group">
    <lable for="title">Post Tags</lable>
    <input type="text" class="form-control" name="post_tags">
</div>
<div class="form-group">
    <lable for="title">Post Content</lable>
    <textarea class="form-control" id="" cols="30" rows="10" name="post_content"></textarea>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
</div>

</form>