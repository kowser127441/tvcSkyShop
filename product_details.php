<?php 

error_reporting(0);

$product_id=$_REQUEST['product_id'];
//$sub_category_id2=$_REQUEST['sub_category_id'];

//echo $product_id;


?>
			<div id="left">
            	<div id="menu">
                	<!--start menu-->
        				<?php include('menu.php') ?>
        			<!--end menu-->
                </div><!--end menu-->
                <div id="left_ads">
                	<img src="images/banner-01.jpg">
                    <img src="images/banner-02.jpg">
                    <img src="images/banner-03.jpg">
                    <img src="images/banner-06.jpg">
                </div><!--end left_ads-->
            </div><!--end left-->
            
            <div id="pro_middle">
            <script type="text/javascript" src="js/zoomer.js"></script>
<script src='js/jquery-1.8.3.min.js'></script>
<script src='js/jquery.elevateZoom-2.5.5.min.js'></script>
            <?php include('connection.php') ?>
             <?php
					  //echo $sub_category_id2;

	$sql = mysql_query("SELECT * FROM product WHERE product_id = $product_id ");
			while($data=mysql_fetch_array($sql))	
			{
				$product_id = $data['product_id'];
				$name = $data['product_name'];
				$details = $data['details'];
				$terms = $data['terms'];
				$price = $data['price'];
				$old_price = $price;
				$size = $data['size'];
				$discount = $data['discount'];
				
				$current_price = $price - $discount;
				
				$percentage = intval( ($discount * 100 ) / $price );
				
				$new_price = $price - $discount ;
				
				$save_price = $price - $current_price ;
				
				
				$discount_available = $data['discount_available'];
				$discount_duration = $data['discount_duration'];
				$discount_date= $data['discount_date'];
				
				
				$date = date('Y-m-d H:i:s');
                $day_left= round(abs(strtotime($discount_date)-strtotime($date))/86400);
                $day_left = $discount_duration - $day_left;
				
				$dif_pic=mysql_query("SELECT * FROM picture WHERE product_id='$product_id' AND _default='default'");
					while($d_pic=mysql_fetch_array($dif_pic))
					{
						$dif_pic_url=  'control_panel/'.$d_pic['picture_url'];
					}
			}
			?>

            
            	<h1 class="pro_name"><?php echo $name ?>:</h1>
                <div id="product_photo"><img src="<?php echo $dif_pic_url; ?>" id="zoom_01"  style="width:360px; height:360px">
                <script>
						$('#zoom_01').elevateZoom();
					</script>
                </div><!--end product_photo-->
                <div id="pro_price">
                	<div class="price">Price <br/>Tk. <?php echo $current_price; ?> <br/> <span class="discount">Tk. <?php echo $price; ?></span></div><!--end price-->
                    <div class="price">Discount <br/><?php echo $percentage;?>%</div><!--end price-->
                    <div class="price">Save <br/>Tk. <?php echo $save_price ;?></div><!--end price-->
                    <div class="price">Days Left <br/><?php echo $day_left; ?>Days</div><!--end price-->
                    <div class="order"><a href="order.php">Order Now</a></div><!--end price-->
                </div><!--end pro_price-->
                <div class="clear"></div>
                
                <div id="pro_view">
                <?php  
					 
                       $pic_sql = mysql_query("SELECT * FROM picture WHERE product_id='$product_id' LIMIT 5");
					while($s_pic = mysql_fetch_array($pic_sql))
					{
						$picture_url=  'control_panel/'.$s_pic['picture_url'];
						
                        ?>
                	<div class="pro_view_img"><img src="<?php echo $picture_url; ?>" onclick="changeImage('<?php echo $picture_url; ?>')" style="cursor:pointer; width:100px; height:100px"   /></div><!--end pro_view_img--><?php
					}
					?>
                   
                </div><!--end pro_view-->
                <div class="clear"></div>
                
                <div id="pro_des">
                	<div class="view_des">
                    	<h2>Products Description</h2>
                        <ul>
                        	<li><img src="images/dar.gif">Better taste, huge vapor.</li>
                            <li><img src="images/dar.gif">Easy to fill liquid, use water to wash and clean.</span></li>
                            <li><img src="images/dar.gif">Available Color: Black.</li>
                            <li><img src="images/dar.gif">With index 0.2ml-1.6ml on atomizer. Visible atomizer.</li>
                            <li><img src="images/dar.gif">Match with 510, 510-T, EGO, EGO-T, EGO-W, EGO-C EGO-L etc.</li>
                        </ul>
                    </div><!--end view_des-->
                    
                    <div class="view_des distance">
                    	<h2>Terms of Conditions</h2>
                        <ul>
                        	<li><img src="images/dar.gif">Better taste, huge vapor.</li>
                            <li><img src="images/dar.gif">Easy to fill liquid, use water to wash and clean.</span></li>
                            <li><img src="images/dar.gif">Available Color: Black.</li>
                            <li><img src="images/dar.gif">With index 0.2ml-1.6ml on atomizer. Visible atomizer.</li>
                            <li><img src="images/dar.gif">Match with 510, 510-T, EGO, EGO-T, EGO-W, EGO-C EGO-L etc.</li>
                        </ul>
                    </div><!--end view_des-->
                </div><!--end pro_des-->
            </div><!--end pro_middle-->
            
            <div id="right">
            	<h2 class="pro_name">Related Products</h2>
                
                <div class="rel_product">
                   	<a href="product.php"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                    <h1><a href="product.php">CSW Single Stripe (Brown)</a></h1>
                    <p class="old_price">Tk. 650.00</p>
                 	<p class="special_price">Tk. 425.00</p>
                 </div><!--end product-->
                 
                 <div class="rel_product">
                   	<a href="product.php"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                    <h1><a href="product.php">CSW Single Stripe (Brown)</a></h1>
                    <p class="old_price">Tk. 650.00</p>
                 	<p class="special_price">Tk. 425.00</p>
                 </div><!--end product-->
                 
                 <div class="rel_product">
                   	<a href="product.php"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                    <h1><a href="product.php">CSW Single Stripe (Brown)</a></h1>
                    <p class="old_price">Tk. 650.00</p>
                 	<p class="special_price">Tk. 425.00</p>
                 </div><!--end product-->
                 
                 <div class="rel_product">
                   	<a href="product.php"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                    <h1><a href="product.php">CSW Single Stripe (Brown)</a></h1>
                    <p class="old_price">Tk. 650.00</p>
                 	<p class="special_price">Tk. 425.00</p>
                 </div><!--end product-->
            </div><!--end right-->