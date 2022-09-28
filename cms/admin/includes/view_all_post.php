<?php     
if(!empty($_POST['checkboxArray'])) {
    foreach($_POST['checkboxArray'] as $postValueId) {
          $bulk_options = $_POST['bulk_options'];
                switch($bulk_options) {
            case 'published':
                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId} ";
                $update_to_publish_status = mysqli_query($connection, $query);
                break;
                        
            case 'draft':
                $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId} ";
                $update_to_draft_status = mysqli_query($connection, $query);
                break;
                        
            case 'delete':
                $query = "DELETE FROM posts WHERE post_id = {$postValueId} ";
                $update_to_delete_status = mysqli_query($connection, $query);
                break;
                        
            case 'clone':
                $query = "SELECT * FROM posts WHERE post_id = {$postValueId} ";
                        $select_post_query=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_array($select_post_query)){
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_category_id=$row['post_category_id'];
    $post_status=$row['post_status'];
    $post_image=$row['post_image'];
    $post_tags=$row['post_tags'];
    $post_content=$row['post_content'];
    $post_date=$row['post_date'];
    }
    
    
    $query='INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status)';
    $query.="VALUE({$post_category_id},'{$post_title}','{$post_author}', $post_date,'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
    $create_post_query=mysqli_query($connection,$query);
    if(!$create_post_query){
        die("Query Failed".mysqli_error($connection));
    }                      
        } 
    }
} ?>



<form action="" method="post">
       <table class="table table-bordered table-hover" >
<div id="bulkOptionsContainer" class="col-xs-4">

    <select class="form-control" name="bulk_options" id="">
      <option value="">Select Option</option>
      <option value="published">Publish</option>
      <option value="draft">Draft</option>
      <option value="delete">Delete</option>
      <option value="clone">Clone</option>
    </select>
</div>

<div class="col-xs-4">

  <input type="submit" name="submit" class="btn btn-success" value="Apply">
  <a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>

</div>

                        <thead>
                            <tr>
                                 <th><input id="selectAllBoxes" type="checkbox"></th>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Categories</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Tags</th>
                                <th>Comments</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $query="SELECT * FROM posts";
                        $select_all_categories_query=mysqli_query($connection,$query);    
                        while($row=mysqli_fetch_assoc($select_all_categories_query)){
                        $post_id=$row['post_id'];
                        $post_author=$row['post_author'];
                        $post_title=$row['post_title'];
                        $post_category_id=$row['post_category_id'];
                        $post_status=$row['post_status'];
                        $post_image=$row['post_image'];
                        $post_tags=$row['post_tags'];
                        $post_comment_count=$row['post_comment_count'];
                        $post_date=$row['post_date'];
                        echo "<tr>";
                          ?>  
                        <td><input class='checkBoxes' type='checkbox' name='checkboxArray[]' value='<?php echo $post_id; ?>'></td>
                         
                            <?php
                        echo "<td>{$post_id}</td>";
                        echo "<td>{$post_author}</td>";
                        echo "<td>{$post_title}</td>";
                            
                    $query="SELECT * FROM categories WHERE cat_id={$post_category_id}";
                    $select_category_id=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($select_category_id)){
                        $cat_title=$row['cat_title'];
                            
                        echo "<td>{$cat_title}</td>";
                    }
                            
                        
                        echo "<td>{$post_status}</td>";
                        echo "<td><img width='100' src='../images/$post_image'></td>";
                        echo "<td>{$post_tags}</td>";
                        echo "<td>{$post_comment_count}</td>";
                        echo "<td>{$post_date}</td>";
                        echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                        echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='posts.php?delete={$post_id}'>Delete</a></td>";
                        echo "</tr>";
            if(isset($_GET['delete'])){
            $the_post_id=$_GET['delete'];
            $query="DELETE FROM posts WHERE post_id={$the_post_id}";
            $delete_query=mysqli_query($connection,$query);
            }                            
                        }
                        ?>
                            <tr>
                            <td>1</td>
                            <td>Edwin</td>
                            <td>Bootstrap Framework</td>
                            <td>Bootstrap </td>
                            <td>Status</td>
                            <td>Image</td>
                            <td>Tags</td>
                            <td>Comments</td>
                            <td>Date</td>
                            </tr>    
                        </tbody>
                        </table>
</form>