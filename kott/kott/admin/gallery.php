	<section class="slide_view">
	<form method="post" action="" enctype="multipart/form-data" class="form_class ">
	<h3 class="padding">Gallery</h3>
	
	<div class="form-group">
	<label> image: </label>
	<input type="file" name="gallery_img"/>
	</div>
	<button type="submit" class="btn btn-default" name="gallery_insert">Insert</button>


	</form>

<?php
if(isset($_POST['gallery_insert'])) {
	$gallery_img = $_FILES['gallery_img']['name'];
	$imgg_temp = $_FILES['gallery_img']['tmp_name'];


	if($gallery_img ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}
	move_uploaded_file($imgg_temp,"../img/$gallery_img");
	
 echo $gallery_insertion = "INSERT into gallery(gallery_id,gallery_img)VALUES('','$gallery_img' )";
	
	$gallery_run = mysqli_query($conn, $gallery_insertion );		
	if($gallery_run){
	echo "<script>alert('Data inserted successfuly')</script>";


	
}
}	
  
 ?>
 

