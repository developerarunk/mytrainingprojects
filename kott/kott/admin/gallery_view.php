<section class="slide_view">
 <h3> Gallery</h3>
 <div class="table">
	<table>
		<tr>
			<th> Sr. No.</th>
			
			<th> Image</th>
			
			<th>Edit</th>
			<th>Delete</th>
		
		</tr>
		<?php
		$i=0;
			$get_gallery = "select * from gallery ";
					$run_gallery  = mysqli_query($conn, $get_gallery );
					while($row_gallery = mysqli_fetch_array($run_gallery)){
					$gallery_id = $row_gallery['gallery_id'];
					$gallery_img = $row_gallery['gallery_img'];
					
					$i++;
				
		?>
		<tr>
			<td><?php echo $i;?> </td>
			
			<td class="gallery_img"><img src="../img/<?php echo $gallery_img;?>"/></td>
			
			<td><a href="adminmain.php?edit_gallery=<?php echo $gallery_id?>">Edit</a> </td>
			<td><a href="delete_activities.php?delete_gallery=<?php echo $gallery_id?>">Delete</a></td>
		
		</tr>
			<?php } ?>
	</table>
</section>






