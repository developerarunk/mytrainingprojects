	


		<?php
		if (isset($_GET['edit_activities'])) {
			 $activities_slide= $_GET['edit_activities'];
			$get_edit= "select * from activities where activities_id='$activities_slide'";
			$run_activities = mysqli_query($conn, $get_edit);
			while($row_activities = mysqli_fetch_array($run_activities)){
					$activities_id = $row_activities['activities_id'];
					$activities_desc = $row_activities['activities_desc'];
					$activities_icon = $row_activities['activities_icon'];
					$activities_title = $row_activities['activities_title'];
					$activities_img = $row_activities['activities_img'];
				
			}
		}
		
		 ?>
	<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
	<h2>Why Choose us</h2>
	<label> Icon </label>
	<input type="text" name="activities_icon" value="<?php echo $activities_icon;?>"/>
	<label> image </label>
	<input type="file" name="activities_img"/>
	<img src="../img/<?php echo $activities_img; ?>"/>
	<br/>
	<label> Title </label>
	<input type="text" name="activities_title" value="<?php echo $activities_title;?>"/>
	<label>Description</label>
	<textarea cols= "35" rows="10" name="activities_desc" value=<?php echo $activities_desc;?>></textarea>
	<label> Show on Home</label>
	<select name="status">
		<option value="0">Please select</option>
		<option value="1">Show on home</option>
	</select>
	
	
	</select>
	<input type="submit" name="activities_insert" value="insert">

	</form>
	</div>

<?php
if (isset($_POST['activities_insert'])) {
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
	
$activities_insertion = "update activities set activities_title ='$activities_title',activities_desc='$activities_desc',activities_icon = '$activities_icon',activities_img = '$activities_img' ,status = '$activities_status' where activities_id = '$activities_id' ";
	
	$activities_run = mysqli_query($conn, $activities_insertion );		
	if($activities_run){
	echo "<script>alert('Data inserted successfuly')</script>";


	
}
		
 } 
 ?>