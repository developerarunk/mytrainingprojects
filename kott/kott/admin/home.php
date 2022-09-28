<nav class="details_posts">
				<h1 class="text-center"> Welcome Admin </h1>
					<ul class="row">
						<li class="col-md-3">
							<div class="slide_details">
								<i class="fa fa-android"></i>
								<?php
								$slide ="select * from slider";
								$slide_run = mysqli_query($conn, $slide);
								 $count = mysqli_num_rows($slide_run);
								?>
								<h3><?php echo $count; ?> Slides</h3>
							
							</div>
							<a href="adminmain.php?slide_view">View Details</a>
						</li>
						<li class="col-md-3">
							<div class="slide_details">
								<i class="fa fa-android"></i>
								<?php
								$feature ="select * from featured";
								$feature_run = mysqli_query($conn, $feature);
								$count_feature = mysqli_num_rows($feature_run);
								?>
								<h3><?php echo $count_feature; ?> Featured Posts</h3>
							
							</div>
							<a href="adminmain.php?featured">View Details</a>
						</li>
						<li class="col-md-3">
							<div class="slide_details">
								<i class="fa fa-android"></i>
								<?php
								$activities ="select * from activities";
								$activities_run = mysqli_query($conn, $activities);
								$count_activities = mysqli_num_rows($activities_run);
								?>
								<h3><?php echo $count_activities; ?>  Posts</h3>
							
							</div>
							<a href="#">View Details</a>
						</li>
						<li class="col-md-3">
							<div class="slide_details">
								<i class="fa fa-android"></i>
								<?php
								$activities ="select * from activities";
								$activities_run = mysqli_query($conn, $activities);
								$count_activities = mysqli_num_rows($activities_run);
								?>
								<h3><?php echo $count_activities; ?>  Posts</h3>
							
							</div>
							<a href="#">View Details</a>
						</li>
				
					</ul>
				</nav>