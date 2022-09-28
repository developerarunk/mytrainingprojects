<?php include "includes/header.php"; ?>
<?php 
  if(isset($_SESSION["logged_in"])){
     echo '<script>window.location="index.php"</script>';   }
                         
if(isset($_POST['sbmt'])){
    
$fast_name=$_POST['fast_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
    
    
$sql="INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `pass`) VALUES (NULL, '$fast_name', '$last_name', '$email', '$password');";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<script>window.location="index.php"</script>';  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

if(isset($_POST['lsbmt'])){ 
    
$email=$_POST['email'];
$password=$_POST['password'];
    
$sql = "SELECT * FROM `customers` where email='$email' AND pass='$password'";
$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) {
   
    $row = mysqli_fetch_assoc($result);
    $_SESSION["first_name"]=$row['first_name'];
    $_SESSION["logged_in"]=true;
    

} else {
    echo "0 results";
}





}

?>

        <div id='wrapper'>


            <section id="login-section">
                <div class="container-fluid">
                    <div class="x-12 s-12 m-12 l-12 login-main-col">
                        <h2>Login or Create an Account</h2>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Registered Customers</a></li>
                            <li><a data-toggle="tab" href="#menu1">New Customer</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="x-12 s-12 m-12 l-12 tab-pane-inner-main-col padding-zero">
                                    <div class="x-12 s-6 m-6 l-6 tab-pane-inner-small-col tab-left-col">
                                        <p>If you have an account with us, please log in.</p>
                                        <form class="login-form" method="post" action="login.php">
                                            <div class="form-group">
                                                <label for="name" class="contact-label">Email Address*</label>
                                                <input class="form-control" placeholder="" type="email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="contact-label">Password*</label>
                                                <input class="form-control" id="exampleInputEmail1" placeholder="" type="password" name="password">
                                            </div>
                                            <ul class="list-inline login-form-ul">
                                                <li>*Required Fields</li>
                                                <li><a href="#">Forgot Your Password?</a></li>
                                            </ul>
                                            <button type="submit" class="btn btn-default contact-send-btn" name="lsbmt">Log In</button>
                                        </form>
                                    </div>
                                    <div class="x-12 s-6 m-6 l-6 tab-pane-inner-small-col tab-right-col">
                                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="x-12 s-12 m-12 l-12 tab-pane-inner-main-col padding-zero">
                                    <form method="post" action="">
                                    <div class="x-12 s-6 m-6 l-6 tab-pane-inner-small-col tab-left-col">
                                        <p class="form-heads">Personal Information</p>
                                        <div class="login-form"  method="post" action="registration.php">
                                            <div class="form-group">
                                                <label for="name" class="contact-label">First Name*</label>
                                                <input class="form-control" placeholder="" type="text" name="fast_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="contact-label">Last Name*</label>
                                                <input class="form-control" placeholder="" type="text" name="last_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="contact-label">Email Address*</label>
                                                <input class="form-control"  placeholder="" type="email" name="email">
                                            </div>
                                            <div class="form-groups">
                                                <ul class="list-inline check-ul">
                                                    <li><input type="checkbox" id="check" style="margin: 0px;"></li>
                                                    <li><label for="check" class="contact-label">Sign Up for Newsletter</label></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="x-12 s-6 m-6 l-6 tab-pane-inner-small-col tab-right-col">
                                        <p class="form-heads">Login Information</p>
                                        <div class="login-form"    method="post" action="registration.php">
                                            <div class="form-group">
                                                <label for="name" class="contact-label">Passwrod*</label>
                                                <input class="form-control" placeholder="" id="password" type="password" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="contact-label">Confirm Password*</label>
                                                <input class="form-control input-danger"  placeholder="" id="confirm_password" type="text" name="confirm_password">
                                            </div>
                                            <button type="submit" class="btn btn-default contact-send-btn" id="csmt" name="sbmt">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="features-section">
                <div class="container-fluid">
                    <div class="x-12 s-12 m-12 l-12 features-main-col">
                        <ul class="list-inline features-ul">
                            <li>
                                <span class="feature-icon"></span>
                                <p>Certificate of Authenticity</p>
                            </li>
                            <li>
                                <span class="feature-icon"></span>
                                <p>30 Day Money Back</p>
                            </li>
                            <li>
                                <span class="feature-icon"></span>
                                <p>Lifetime Exchange & Buy Back</p>
                            </li>
                            <li>
                                <span class="feature-icon"></span>
                                <p>Free Worldwide Shipping & Transit Insurance</p>
                            </li>
                            <li>
                                <span class="feature-icon"></span>
                                <p>Transparent Pricing</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="testimonials-section">
                <div class="container-fluid">
                    <div class="x-12 s-12 m-12 l-12 testimonials-main-col">
                        <h2 class="section-heading">What Our Clients Said About Us</h2>

                        <div id="testimonials-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <h2>Sarabjit Kaur <i class="fa fa-commenting-o" aria-hidden="true"></i></h2>
                                <p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    Jewellary Kings are a great bunch of people. They are very supportive and the best in the market. I would love to shop from them again. They are THE BEST in quality. I would suggest others also to buy jewellery from Jewellary Kings.
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="item">
                                <h2>Neha <i class="fa fa-commenting-o" aria-hidden="true"></i></h2>
                                <p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    "I really liked the Jubilant necklace and had my eye on it for a long time. But I was not sure how it would look on me. The customer service agent asked me to try it first before ordering. I booked a Try At Home appointment on Friday and on Sunday once I had finished all my work I sat and tried out the necklace at home. I really enjoyed this new shopping experience.".
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p>
                            </div>
                            <div class="item">
                                <h2>Sarab Kumar <i class="fa fa-commenting-o" aria-hidden="true"></i></h2>
                                <p>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    "The ring looks exactly the way it looked on the website. The prices were quite reasonable and I found an impressive ring under my budget. Fiancee thinks it cost me an arm and a leg! I told her- darling, anything for you
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

  <?php include "includes/footer.php"; ?>
