<?php
		require 'includes/config.php';
		if(isset($_GET['delete_slide'])){
			$delete_slide_id = $_GET['delete_slide'];
			$delete_slide = "delete from slider where slide_id = '$delete_slide_id'";
			$delete_run_slide = mysqli_query($conn,$delete_slide);
			if($delete_run_slide){
				echo "<script> alert('product deleted successfuly')</script>";
				echo "<script>window.open('adminmain.php?slide_view','_self')</script>";
			}
			
			
			
		}

?>	