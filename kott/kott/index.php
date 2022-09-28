<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
 <?php include 'header.php';?>
<section class="sliders">
	<div class="slides_img">
		<div class="slider">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				 <?php
					require("config.php");
					$slide="select * FROM slider order by slide_id limit 2";
					$slide_run=mysqli_query($conn, $slide);
					$num_rows=mysqli_num_rows($slide_run);
					$slides='';
					$Indicators='';
					$counter=0;
					while ($row = mysqli_fetch_assoc($slide_run)) {
						$img=$row['slide_img'];
						if ($counter==0) {
							$Indicators .='<li data-target="#myCarousel" data-slide-to="'.$counter.'" class="active"></li>';
							$slides .='<div class="item active">
							<img src="img/'.$img.'" alt="Client" >
							
					      </div>
					      ';
						}
						else{
							$Indicators .='<li data-target="#myCarousel" data-slide-to="'.$counter.'"></li>';
							$slides .='<div class="item">
					        <img src="img/'.$img.'" alt="Flower" >
					    
					      </div>';
						}
						$counter++;
					}
			?>
	    <ol class="carousel-indicators">
	      <?php 
	      echo $Indicators;
	      ?>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox" >
	    	<?php
	    	echo $slides;
	    	?>		        
		</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" style="opacity:0;" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" style="opacity:0;"   href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
	</div>
</section>
<!-- ABOUT US -->
<section class="about_us">
	<div class="container">
		<div class="about_us_content row">
			<div class="col-lg-6 col-md-6 col-sm-6 text_about">
				<h4>About Us</h4>
				<p>
				<?php
					$get_profile = "select * from aboutus";
					$run_profile = mysqli_query($conn, $get_profile);
					while($row_profile= mysqli_fetch_array($run_profile)){
					$profile_id = $row_profile['about_id'];
					$profile_desc = $row_profile['about_desc'];
					$profile_img = $row_profile['about_img'];
					}
					$string_desc = strip_tags($profile_desc);
					
					if (strlen($string_desc) > 500) {
					
						// truncate string
						$stringCut = substr($string_desc, 0, 500);
					
						// make sure it ends in a word so assassinate doesn't become ass...
						$string_desc  = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="aboutus.php">Read More</a>'; 
					}
					echo $string_desc ;
?>
				</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 img_about text-center">
				<img src="img/<?php echo $profile_img?>" alt=""/>
			</div>
		</div>
	</div>
</section>
<!-- ABOUT US END -->
<!-- XPERT -->
<section class="xpert xpert_sec text-center">
	<div class="container">
	
		<h2 class="text-center fff why_choose">Why Choose Us?</h2>
			<div class="xpert_content row">
			<?php
					$get_featured = "select * from featured limit 3";
					$run_featured  = mysqli_query($conn, $get_featured );
					while($row_featured = mysqli_fetch_array($run_featured)){
					$featured_id = $row_featured['featured_id'];
					$featured_desc = $row_featured['featured_desc'];
					$featured_icon = $row_featured['featured_icon'];
					$featured_title = $row_featured['featured_title'];
					$featured_des = strip_tags($featured_desc);
					$featured_des1 = strip_tags($featured_desc);
					
				
					if (strlen($featured_des) > 100) {
					
						// truncate string
						$string_sub = substr($featured_des, 0, 100);
					    
						// make sure it ends in a word so assassinate doesn't become ass...
						$featured_des  = substr($string_sub, 0, strrpos($string_sub, ' ')).'...';
					}
					
					
					echo '<div class="text_xpert">
									<p class="text-center xpert_icon"><span class="'.$featured_icon.'"></span></p>
									<h4>'.$featured_title.'</h4>
									<p>'.$featured_des.'</p>';
					if(strlen($featured_des1) > 100){
						echo '<a href="index.php?featured_id='.$featured_id.'">Read More</a>'.'</div>'; 
					}				
								
					}
				?>
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- XPERT END -->
<!-- ACTIVITIES -->
<section class="activities text-center">
	<div class="container">
		<div class="activ_content row">
			<h3>Activities</h3>
			<?php
					$get_activities = "select * from activities where status='1'";
					$run_activities  = mysqli_query($conn, $get_activities );
					while($row_activities = mysqli_fetch_array($run_activities)){
					$activities_id = $row_activities['activities_id'];
					$activities_desc = $row_activities['activities_desc'];
					$activities_icon = $row_activities['activities_icon'];
					$activities_title = $row_activities['activities_title'];
					$activities_img = $row_activities['activities_img'];
					$activities_des = strip_tags($activities_desc);
					
					if (strlen($activities_des) > 100) {
					
						// truncate string
						$string_subb = substr($activities_des, 0, 100);
					
						// make sure it ends in a word so assassinate doesn't become ass...
						$activities_des  = substr($string_subb, 0, strrpos($string_subb, ' ')).'... <a href="index.php?activities_id='.$activities_id.'">Read More</a>'; 
					}
					
					
					echo '<div class="text_act">
				<div class="icon-img">
					<span class="iconz"><i class="'.$activities_icon.'"></i></span>
					<img src="img/'.$activities_img.'" alt="activities" />
				</div>
				<h3>'.$activities_title.'</h3>
				<p>'.$activities_des.'</p>
			</div>';
					}
				?>
			
			
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- ACTIVITIES END -->
<!-- MESSAGE -->
<section class="message_us">
	<div class="container">
		<div class="msg_us_content row">
			<div class="col-lg-5 col-md-5 col-sm-6 text_msg">
				<h4>Message from Principal</h4>
				<p>
					<!-- Besides health benefits, sport gives children the many life lessons that can contribute to the professional and personal achievements in adult life. Besides health benefits, sport gives children the many life lessons that can contribute to the professional and personal achievements in adult life.
					Besides health benefits, sport gives children the many life lessons that can contribute to the professional and personal achievements in adult life -->
					It gives me immense pleasure to tell that Nankana Sahib College of Education, Kot Gangu Rai has created a niche for itself among the renowned colleges of the city. With the help of Energetic and service minded team, we are trying to prepare and produce new teachers by imparting meaningful and quality education.
				</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-sm hidden-xs img_msg text-right">
				<img src="img/msg-cloud.png" alt="message"/>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 img_msg fff text-right principal_img">
				<img src="img/principal.jpg" alt="message"/>
				<p>S.Surinder Singh Maan<br><span>Principal</span></p>
			</div>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="container">
		<h1 class="text-center"> Gallery</h1>
		<ul>
		<?php
					$get_gallery = "select * from gallery limit 0, 2";
					$run_gallery  = mysqli_query($conn, $get_gallery );
					while($row_gallery = mysqli_fetch_array($run_gallery)){
					$gallery_id = $row_gallery['gallery_id'];
					$gallery_img = $row_gallery['gallery_img'];
						echo '<li class="col-md-6">
							<img src="img/'.$gallery_img.'" alt="gallery" />
							</li>';
							
						}
				?>
		
		<?php
					$get_gallery = "select * from gallery limit 2,3";
					$run_gallery  = mysqli_query($conn, $get_gallery );
					while($row_gallery = mysqli_fetch_array($run_gallery)){
					$gallery_id = $row_gallery['gallery_id'];
					$gallery_img = $row_gallery['gallery_img'];
						echo '<li class="col-md-4">
							<img src="img/'.$gallery_img.'" alt="gallery" />
							</li>';
							
						}
				?>	
</ul>

<p><a href="gallery.php">View More</a></p>
	</div>
</section>	

  <?php include 'footer.php';?>





 
</body>
</html>
