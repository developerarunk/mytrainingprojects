<?php include "includes/conn.php"; ?>
<!DOCTYPE html> 
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>



        <header id="header">
            <div class="container-fluid">

                <!--Upper main col-->
                <div class="x-12 s-12 m-12 l-12 header-upper-col">
                    <div class="x-6 s-6 m-6 l-6 header-slogan-col">
                        <p>India's Leading Jewellery Distributors</p>
                    </div>
                    <div class="x-6 s-6 m-6 l-6 header-ul-col">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; +91 9876543210</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; <a href='#'>info@jewellerykings.co.in</a></li>
                        </ul>
                    </div>
                </div>

                <!--Logo main col-->
                <div class="x-12 s-12 m-12 l-12 header-main-col">

                    <div class="x-12 s-4 m-4 l-4 header-logo-col">

                    </div>
                    <div class="x-12 s-4 m-4 l-4 header-logo-col">
                        <a href="index.html"><img src="images/logo-new.png" class="responsive-image"/></a>
                    </div>
                    <div class="x-12 s-4 m-4 l-4 header-list-col">
                        <ul class="list-inline header-ul">
                            <?php if(isset($_SESSION["logged_in"])){ ?>
                                
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $_SESSION["first_name"];  ?></a></li>
                            <li><a href="logout.php"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Logout</a></li>
                          <?php }else{?> 
                            <li><a href="contact.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Visit Us</a></li>
                            <li><a href="login.php"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login</a></li>
                            <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Register</a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>

                <!--Menu main col-->
                <div class="x-12 s-12 m-12 l-12 header-menu-col">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav">
                                <?php                                   
                                $sql = "SELECT * FROM `product_type`";
                                $result = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_assoc($result)){

                                    $pro_cats=$row["pro_cats"];

                                    $pro_cats=explode(",",$pro_cats); ?>
                                    <li class="dropdown">
                                        <a href="#"><?php echo $row["type_name"]; ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="dropdown-content l-12">
                                            <div class="l-5 drop-6-left">
                                                <p class='menu-head'><?php echo $row["type_name"]; ?></p>
                                                <?php
                                                foreach($pro_cats as $pro_cat){
                                                       
                                                        $psql = "SELECT * FROM `product_cat` where cat_id='$pro_cat'";
                                                        $presult = mysqli_query($conn,$psql);
                                                        $prow = mysqli_fetch_assoc($presult);
                                                        echo "<a href='bangles.php?cat=$pro_cat'>".$prow["cat_name"]. "</a>";
                                                }?>
                                                
                                            </div>
                                            <div class="l-7 drop-6-left">
                                                <img src='images/menu-women.jpg' class="responsive-image"/>
                                            </div>
                                        </div>
                                    </li>

                                <?php } ?>
                                    
                                     
									<li><a href="collections.html">Collections</a></li>
									 <li><a href="about.html">gifts</a></li>
                                    <li><a href="about.html">About JewelleryKings</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav> 
                </div>


            </div>
        </header>