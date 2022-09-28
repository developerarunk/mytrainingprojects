<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
 <?php require 'config.php';?>
 <?php include 'header.php';?>

<section class="contact_banner">
<img src="img/kidibanner.jpg" alt=""/>
<div class="container">
<h3 class="inside_heading text-center">Activities</h3>
</div>
</section>


 <section class="activity">	
	<div class="container">
		<div class="activity_content row">
		<?php
					$get_activities = "select * from activities where status='0'";
					$run_activities  = mysqli_query($conn, $get_activities );
					while($row_activities = mysqli_fetch_array($run_activities)){
					$activities_id = $row_activities['activities_id'];
					
					$activities_title = $row_activities['activities_title'];
					$activities_img = $row_activities['activities_img'];
					
					
					
					echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 activity_pics">
				
							<img src="img/'.$activities_img.'" alt="activities" />
							<h5 class="activity_img_specs"><span class="bg-red">'.$activities_title.'</span></h5>
				</div>';
				
					}
				?>
			
			
		</div>

	</div>
 </section>
 

  <?php include 'footer.php';?>

 <script>
	$(document).ready(function(){
		var xheight = $('.form_inputs').height();
		$('.address').height(xheight);
	})
</script>
</body>
</html>