<?php 

error_reporting(0);

$product_id=$_REQUEST['product_id'];
$name=$_REQUEST['product_name'];
$category_id=$_REQUEST['category_id'];

//echo $category_id;


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


            <!--popupcontent-->
            <div id="grayBG" class="grayBox" style="display:none;"></div> 
                    <div id='LightBox<?php echo $product_id; ?>' class="box_content4" style="display:none;"> 
                    
                    
                    			<div id="order_page">                   
                 <div class="order_page_bg" >
                 	<div class="purchase">
                    	<h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:538px; padding-bottom:0px; display:inline;">Your Purchase</h3>
                        
                        <a onclick="displayHideBox('<?php echo $product_id;?>'); return false;" style="float:right; margin-right:5px; color:#06F; cursor:pointer;"><img src="images/close.png" title="Close" style="width:80px;" /></a>
                        
                        <form name="form_<?php echo $product_id; ?>" action="buy_product.php" method="post" onsubmit="return validateForm(<?php echo $product_id; ?>)">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                        	<table width="100%" border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; margin-top:5px;">
                              <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; text-align:center;">
                                <td style="width:100px; text-align:left;">Item Name</td>
                                <td style="width:80px">Quantity</td>
                                <td style="width:80px">Unit Price</td>
                                <td style="width:100px">Total Payable Price</td>
                              </tr>
                              <tr>
                                <td style=" text-align:left; padding-top:0px;"><?php echo $data['product_name'];  ?></td>
                                <td style=" text-align:center; padding-top:0px;"><input onchange="total(<?php echo $new_price ;?>,<?php echo $product_id;?>)"  maxlength="4" name="quantity" id="quantity-<?php echo $product_id; ?>" required="required" size="5" type="text" value="1" style="text-align:center" />
                                
                                <input type="button" value="Update" />
                                

                                
                                </td>
                               	
                                <td style=" text-align:center; padding-top:0px;">৳ <?php echo $new_price ; ?></td>
                                <td style=" text-align:center; padding-top:0px;">৳ <p id="total_<?php echo $product_id; ?>" style="display:inline;"><?php echo $new_price ; ?></p></td>
                              </tr>
                            </table>

                       
                        
                        <h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:538px; padding-bottom:0px;">Your Personal Information</h3>
                        
                        <table cellpadding="5" cellspacing="0" width="100%" style="margin:10px 10px 0 10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                                                        
                            <tr>
                            	<td style="padding-bottom:0px;">Full Name<span style="color:#F00">*</span></td>
                              	<td style="padding-bottom:0px;">Email</td>
                            </tr>
                            
                            <tr>
                              	<td style="padding-bottom:0px;"><input id="user_firstname" name="user_name" size="30" type="text"  /></td>
                              	<td style="padding-bottom:0px;"><input name="email" size="30" type="text" value="" placeholder="Email address is not required" /></td>
                            </tr>
                            
                            <tr>
                              	<td style="padding-bottom:0px;">Gender<span style="color:#F00">*</span></td>
                              	<td style="padding-bottom:0px;">Phone<span style="color:#F00">*</span></td>
                            </tr>
                            
                            <tr>
                              	<td>
                                	<table>
                                  		<tr>
                                    		<td style="padding-bottom:0px;"><input checked="checked" name="gender" type="radio" value="Male" /></td>
                
                                    		<td valign="top" style="padding-bottom:0px;">Male</td>
                                    		<td style="padding-bottom:0px;"><input name="gender" type="radio" value="Female" /></td>
                                    		<td valign="top" style="padding-bottom:0px;">Female</td>
                                  		</tr>
                                	</table>
                              	</td>
                              
                              	<td valign="top"><input class="phone" id="user_phone" name="phone" size="30" style="width:160px;margin-bottom:0px" type="text" /></td>
                            </tr>
                            
                            <tr>
                              	<td style="padding-bottom:0px;">Address<span style="color:#F00">*</span></td>
                            </tr>
                            
                            <tr>
                              	<td><textarea cols="40" id="user_address" name="address" rows="1" style="width:290px;"></textarea></td>
                            </tr>
                          </table>
                          
                                                   
                          <h3 class="order_pur" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; margin:5px 0 0 5px; border-bottom:2px #000 solid; width:538px; padding-bottom:0px;">Your Delivery Information</h3>
                          
                          <table style="margin:5px 10px 0 5px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                          	<tr>
                            	
                              	<td style="width: 600px; padding-bottom:0px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; color:#FF0000;">Cash on Delivery</td>
                            </tr>
                            
                            <tr>
                              	<td colspan="4" style="padding-bottom:0px;">
                                	<input checked="checked" name="place" type="radio" value="Inside Dhaka" />&nbsp;Inside Dhaka &nbsp;
                                &nbsp;<input name="place" type="radio" value="Outside Dhaka" />&nbsp;Outside Dhaka
                                &nbsp;<input name="place" type="radio" value="Outside Bangladesh" />&nbsp;Outside Bangladesh
                              	</td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                  Shipping Address:<br /><textarea cols="40" name="shipping_address" rows="2" style="width:290px; margin-top:5px;"></textarea>
                                </td>
                                
                                
                                 <td>
                                <?php

									$n1 = rand(1,15);
									$n2 = rand(1,15);
									//start making our result unpredictable & non-aligned with hidden value
									$result_2 = $n1+$n2;
									$result_2 = ($result_2*3)-2;
									$result_2 = ($result_2+4)*5;
									$question="$n1 + $n2 = ?";
									?>
                                 <p style="color:#090;">Please, Answer the Summation Value of <?php echo $question.PHP_EOL; ?> </p>
                               <input name="answer" type="text"><br />
								<input type="hidden" name="result_2" value="<?php echo $result_2; ?>">
                                </td>
                                
                                
                            </tr>
                
                          </table>
                          
                          <table class="form" cellpadding="5" cellspacing="0" style="margin:0px 10px 0 10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;">
                            <tr>
                              <td colspan="6" style="padding-bottom:0px;">
                                <input name="checkbox" type="checkbox" value="check" />
                                    I agree to the <a href="#" style="text-decoration: underline; color:#999999;">Terms of Use</a>
                              </td>
                            </tr>
                            
                            <tr>
                              <td colspan="6">
                    
                             <button  type="submit" style="width:120px; heioght:37px; background-color:#FFCAFF ; border:none; cursor:pointer; margin-bottom:15px;"><img src="images/buy.png" title="Buy This Product" alt="Buy Product" style="width:98px; heioght:37px;"/></button>
                               <!--  <input type="submit" value="Buy Product"  /> -->
                              <span style=" margin-top:15px; margin-bottom:15px; position:absolute; ">
                                Or
                                    <a href="" onclick="displayHideBox('<?php echo $product_id;?>'); return false;" style="text-decoration: none; color:#900; font-weight:bold;  ">Cancel</a>
                    		</span>	
                    
                              </td>
                            </tr>
                            </table>
                             </form><!--end form-->
                          
                    </div><!--end purchase-->
                 	
                    
                 </div><!--end order_page_bg-->   
               
            </div><!--end order_page-->
                   
                  
                    </div>
            
            
            
            
            <!--END POPUP-->
            
            
            
            
            
            
            
            <div id="pro_middle">
            <script type="text/javascript" src="js/zoomer.js"></script>
<script src='js/jquery-1.8.3.min.js'></script>
<script src='js/jquery.elevateZoom-2.5.5.min.js'></script>
            <?php include('connection.php') ?>
             <?php
					  //echo $sub_category_id2;

	$sql = mysql_query("SELECT * FROM product WHERE product_id = '$product_id' AND category_id = '$category_id' ");
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
                	<div class="price">Price <br/>Tk. <?php echo $current_price; ?> <br/><?php if($discount_available == 'yes'){?> <span class="discount">Tk. <?php echo $price; ?></span><?php } ?></div><!--end price-->
                    <?php
                    if($discount_available == 'yes')
					{
					?>
                    <div class="price">Discount <br/><?php echo $percentage;?>%</div><!--end price-->
                    
                    <div class="price">Save <br/>Tk. <?php echo $save_price ;?></div><!--end price-->
                    <?php
					}
					?>
                    <?php
					if($discount_available == 'yes')
					{
						?>
                    <div class="price">Days Left <br/><?php echo $day_left; ?>Days</div><!--end price-->
                    <?php
					}
					?>
                    <div class="order" onclick="displayHideBox('<?php echo $product_id;?>')" style="cursor:pointer;" ><a>Order Now</a></div><!--end price-->
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
                    
                    
                      <?php
                           
                            if( $color !="")
                            {
                            ?>
                            
                            <h3 style="color:#51A0FF;">Color :</h3>
                            <p style="color:#060;"><?php echo nl2br($color); ?></p>
                    	<?php
                    	}
                    	?>
                    	<h2>Products Description</h2>
                        <ul>
                        					<?php
                                            $details = str_replace(array("\r\n","\r","\n"),"<br/><img src='images/dar.gif' style='margin-top:15px;' /> ",$details);
											?>
                                            
                                            
                                            <span style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif"><img src='images/dar.gif'/> <?php echo nl2br($details); ?> </span>
                            <!--<li><img src="images/dar.gif">Easy to fill liquid, use water to wash and clean.</span></li>
                            <li><img src="images/dar.gif">Available Color: Black.</li>
                            <li><img src="images/dar.gif">With index 0.2ml-1.6ml on atomizer. Visible atomizer.</li>
                            <li><img src="images/dar.gif">Match with 510, 510-T, EGO, EGO-T, EGO-W, EGO-C EGO-L etc.</li>-->
                        </ul>
                    </div><!--end view_des-->
                    
                    <div class="view_des distance">
                    	<h2>Terms of Conditions</h2>
                        <ul>
                        	 <?php 
						 
						 $terms = str_replace(array("\r\n","\r","\n"),"<br/> <img src='images/dar.gif' style='margin-top:15px;'/> ",$terms);
						 
						 ?>
                            <span style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif""><img src='images/dar.gif'/> <?php echo nl2br($terms); ?> </span>
                        </ul>
                    </div><!--end view_des-->
                </div><!--end pro_des-->
            </div><!--end pro_middle-->
            
            <div id="right">
            	<h2 class="pro_name">Related Products</h2>
                <?php 
				$pro_sql = mysql_query("SELECT * FROM product WHERE category_id = '$category_id' AND product_id != '$product_id'");
				while($pro_data= mysql_fetch_array($pro_sql))
				{
				$product_id = $pro_data['product_id'];
				$product_name1 = $pro_data['product_name'];
				$details1 = $pro_data['details'];
				$terms1 = $pro_data['terms'];
				$price1 = $pro_data['price'];
				$old_price1 = $price1;
				$size1 = $pro_data['size'];
				$discount1 = $pro_data['discount'];
				
				$current_price1 = $old_price1 - $discount;
				
				$percentage1 = intval( ($discount * 100 ) / $price );
				
				$new_price1 = $price1 - $discount1 ;
				
				$save_price1 = $price - $current_price ;
				
				
				$discount_available1 = $pro_data['discount_available'];
				$discount_duration1 = $pro_data['discount_duration'];
				$discount_date1= $pro_data['discount_date'];
				
				
				$date = date('Y-m-d H:i:s');
                $day_left= round(abs(strtotime($discount_date)-strtotime($date))/86400);
                $day_left = $discount_duration - $day_left;
				
				
			$pic_sql=mysql_query("SELECT * FROM picture WHERE product_id ='$product_id' AND _default='default'");
					while($pic_data=mysql_fetch_array($pic_sql))
					{
						$dif_pic=  'control_panel/'.$pic_data['picture_url'];
					}
			
				
                ?>
                <div class="rel_product">
                   	<a href="product.php?category_id=<?php echo $category_id; ?>&product_id=<?php echo $product_id; ?>"><img src="<?php echo $dif_pic; ?>"></a>
                    <h1><a href="product.php?product_id=<?php echo $product_id;?> "><?php echo $product_name ;?></h1>
                    
                   
                    <?php 
					if($discount_available1 == 'yes')
					{
					?>
                    <p class="old_price"><?php echo $old_price1;?></p>
                 	<p class="special_price"><?php echo $new_price1?></p>
                    <?php
					}
					else {
						?>
						<p class="special_price"><?php echo $new_price1;?></p>
                        <?php
					}
                        ?>
                    
                       </div><!--end product-->
                    <?php 
					
			            }
						?>
                 
               
               
               
            </div><!--end right-->