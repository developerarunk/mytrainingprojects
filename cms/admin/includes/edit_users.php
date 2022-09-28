<?php
if(isset($_GET['edit_user'])){
$the_user_id=$_GET['edit_user'];
    
    $query="SELECT * FROM users WHERE user_id= $the_user_id";
    $select_users_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_users_query)){
        $user_id=$row['user_id'];
        $username=$row['username'];
        $user_password=$row['user_password'];
        $user_firstname=$row['user_firstname'];
        $user_lastname=$row['user_lastname'];
        $user_email=$row['user_email'];
        $user_role=$row['user_role'];
        
    }
    
}
if(isset($_POST['edit_user'])){
    
        $username=$_POST['username'];
        $user_password=$_POST['user_password'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_email=$_POST['user_email'];
        $user_role=$_POST['user_role'];
    
    $query="UPDATE users SET ";
    $query.="username = '{$username}', ";
    $query.="user_password = '{$user_password}', ";
    $query.="user_firstname = '{$user_firstname}', ";
    $query.="user_lastname = '{$user_lastname}', ";
    $query.="user_email = '{$user_email}', ";
    $query.="user_role = '{$user_role}' ";
    $query.="WHERE user_id = {$the_user_id} ";
    
    
    $update_user=mysqli_query($connection,$query);
     if(!$update_user){
         echo $query;
        die("Query Failed".mysqli_error($connection));
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <lable for="title">First Name</lable>
    <input type="text" value="<?php echo $user_firstname ?>" class="form-control" name="user_firstname">
</div>
<div class="form-group">
    <lable for="title">Last Name</lable>
    <input type="text" value="<?php echo $user_lastname ?>" class="form-control" name="user_lastname">
</div>

<div class="form-group">
<select name="user_role" id="">
    <option value="subscriber"><?php echo $user_role ?></option>  
    <?php 
    if($user_role=='admin'){
        
     echo '<option value="subscriber">Subscriber</option>  ';
    }
           else{
    echo '<option value="admin">Admin</option>  ';
               
           }
    ?>
</select>
</div>

<div class="form-group">
    <lable for="title">User Name</lable>
    <input type="text" class="form-control" value="<?php echo $username ?>" name="username">
</div>
<div class="form-group">
    <lable for="title">Email</lable>
    <input type="email" class="form-control" value="<?php echo $user_email ?>" name="user_email">
</div>
<div class="form-group">
    <lable for="title">Password</lable>
    <input type="password" class="form-control" value="<?php echo $user_password ?>" name="user_password">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="edit_user" value="Publish">
</div>

</form>