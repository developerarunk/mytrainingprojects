<?php include "includes/header.php"; ?>
<?php 

if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],
                    'item_pic'          =>     $_POST["hidden_pic"],
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_pic'          =>     $_POST["hidden_pic"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
?>

        <div id='wrapper'>

            <section id="cart-section">
                <div class="container-fluid">
                    <div class="x-12 s-12 m-12 l-12 cart-main-col">
                        <div class="x-12 s-8 m-8 l-8 cart-table-col">
                            <form action="" method="">

                                <ul class="list-inline cart-top-ul">
                                    <li>My Shopping Bag (2 Items)</li>
                                    <li>Rs. 250.00</li>
                                </ul>
                             

                                <!--Cart Table-->
                                <div class="table-responsive">
                                    <table width="100%" class="cart-table">
                      <?php   
                      if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                                        <tr>
                                            <td>
                                                <ul class="list-inline shopped-item-ul">
                                                    <!--Shopped item image-->
                                                    <li>
                                                        <div class="shopped-item-img">
                                                            <img src="<?php echo $values["item_pic"]; ?>" class="img-responsive"/>
                                                        </div>
                                                    </li>
                                                    <!--Shopped item description-->
                                                    <li>
                                                        <div class="shopped-tem-description">
                                                            <p class="shopped-item-name"><?php echo $values["item_name"]; ?></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <p>Size: <span>L</span></p>
                                            </td>
                                            <td>
                                                <div class="input-group number-spinner">
                                                    <span class="qty-span">Quantity</span>
                                                    <input type="number" class="form-control text-center" value="<?php echo $values["item_quantity"]; ?>">
                                                </div>
                                            </td>
                                            <td>Rs. <?php echo $values["item_price"]; ?></td>
                                            <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-info cart-delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                        <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                   
                               }  
                          ?> 
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">Rs. <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                        <?php  
                          }  
                          ?>  
                                    </table>
                                </div>
                            </form>
                        </div>

                        <div class="x-12 s-4 m-4 l-4 cart-total-col">
                            <ul class="list-inline cart-top-ul">
                                <li>Price Details</li>
                            </ul>
                            <!--Total amount table-->
                            <div class="total-table-col">
                                <table width="100%" class="total-main-table">
                                    <!--First parent row-->
                                    <tr>
                                        <td>
                                            <table width="100%" class="total-inner-table">
                                                <tr>
                                                    <td>Bag Total</td>
                                                    <td>Rs. 000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Bag Discount</td>
                                                    <td>Rs. 000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax</td>
                                                    <td>Rs. 000.00</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--Second parent row-->
                                    
                                    <!--Third parent row-->
                                    <tr>
                                        <td>
                                            <table width="100%" class="total-inner-table">
                                                <tr>
                                                    <td>Coupon Discount</td>
                                                    <td>Rs. 000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Charges	</td>
                                                    <td>Rs. 000.00</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--Fourth parent row-->
                                    <tr>
                                        <td class="order-total">
                                            <table width="100%" class="total-inner-table">
                                                <tr>
                                                    <td>Order Total</td>
                                                    <td>£000.00</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--Sixth parent row-->
                                    <tr>
                                        <td>
                                            <table width="100%" class="total-inner-table">
                                                <tr>
                                                    <td><button type="button" class="btn btn-info place-order">Place Order</button></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
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