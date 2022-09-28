	<form method="post" action="" enctype="multipart/form-data">
	<h2> Insert Message</h2>
	<label> Image </label>
	<input type="file" name="message_img"/>
	<label>Description</label>
	<textarea cols="35" rows="10" name="message_desc"></textarea>
	
	<input type="submit" name="message_insert" value="insert">

	</form>

<?php
if(isset($_POST['message_insert'])) {
	$message_desc = $_POST['message_desc'];
	$message_img = $_FILES['message_img']['name'];
	$temp_img = $_FILES['message_img']['tmp_name'];
	if($message_desc =='' && $message_img ==''){
		
	echo "<script> alert('Please fill all the fields')</script>";
			exit();
	}

	
	move_uploaded_file($temp_img,"../img/$message_img ");


	$message_insertion = "INSERT into  message (message_id, message_desc,message_img) VALUES('','$message_desc','$message_img ')";
	
	$message_run =mysqli_query($conn,$profile_insertion );		
	if($message_run){
	echo "<script>alert('Data inserted Sucessfully')</script>";
}
		
 } 
 ?>
 





