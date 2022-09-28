<section class="slide_view">
 <h3> Slides</h3>
 <div class="table">
	<table>
		<tr>
			<th> Sr. No.</th>
			<th> Icon</th>
			<th> Title</th>
			<th> Image</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
		
		</tr>
		<?php
		$i=0;
			$get_activities = "select * from activities";
					$run_activities  = mysqli_query($conn, $get_activities );
					while($row_activities = mysqli_fetch_array($run_activities)){
					$activities_id = $row_activities['activities_id'];
					$activities_desc = $row_activities['activities_desc'];
					$activities_icon = $row_activities['activities_icon'];
					$activities_title = $row_activities['activities_title'];
					$activities_img = $row_activities['activities_img'];
					
					$i++;
				
		?>
		<tr>
			<td><?php echo $i;?> </td>
			<td><i class="<?php echo $activities_icon ;?>"></i></td>
			<td><p><?php echo $activities_title;?></p></td>
			<td class="activities_img"><img src="../img/<?php echo $activities_img;?>"/></td>
			<td><?php echo $activities_desc;?></td>
			<td><a href="adminmain.php?edit_activities=<?php echo $activities_id?>">Edit</a> </td>
			<td><a href="delete_activities.php?delete_activities=<?php echo $activities_id?>">Delete</a></td>
		
		</tr>
			<?php } ?>
	</table>
</section>






