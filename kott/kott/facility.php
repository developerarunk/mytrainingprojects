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
<div class="facility_banner">
<img src="img/facility.jpg" alt="facilities"/>
<div class="facility_banner_text text-center">
	<h3><span>Our Facilities</span></h3>
	<div class="container">
	<?php
					$get_featured = "select * from featured";
					$run_featured  = mysqli_query($conn, $get_featured );
					while($row_featured = mysqli_fetch_array($run_featured)){
					$featured_id = $row_featured['featured_id'];
					$featured_desc = $row_featured['featured_desc'];
					$featured_icon = $row_featured['featured_icon'];
					$featured_title = $row_featured['featured_title'];
					
					
					
					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 facility_icon text-center">
									<h5><span class="icon_fac '.$featured_icon.'"></span></h5>
									<h3>'.$featured_title.'</h3>
									<p>'.$featured_desc.'</p>
									
								</div>';
					}
				?>
	
	

		 
		
	</div>
</div>
</div>

 <?php include 'footer.php';?>

 </body>
</html>