	<?php
		require 'includes/config.php';

?>	
<!DOCTYPE html>
<html>
<head>
<title>My Store</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<link href="css/admin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
		
	<section class="slide_view">
		<div class="container">
		<div class="logo home center-block col-md-6">
							<img src="../img/logo.png" class="img-responsive" alt="logo"/>
						</div>
	<form method="post" action="" enctype="multipart/form-data" class="form_class centering center-block col-md-6">
	<h3 class="padding">Admin Login</h3>
	

	<div class="form-group">
	<label> Admin Username: </label>
	<input type="text" name="username" class="form-control"/>
	</div>
	<div class="form-group">
	<label>Admin Password:</label>
	<input type="text" name="password" class="form-control"/>
	</div>
	
	
	

	<button type="submit" class="btn btn-default" name="activities_insert">Login</button>

		
	</form>
	</div>
	</section>

<?php
if(isset($_POST['activities_insert'])) {
	$activities_icon = $_POST['activities_icon'];
	$activities_img = $_FILES['activities_img']['name'];
	$img_temp = $_FILES['activities_img']['tmp_name'];
	$activities_title = $_POST['activities_title'];
	$activities_desc = $_POST['activities_desc'];
	$activities_status = $_POST['status'];

	if($activities_icon =='' && $activities_title =='' && $activities_desc =='' && $activities_img==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}
	move_uploaded_file($img_temp,"../img/$activities_img");
	
 $activities_insertion = "INSERT into activities(activities_id, activities_title,activities_desc,activities_icon,activities_img,status) VALUES('','$activities_title','$activities_desc ','$activities_icon','$activities_img', '$activities_status' )";
	
	$activities_run = mysqli_query($conn, $activities_insertion );		
	if($activities_run){
	echo "<script>alert('Data inserted successfuly')</script>";


	
}
}	
  
 ?>
 

</body>
</html>