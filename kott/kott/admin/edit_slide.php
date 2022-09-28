	


		<?php
		if (isset($_GET['edit_slide'])) {
			 $edit_slide= $_GET['edit_slide'];
			 $get_edit= "select * from slider where slide_id='$edit_slide'";
			$run_edit = mysqli_query($conn, $get_edit);
			while($row_edit = mysqli_fetch_array($run_edit)){
				$slide_img= $row_edit['slide_img'];
				
			}
		}
		 ?>
	<div class="container">
		<form method="post" action="" enctype="multipart/form-data" class="editslide_form">
		<h2> Insert or Update</h2>
		<input type="file" name="slider_img"/><br/><img src=" ../img/<?php echo $slide_img;?>">
		
		<input type="submit" name="update_slide" value="Update Slide">
		
		</form>
	</div>

<?php
if (isset($_POST['update_slide'])) {
 	$slider_im = $_FILES['slider_img']['name'];
	$temp_im = $_FILES['slider_img']['tmp_name'];
	if ($slider_im=='') {
		echo "<script> alert('Please fill all the fileds')</script>";
			exit();
	}
	move_uploaded_file($temp_im,"../img/$slider_im");

	$update_slide = "update slider set slide_img='$slider_im' where slide_id='$edit_slide'";
	
	$run_updateslide =mysqli_query($conn,$update_slide);	
	
	if($run_updateslide){
	echo "<script>alert('Slider Updated succesffuly')</script>";
}
		
 } 
 ?>