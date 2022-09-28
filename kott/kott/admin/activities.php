	<section class="slide_view">
	<form method="post" action="" enctype="multipart/form-data" class="form_class ">
	<h3 class="padding">Activities</h3>
	<div class="form-group">
	<label> Icon :</label>
	<input type="text" name="activities_icon" class="form-control"/>
	</div>
	<div class="form-group">
	<label> image: </label>
	<input type="file" name="activities_img"/>
	</div>
	<div class="form-group">
	<label> Title: </label>
	<input type="text" name="activities_title" class="form-control"/>
	</div>
	<div class="form-group">
	<label>Description:</label>
	<textarea cols="35" rows="10" name="activities_desc" class="form-control"></textarea>
	</div>
	<div class="form-group">
	<label> Show on Home:</label>


	<select name="status" class="form-control" >
		<option value="0">Please select</option>
		<option value="1">Show on home</option>
	</select>
	</div>
	

	<button type="submit" class="btn btn-default" name="activities_insert">Insert</button>


	</form>

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
 

