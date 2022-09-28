<section class="slide_view">
 <h3>All Facilities</h3>
 <div class="table">
	<table>
		<tr>
			<th> Sr. No.</th>
			<th> Icon</th>
			<th> Title</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
		
		</tr>
		<?php
		$i=0;
		$get_featured = "select * from featured";
					$run_featured  = mysqli_query($conn, $get_featured );
					while($row_featured = mysqli_fetch_array($run_featured)){
					$featured_id = $row_featured['featured_id'];
					$featured_desc = $row_featured['featured_desc'];
					$featured_icon = $row_featured['featured_icon'];
					$featured_title = $row_featured['featured_title'];
					$i++;
				
		?>
		<tr>
			<td><?php echo $i;?> </td>
			<td><i class="<?php echo $featured_icon;?>"></i></td>
			<td><p><?php echo $featured_title;?></p></td>
			<td><p><?php echo $featured_desc;?></p></td>
			<td><a href="adminmain.php?edit_featured=<?php echo $featured_id?>">Edit</a> </td>
			<td><a href="delete_featured.php?delete_featured=<?php echo $featured_id?>">Delete</a></td>
		
		</tr>
			<?php } ?>
	</table>
</section>

<?php
if (isset($_POST['insert_slide'])) {
 	$slider_im = $_FILES['slider_img']['name'];
	$temp_img = $_FILES['slider_img']['tmp_name'];
	if ($slider_im=='') {
		echo "<script> alert('Please fill all the fileds')</script>";
			exit();
	}
	move_uploaded_file($temp_img,"img/$slider_im");

	$test_insertion = "INSERT into  slider (slide_id, slide_img) VALUES('','$slider_im' )";
	
	$run =mysqli_query($conn,$test_insertion);		
	if($run){
	echo "<script>alert('Slider created succesffuly')</script>";
}
		
 } 

?>