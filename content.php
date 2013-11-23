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
                	<div id="slider">
                    	<!--start top-slider-->
        					<?php include('top-slider.php') ?>
        				<!--end top-slider-->
                    </div><!--end slider-->
                    <div id="middle_ads">
                    	<img src="images/shop-online-bangladesh.png">
                    </div><!--end middle_ads-->
                    <div class="clear"></div>
                </div><!--end middle_top-->
                <div class="clear"></div>
                
                <div id="pro_slider">
                	<h2>Popular Products</h2>
                	<!--start top-slider-->
        				<?php include('bottom-slider.php') ?>
        			<!--end top-slider-->
                    
                </div><!--end pro_slider--><div class="clear"></div>
                
                <div class="catagory">
                <?php include('connection.php')?>
                <?php
				
				 $cat_sql = mysql_query("SELECT * FROM category ");
			 while($cat_data= mysql_fetch_array($cat_sql))
			 {
				 $category_id = $cat_data['category_id'];
				$category_name = $cat_data['category_name'];
			 }
				
				?>
                
                	<h2 class="cata_name">Health and Harbal <span class="cata_all"><a href="category.php?category_id=1">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    
                    
                    
                    
                    
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
                
                <div class="catagory">
                	<h2 class="cata_name">Beauty Care <span class="cata_all"><a href="catagory.php">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
                
                <div class="catagory">
                	<h2 class="cata_name">Fitness and Sports <span class="cata_all"><a href="catagory.php">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
                
                <div class="catagory">
                	<h2 class="cata_name">Home and Kitchen <span class="cata_all"><a href="catagory.php">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
                
                <div class="catagory">
                	<h2 class="cata_name">Electronics <span class="cata_all"><a href="catagory.php">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
                
                <div class="catagory">
                	<h2 class="cata_name">Others <span class="cata_all"><a href="catagory.php">View All <img src="images/catagory_arrow.png"></a></span></h2>
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/csw_single_stripe_brown_by_civvy_street.jpg"></a>
                        <h1><a href="product.php" target="_blank">CSW Single Stripe (Brown)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/freshlook_contact_lenses_sterling_gray__1.jpg"></a>
                        <h1><a href="product.php" target="_blank">Freshlook contact lenses (Sterling Gray)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                   <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/molfix_midi_eco_20x6_4-9kg_-6pktbox_baby_diaper.jpg"></a>
                        <h1><a href="product.php" target="_blank">Molfix Midi Eco 20x6 (4-9kg)-Box Baby Diaper</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    
                    <div class="product">
                    	<a href="product.php" target="_blank"><img src="images/cata-img/turquoise-black-set-_earrin.jpg"></a>
                        <h1><a href="product.php" target="_blank">Turquoise-Black Set (Earring+Necklace)</a></h1>
                        <p class="old_price">Tk. 650.00</p>
                        <p class="special_price">Tk. 425.00</p>
                    </div><!--end product-->
                    <div class="clear"></div>
                </div><!--end catagory-->
                
                <div class="clear"></div>
            </div><!--end middle-->
            <!--<div id="right"></div><!--end right-->