<?php

		require 'includes/config.php';
		if(isset($_GET['delete_featured'])){
		 $delete_featured_id = $_GET['delete_featured'];
			$delete_featured = "delete from featured where featured_id = '$delete_featured_id'";
			$delete_run_featured = mysqli_query($conn,$delete_featured);
			if($delete_run_featured){
				echo "<script> alert('product deleted successfuly')</script>";
				echo "<script>window.open('adminmain.php?featured','_self')</script>";
			}
			
			
			
		}

?>	