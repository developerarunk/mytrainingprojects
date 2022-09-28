<?php

		require 'includes/config.php';
		if(isset($_GET['delete_activities'])){
		 $delete_activities_id = $_GET['delete_activities'];
			$delete_activities = "delete from activities where activities_id = '$delete_activities_id'";
			$delete_run_activities = mysqli_query($conn,$delete_activities);
			if($delete_run_activities){
				echo "<script> alert('product deleted successfuly')</script>";
				echo "<script>window.open('adminmain.php?activities','_self')</script>";
			}
			
			
			
		}

?>	