<?php include "includes/header.php"; ?>

<?php if(isset($_GET['cat'])){
    $cat_id=$_GET['cat'];
    
        $sql = "SELECT * FROM `product_cat` WHERE cat_id=$cat_id";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
} ?>
        <div id='wrapper'>

            <section id="common-products">
                <div class="container-fluid">
                    <div class="x-12 s-12 m-12 l-12 c-products-main-col">

                        <h2 class="section-heading"><?php echo $row["cat_name"]; ?></h2>

                        <div class="x-12 s-12 m-12 l-12 c-products-inner-col">
                            
                        <?php 
                            
                            $sql = "SELECT * FROM `products` where pro_cat_id=$cat_id";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {

                            while($row = mysqli_fetch_assoc($result)) {

                            ?>
                            <div class="x-12 s-4 m-4 l-4 c-product-col">
                                <form method="post" action="cart.php?action=add&id=<?php echo $row["pro_id"]; ?>">  
                                    <img src="uploads/<?php echo $row["pro_img"]; ?>" class="responsive-image"/>
                                    <a class="fancy-link" href="uploads/<?php echo $row["pro_img"]; ?>" data-fancybox data-caption="">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>

                                    <p class="cp-name"><?php echo $row["pro_title"]; ?></p>
                                    <span class="cp-price"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $row["pro_price"]; ?></span>
                                    <input type="hidden" name="quantity" class="" value="1" />  
                                   <input type="hidden" name="hidden_pic" value="uploads/<?php echo $row["pro_img"]; ?>" />  
                                   <input type="hidden" name="hidden_name" value="<?php echo $row["pro_title"]; ?>" />  
                                   <input type="hidden" name="hidden_price" value="<?php echo $row["pro_price"]; ?>" />  
                                    
                                    <button type="submit" name="add_to_cart"  class="btn btn-success pull-right" value="Add to Cart" > <i class="fa fa-shopping-cart"></i></button> 
                                </form>  
                            </div>
                           <?php 
                                }
                            } else {
                                echo "No Products!";
                            }

                        ?>
							

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

