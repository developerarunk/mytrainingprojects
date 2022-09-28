	


		<?php
		if (isset($_GET['edit_gallery'])) {
			 $gallery_slide= $_GET['edit_gallery'];
			$get_gallery = "select * from gallery where gallery_id='$gallery_slide' ";
					$run_gallery  = mysqli_query($conn, $get_gallery );
					while($row_gallery = mysqli_fetch_array($run_gallery)){
					$gallery_id = $row_gallery['gallery_id'];
					$gallery_img = $row_gallery['gallery_img'];
					}
		}
		
		 ?>
	<div class="container">
	<form method="post" action="" enctype="multipart/form-data" class="form_class ">
	<h3 class="padding">Gallery</h3>
	
	<div class="form-group">
	<label> image: </label>
	<input type="file" name="gallery_img"/>
	<img src="../img/<?php echo $gallery_img; ?>" class="edit_gallery"/>
	</div>
	<button type="submit" class="btn btn-default" name="gallery_update">Update</button>
	
	
	
	


	</form>
	</div>

<?php
if (isset($_POST['gallery_update'])) {
 	$gallery_img = $_FILES['gallery_img']['name'];
	$imgg_temp = $_FILES['gallery_img']['tmp_name'];


	if($gallery_img ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}
	move_uploaded_file($imgg_temp,"../img/$gallery_img");
	
 echo $gallery_updation = "update gallery set gallery_img ='$gallery_img' where gallery_id='$gallery_slide' ";
	
	$gallery_run = mysqli_query($conn, $gallery_updation );		
	if($gallery_run){
	echo "<script>alert('Data updated successfuly')</script>";
	echo "<script>window.open('adminmain.php?gallery_view','_self')</script>";

	
}
}	
  
	

 ?>