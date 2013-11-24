<!DOCTYPE html>

<!-- BEGIN html -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<!-- BEGIN head-->
<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- Title -->
    <title>wmuSlider Demo</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="bottom-slider/css/bottom-slider.css" type="text/css" media="screen" />
            
<!-- END head -->
</head>

<!-- BEGIN body -->
<body>

    <!-- BEGIN .wmuSlider -->
    <!--<div class="wmuSlider example1">
        
        <div class="wmuSliderWrapper">
            <article>
                <img src="http://farm7.static.flickr.com/6052/6279000273_218313c876.jpg" />
            </article>
    
            <article>
                <img src="http://farm7.static.flickr.com/6104/6271856202_1e3ccb3deb.jpg" />
            </article>
    
            <article>
                <img src="http://farm7.static.flickr.com/6053/6268322528_818ab33f7f.jpg" />
            </article>

            <article>
                <img src="http://farm7.static.flickr.com/6232/6239597762_15491d4c97.jpg" />
            </article>
        
            <article>
                <img src="http://farm7.static.flickr.com/6057/6224753006_9fb962d890.jpg" />
            </article>

            <article>
                <img src="http://farm7.static.flickr.com/6036/6213397745_1d8f223e93.jpg" />
            </article>
        </div>
                        
    
    </div>-->
	<!-- END .wmuSlider -->
    
    <!-- BEGIN .wmuSlider -->
    <!--<div class="wmuSlider example2">
        
        <div class="wmuSliderWrapper">
            <article>
                <img src="http://farm7.static.flickr.com/6052/6279000273_218313c876.jpg" />
            </article>
    
            <article>
                <img src="http://farm7.static.flickr.com/6104/6271856202_1e3ccb3deb.jpg" />
            </article>
    
            <article>
                <img src="http://farm7.static.flickr.com/6053/6268322528_818ab33f7f.jpg" />
            </article>

            <article>
                <img src="http://farm7.static.flickr.com/6232/6239597762_15491d4c97.jpg" />
            </article>
        
            <article>
                <img src="http://farm7.static.flickr.com/6057/6224753006_9fb962d890.jpg" />
            </article>

            <article>
                <img src="http://farm7.static.flickr.com/6036/6213397745_1d8f223e93.jpg" />
            </article>            
        </div>
                        
    
    </div>-->
	<!-- END .wmuSlider -->
    
    <!-- BEGIN .wmuSlider -->
    <div class="wmuSlider example3">
        
        <div class="wmuSliderWrapper">
        <?php include('connection.php');?>
            <?php
			
			$sql= mysql_query("SELECT * FROM popular_product");
			while($data = mysql_fetch_array($sql))
			{
				$product_id = $data['product_id'];
				
			$pic_query=mysql_query("SELECT * FROM picture WHERE product_id='$product_id' AND _default='default'");
			 while($pic_data=mysql_fetch_array($pic_query))
				{
				   $picture=$pic_data['picture_url'];	
								
			     }
				// echo 'aasas';
			?>
            <article>
            
                <img src="<?php echo 'control_panel/'.$picture ; ?>" />
                </article>
			<?php
				}
			?>
            
    
           <!-- <article>
                <img src="bottom-slider/images/logo_Aesthetic-eStore.jpg" />
            </article>
    
            <article>
                <img src="bottom-slider/images/logo_Angelic-Outfits-eStore.jpg" />
            </article>

            <article>
                <img src="bottom-slider/images/logo_Baton-Rouge-Group-eStore.jpg" />
            </article>
        
            <article>
                <img src="bottom-slider/images/logo_Civvy-Street-eStore.jpg" />
            </article>

            <article>
                <img src="bottom-slider/images/logo_Crackerjack.jpg" />
            </article>
            
             <article>
                <img src="bottom-slider/images/logo_Didars-eStore.jpg" />
            </article>
            
             <article>
                <img src="bottom-slider/images/logo_Dot-Button-eStore.jpg" />
            </article>
            
            <article>
                <img src="bottom-slider/images/logo_Fortuna-Bangladesh-eStore.jpg" />
            </article>
            
            <article>
                <img src="bottom-slider/images/logo_Khazana-Mithai-Ltd-eStore.jpg" />
            </article>
            
            <article>
                <img src="bottom-slider/images/logo_Leo9-eStore.jpg" />
            </article>
            
            <article>
                <img src="bottom-slider/images/logo_Minsa-Enterprise-eStore.jpg" />
            </article>-->
        </div>
                        
    
    </div>
    <!-- END .wmuSlider -->

    <!-- BEGIN .wmuGallery -->
    <!--<div class="wmuGallery example4">
    
        <div class="wmuSlider">        
            <div class="wmuSliderWrapper">
                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6052/6279000273_218313c876_s.jpg" data-src-full="http://farm7.static.flickr.com/6052/6279000273_218313c876.jpg" />
                </article>
        
                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6104/6271856202_1e3ccb3deb_s.jpg" data-src-full="http://farm7.static.flickr.com/6104/6271856202_1e3ccb3deb.jpg" />
                </article>
        
                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6053/6268322528_818ab33f7f_s.jpg" data-src-full="http://farm7.static.flickr.com/6053/6268322528_818ab33f7f.jpg" />
                </article>

                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6232/6239597762_15491d4c97_s.jpg" data-src-full="http://farm7.static.flickr.com/6232/6239597762_15491d4c97.jpg" />
                </article>
        
                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6057/6224753006_9fb962d890_s.jpg" data-src-full="http://farm7.static.flickr.com/6057/6224753006_9fb962d890.jpg" />
                </article>

                <article>
                    <img width="75" height="75" src="http://farm7.static.flickr.com/6036/6213397745_1d8f223e93_s.jpg" data-src-full="http://farm7.static.flickr.com/6036/6213397745_1d8f223e93.jpg" />
                </article>
            </div>
        </div>  
                     
    
    </div>-->
    <!-- END .wmuGallery -->               
    
    <!-- Scripts -->
    <script type="text/javascript" src="bottom-slider/js/modernizr.custom.min.js"></script>    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <script src="bottom-slider/js/jquery.wmuslider.js"></script>
    <script src="bottom-slider/js/jquery.wmuGallery.min.js"></script>
    <script>
        //$('.example1').wmuSlider(); 
//         
//        $('.example2').wmuSlider({
//            touch: true,
//            animation: 'slide'
//        });   
        
        $('.example3').wmuSlider({
            touch: Modernizr.touch,
            animation: 'slide',
            items: 10
        });
        
       /* $('.example4').wmuGallery();*/
    </script>
      
<!-- END body -->
</body>
<!-- END html -->
</html>