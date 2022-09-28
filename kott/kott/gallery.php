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
<img src="img/gallery.jpg" alt=""/>
<div class="container">
<h3 class="inside_heading text-center">Gallery</h3>
</div>
</section>

<<section class="gallery">
	<div class="container">
		<h1 class="text-center"> Gallery</h1>
		<ul>
		<?php
					$get_gallery = "select * from gallery ";
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


	</div>
</section>	
 	
<?php include 'footer.php';?>

</body>
</html>