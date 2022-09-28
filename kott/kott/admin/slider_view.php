
<section class="slide_view">
 <h3> Slides</h3>
 <div class="table">
	<table>
		<tr>
			<th> Sr. No.</th>
			<th> Slide image</th>
			<th> Edit</th>
			<th>Delete</th>
		
		</tr>
		<?php
		$i= 0;
			$get_slide = "select * from slider";
			$run_slide = mysqli_query($conn, $get_slide);
			while($row_slide= mysqli_fetch_array($run_slide)){
				$slide_id = $row_slide['slide_id'];
				$slide = $row_slide['slide_img'];
				$i++;
				
			
		
		
		
		?>
		<tr>
			<td><?php echo $i;?> </td>
			<td><img src=" ../img/<?php echo $slide;?>"/></td>
			<td><a href="adminmain.php?edit_slide=<?php echo $slide_id?>">Edit</a> </td>
			<td><a href="delete_slide.php?delete_slide=<?php echo $slide_id?>">Delete</a></td>
		
		</tr>
			<?php } ?>
	</table>
</section>

