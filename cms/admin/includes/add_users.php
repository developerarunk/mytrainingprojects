<?php
if(isset($_POST['create_user'])){
    //$user_id=$_POST['user_id'];
    $user_firstname=$_POST['user_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $username=$_POST['username'];
    $user_role=$_POST['user_role'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
 
   
    
    $query='INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password) ';
    $query.="VALUE('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') ";
    $create_user=mysqli_query($connection,$query);
    if(!$create_user){
        echo $query;
        die("Query Failed".mysqli_error($connection));
    }
    echo "User Created:" ." ". "<a href='users.php'>View Users</a>";

}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <lable for="title">First Name</lable>
    <input type="text" class="form-control" name="user_firstname">
</div>
<div class="form-group">
    <lable for="title">Last Name</lable>
    <input type="text" class="form-control" name="user_lastname">
</div>

<div class="form-group">
<select name="user_role" id="">
    <option value="subscriber">Select Options</option>  
    <option value="admin">Admin</option>  
    <option value="subscriber">Subscriber</option>  
</select>
</div>

<div class="form-group">
    <lable for="title">User Name</lable>
    <input type="text" class="form-control" name="username">
</div>
<div class="form-group">
    <lable for="title">Email</lable>
    <input type="email" class="form-control" name="user_email">
</div>
<div class="form-group">
    <lable for="title">Password</lable>
    <input type="password" class="form-control" name="user_password">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_user" value="Publish">
</div>

</form>