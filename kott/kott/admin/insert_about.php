
<section class="slide_view">
	<form method="post" action="" enctype="multipart/form-data" class="form_class">
	<h3> Add Content</h3>
	 <div class="form-group">
	<label> Image:</label>
	<input type="file" name="about_img"/>
	</div>
	<div class="form-group">
	<label>Description:</label>
	<textarea cols="35" rows="10" name="about_profile"></textarea>
	</div>
	  <button type="submit" class="btn btn-default" name="insert_about" >Insert</button>

	</form>
</section>
<?php
if(isset($_POST['insert_about'])) {
	$about_profile = $_POST['about_profile'];
	$about_img = $_FILES['about_img']['name'];
	$temp_img = $_FILES['about_img']['tmp_name'];
	if($about_profile =='' && $about_img ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}

	
	move_uploaded_file($temp_img,"../img/$about_img ");


	$profile_insert = "INSERT into  aboutus (about_id, about_desc,about_img) VALUES('','$about_profile','$about_img ')";
	
	$profile_run =mysqli_query($conn,$profile_insert );		
	if($profile_run){
	echo "<script>alert('Data inserted Sucessfully')</script>";
}
		
 } 
 
 ?>





