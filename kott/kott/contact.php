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
<?php include 'header.php';?>

<section class="contact_banner">
<img src="img/kidibanner.jpg" alt=""/>
<div class="container">
<h3 class="inside_heading text-center">Contact Us</h3>
</div>
</section>


<section class="contact_form">
	<div class="container">
			<h3>Any Enquiry</h3>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form_inputs">
				<form class="enquiry_form">
					<input type="text" name="" placeholder="Name" id="" />
					<input type="tel" name="tel" placeholder="Phone" id="" />
					<input type="email" name="email" placeholder="Email" id="" />
					<textarea name="" id="" cols="30" rows="5">Message</textarea>
				</form>
				<a href="#submit">Send</a>
		</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 address">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center address_content">
		<h3>Address</h3>
		<article class="location"><span class="fa fa-map-marker"></span></article>
		<p> Bhaini Sahib Road, Kot Gangu Rai,Ldh</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center address_content">
		<h3>Phone</h3>
		<article class="tele"><span class="fa fa-phone"></span></article>
		<p>+91-8569052012 +91-8569052012</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center address_content">
		<h3>Email</h3>
		<article class="msg"><span class="fa fa-envelope-o"></span></article>
		<p>info@nankanasahib.com  nspc.com</p>
	</div>
	<div class="clearfix"></div>
 

	</div>		
	<div class="clearfix"></div> 
</div>

</div>
</section>

<section class="map">						
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.772387477608!2d76.06990781427672!3d30.865046986296385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910755a29299811%3A0xf7e4347027176e1d!2sNankana+Sahib+College+of+Education+Kot+Gangu+Rai!5e0!3m2!1sen!2sin!4v1495538471439" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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