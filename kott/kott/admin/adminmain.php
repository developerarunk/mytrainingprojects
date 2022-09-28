<?php
		require 'includes/config.php';

?>	
<!DOCTYPE html>
<html>
<head>
<title>My Store</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<link href="css/admin.css" type="text/css" rel="stylesheet"/>
</head>
<body>
		<main>
		
		
				
					<div class="left col-md-2">
						<div class="logo center-block col-md-8">
							<img src="../img/logo.png" class="img-responsive" alt="logo"/>
						</div>
						
							<h4 class="admin text-center"> Welcome Admin</h4>
					<nav class="aside_menu text-center">
							
							<ul>
							<li> <a href="adminmain.php?home">Home</a></li>
							</ul>
						 <div class="panel-group" id="accordion">
							<div class="panel panel-default panel_style">
								  <div class="panel-heading panel_custo">
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Slider</a>
									</h4>
								  </div>
								  <div id="collapse1" class="panel-collapse collapse" >
								     <div class="panel-body">
									<ul>
										<li><a href="adminmain.php?slide_insert">Add Slider</a><li>	
										<li><a href="adminmain.php?slide_view">View Slider</a><li>
										
									</ul>
									</div>
							</div>
			
						</div>
				
					
							<div class="panel panel-default panel_style">
								  <div class="panel-heading panel_custo">
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Add Content</a>
									</h4>
								  </div>
								  <div id="collapse2" class="panel-collapse collapse" >
								   <div class="panel-body">
									<ul>
										<li><a href="adminmain.php?insert_about">Insert About</a><li>
										<li><a href="adminmain.php?message">Principal Message</a><li>
										
									</ul>
								</div>
							</div>
			
						</div>

				
					
							<div class="panel panel-default panel_style">
								  <div class="panel-heading panel_custo">
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Featured posts</a>
									</h4>
								  </div>
								  <div id="collapse3" class="panel-collapse collapse" >
								     <div class="panel-body">
									<ul>
										<li><a href="adminmain.php?featured">Add Facilities</a><li>
										<li><a href="adminmain.php?featured_view">View Facilities</a><li>
										
										
										
									</ul>
									</div>
							</div>
			
						</div>
						<div class="panel panel-default panel_style">
						  <div class="panel-heading  panel_custo">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Activities</a>
							</h4>
						  </div>
						  <div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body"><ul>
										<li><a href="adminmain.php?activities">Add Activities</a><li>	
										<li><a href="adminmain.php?activities_view">View Activities</a><li>
									
										
										
									</ul></div>
						  </div>
						</div> 
						<div class="panel panel-default panel_style">
						  <div class="panel-heading  panel_custo">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Gallery</a>
							</h4>
						  </div>
						  <div id="collapse6" class="panel-collapse collapse">
							<div class="panel-body"><ul>
										<li><a href="adminmain.php?gallery">Add Gallery</a><li>	
										<li><a href="adminmain.php?gallery_view">View Gallery</a><li>
										
										
										
									</ul></div>
						  </div>
						</div> 		
							<div class="panel panel-default panel_style">
						  <div class="panel-heading  panel_custo">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Testimonials</a>
							</h4>
						  </div>
						  <div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body"><ul>
										<li><a href="adminmain.php?activities">Add Testimonials</a><li>	
										<li><a href="adminmain.php?slide_view">View Testimonials</a><li>
									
										
										
									</ul></div>
						  </div>
						</div> 							
					</div>
	</nav>
	</div>
	<div class="col-md-10 no_padding right">
		<header class="right_side">
			<a href="#"> Logout</a>
		<div class="clearfix"></div>
		</header>
		<div class="main_content">
			<div class="container-fluid">
			
				
				<?php
				if(isset($_GET['home']))
				{
					include('home.php');
					
				}
					if(isset($_GET['slide_insert'])){
					include('slider_insert.php');	
						}
				
					if(isset($_GET['slide_view'])){
					include('slider_view.php');	
					}
			
				
				 if(isset($_GET['edit_slide'])){
					include('edit_slide.php');	
				}
				if(isset($_GET['insert_about'])){
					include('insert_about.php');	
				}
				if(isset($_GET['featured'])){
					include('featured.php');	
				}
				if(isset($_GET['activities'])){
					include('activities.php');	
				}
				if(isset($_GET['message'])){
					include('message.php');	
				}
				 if(isset($_GET['edit_featured'])){
					include('edit_featured.php');	
				}
				if(isset($_GET['edit_activities'])){
					include('edit_activities.php');	
				}
				if(isset($_GET['featured_view'])){
					include('view_featured.php');	
				}
				if(isset($_GET['activities_view'])){
					include('view_activities.php');	
				}
				if(isset($_GET['gallery'])){
					include('gallery.php');	
				}
				if(isset($_GET['gallery_view'])){
					include('gallery_view.php');	
				}
				if(isset($_GET['edit_gallery'])){
					include('edit_gallery.php');	
				}
				?>
			</div>



		
		
		</div>
	</div>
	</main>






</body>
</html>
