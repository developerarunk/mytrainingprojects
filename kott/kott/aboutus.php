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
 <div class="about_banner">
<img src="img/about.jpg" alt=""/>
<div class="about_banner_text">
	<h3><span>About N.S.P</span></h3>
<section class="abou_us">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<p><?php
					$get_profile = "select * from aboutus";
					$run_profile = mysqli_query($conn, $get_profile);
					while($row_profile= mysqli_fetch_array($run_profile)){
					$profile_id = $row_profile['about_id'];
					$profile_desc = $row_profile['about_desc'];
					$profile_img = $row_profile['about_img'];
					}
			
					echo $profile_desc ;
?></p>
</div>
<div class="col-md-6">
<img src="img/aboutus.png" alt="labs"/>
</div>
</div>
		</div>
</section>

<section class="achieve">
<div class="container">
	<div class="counter text-center fff">
		<h1>WHAT WE HAVE ACHIEVED</h1>
		<div class="stats text-center">
			<ul>
				<li>
					<h2>1515</h2>
					<h5>Students</h5>
				</li>
				<li>
					<h2>42</h2>
					<h5>Teachers</h5>
				</li>
				<li>
					<h2>75</h2>
					<h5>Classrooms</h5>
				</li>
				<li>
					<h2>13</h2>
					<h5>Labs</h5>
				</li>
				
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
</div>
</section>
</div>
</div>

<section class="aboutt">
		
		<div class="container">
			<h1 class="text-center"> Why Choose us</h1>
		<div class="col-md-5 features">
		
			<img src="img/pclabs.jpg" alt="labs"/>
		
		</div>
		<div class="col-md-7 feat">
			<ul class="list-styled ">
			<p>Our educational programmes are designed to :</p>
			<li><i class="fa fa-check-square" aria-hidden="true"></i>Foster in all students a keen interest in learning and in striving for the highest level of achievement</li>
			<li><i class="fa fa-check-square" aria-hidden="true"></i>Help our students acquire the knowledge and life skills relevant for the dynamically changing world</li>
			<li><i class="fa fa-check-square" aria-hidden="true"></i>Instil in our students highest standards of behaviour and sensitivity to good human values</li>
			<li><i class="fa fa-check-square" aria-hidden="true"></i>Maintain frequent and open relation with parents in recognition that education is a partnership</li>
			<li><i class="fa fa-check-square" aria-hidden="true"></i>Offer a range of activities and opportunities to promote excellence, success, confidence and self-esteem in our student</li>
		</ul>
		</div>
		
		<div class="clearfix"></div>
		</div>
		</div>
		
	</div>
</div>
</div>
</section>
 <section class="testimonial">
	<div class="container">
		<div class="col-md-6 testi">

		</div>
		<div class="col-md-6 testi">

		</div>
	</div>
</section>
  <?php include 'footer.php';?>
 
 </body>
</html>