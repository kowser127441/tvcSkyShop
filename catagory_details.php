<?php
error_reporting(0);
$category_id=$_REQUEST['category_id'];
$sub_category_id=$_REQUEST['sub_category_id'];

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
            
            <div id="middle">
            	<div id="middle_top">
                	<!--<div id="slider">
                    	<!--start top-slider-->
        					<?php //include('top-slider.php') ?>
        				<!--end top-slider-->
                    <!--</div><!--end slider-->
                    <!--<div id="middle_ads">
                    	<img src="images/shop-online-bangladesh.png">
                    </div><!--end middle_ads-->
                <!--</div><!--end middle_top-->
                <!--<div class="clear"></div>
                
                <div id="pro_slider">
                	<h2>Popular Products</h2>
                	<!--start top-slider-->
        				<?php //include('bottom-slider.php') ?>
        			<!--end top-slider-->
                    
                <!--</div><!--end pro_slider--><!--<div class="clear"></div>-->
                
                <div class="catagory">
               
                <?php include("connection.php");

             
			 $cat_sql = mysql_query("SELECT category_name FROM category WHERE category_id = '$category_id'");
			 while($cat_data= mysql_fetch_array($cat_sql))
			 {
				$category_name = $cat_data['category_name'];
			 }

				
              

			$sql = mysql_query("SELECT * FROM product WHERE category_id LIKE '%$category_id%' ");
			while($data=mysql_fetch_array($sql))	
			{
				$product_id = $data['product_id'];
				$name = $data['product_name'];
				$details = $data['details'];
				$terms = $data['terms'];
				$price = $data['price'];
				$size = $data['size'];
				$discount = $data['discount'];
				$discount_available = $data['discount_available'];
				$discount_duration = $data['discount_duration'];
				$discount_date= $data['discount_date'];
				
				$dif_pic=mysql_query("SELECT * FROM picture WHERE product_id='$product_id' AND _default='default'");
					while($d_pic=mysql_fetch_array($dif_pic))
					{
						$dif_pic_url=$d_pic['picture_url'];
					}
			
				
				
				
			
				
				
				
				
				?>
                	<h2 class="cata_name"><?php echo $category_name; ?> <span class="cata_all"><a href="catagory.php?$category_id">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="<?php echo 'control_panel/'.$dif_pic_url; ?>"></a>
                        <h1><a href="product.php" target="_blank"><?php echo $name ;?></a></h1>
                        <p class="old_price"><?php echo $price?></p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <?php
			      }
			
					?>
                    
                    
                    
                    
                
                    <div class="clear"></div>
                </div><!--end catagory-->
                <div class="clear"></div>
            </div><!--end middle-->
            <!--<div id="right"></div><!--end right-->