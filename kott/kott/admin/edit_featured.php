	


		<?php
		if (isset($_GET['edit_featured'])) {
			 $featured_slide= $_GET['edit_featured'];
			$get_edit= "select * from featured where featured_id='$featured_slide'";
			$run_featured = mysqli_query($conn, $get_edit);
			while($row_featured = mysqli_fetch_array($run_featured)){
					$featured_id = $row_featured['featured_id'];
					$featured_desc = $row_featured['featured_desc'];
					$featured_icon = $row_featured['featured_icon'];
					$featured_title = $row_featured['featured_title'];
				
			}
		}
		
		 ?>
	<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
		<h2>Why Choose us Update And Edit</h2>
		<label> Icon </label>
		<input type="text" name="featured_icon" value= "<?php echo $featured_icon;?>"/>
		<label> Title </label>
		<input type="text" name="featured_title" value= "<?php echo $featured_title;?>"/>
		<label>Description</label>
		 <textarea cols="35" rows="10" name="featured_desc" ><?php echo $featured_desc;?></textarea>
		
		<input type="submit" name="update_featured" value="update">

	</form>
	</div>

<?php
if (isset($_POST['update_featured'])) {
 	$featured_icon = $_POST['featured_icon'];
	$featured_title = $_POST['featured_title'];
	$featured_desc = $_POST['featured_desc'];

	if($featured_icon ==''&& $featured_title =='' && $featured_desc ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}

	



	echo $featured_insert = "update featured set featured_title='$featured_title',featured_desc='$featured_desc',featured_icon='$featured_icon' where featured_id='$featured_id'";
	
	$featured_run =mysqli_query($conn,$featured_insert );		
	if($featured_run){
	echo "<script>alert('Data Updated successfuly')</script>";
	echo "<script>window.open('adminmain.php?edit_featured','_self')</script>";
}
		
 } 
 ?>