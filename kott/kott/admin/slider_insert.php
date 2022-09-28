<?php
		require 'includes/config.php';

?>	
<!DOCTYPE html>
<html>
<head>
<title>My Store</title>
</head>
<body>

<section class="slide_view">
	<form method="post" action="" enctype="multipart/form-data" class="form_class">
	<h3>Add Slide </h3>
	 <div class="form-group">
      <label for="email">Slide Image:</label>
	  <input type="file"  name="slider_img">
    </div>
	  <button type="submit" class="btn btn-default" name="insert_slide" >Insert</button>


	</form>
	</section>
</body>	
</html>
<?php
if (isset($_POST['insert_slide'])) {
 	$slider_im = $_FILES['slider_img']['name'];
	$temp_im = $_FILES['slider_img']['tmp_name'];
	if ($slider_im=='') {
		echo "<script> alert('Please fill all the fileds')</script>";
			exit();
	}
	move_uploaded_file($temp_im,"../img/$slider_im");

	$test_insertion = "INSERT into  slider (slide_id, slide_img) VALUES('','$slider_im' )";
	
	$run =mysqli_query($conn,$test_insertion);		
	if($run){
	echo "<script>alert('Slider created succesfuly')</script>";
}
		
 } 
 ?>