
<section class="slide_view">
	<form method="post" action="" enctype="multipart/form-data " class="form_class ">
	<h3 class="padding">Why Choose us</h3>
	<div class="form-group">
	<label> Icon: </label>
	<input type="text" name="featured_icon" class="form-control"/>
	</div>
	<div class="form-group">
	<label> Title: </label>
	<input type="text" name="featured_title" class="form-control"/>
	</div>
	<div class="form-group">
	<label>Description:</label>
	<textarea cols="35" rows="10" name="featured_desc" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-default" name="insert_featured">Insert</button>

	</form>
</section>
<?php
if(isset($_POST['insert_featured'])) {
	$featured_icon = $_POST['featured_icon'];
	$featured_title = $_POST['featured_title'];
	$featured_desc = $_POST['featured_desc'];

	if($featured_icon ==''&& $featured_title =='' && $featured_desc ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}

	



	$featured_insert = "INSERT into  featured (featured_id,featured_title,featured_desc,featured_icon) VALUES('','$featured_title','$featured_desc ','$featured_icon' )";
	
	$featured_run =mysqli_query($conn,$featured_insert );		
	if($featured_run){
	echo "<script>alert('Data inserted successfuly')</script>";
}
		
 } 
 ?>
 






