<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<script src='js/jquery.min.js'></script>
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active parent'><a href='category.php?category_id=1'><span>Health and Harbal</span></a>
    <ul>
                            
                            <?php
							$man_query =mysql_query("SELECT * FROM sub_category WHERE category_id=1");
							while($man=mysql_fetch_array($man_query))
							{
								$sub_category_id=$man['sub_category_id'];
							?>
						
							<li><a href="category.php?category_id=1&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $man['sub_category_name']; ?></a></li>
							
							<?php
							}
							?>
                            
                            
                        </ul>
   </li>
   
   <li class='has-sub parent'><a href='category.php?category_id=2'><span>Beauty Care</span></a>
       <ul>
                            
                            <?php
							$woman_query =mysql_query("SELECT * FROM sub_category WHERE category_id=2");
							while($woman=mysql_fetch_array($woman_query))
							{
								$sub_category_id=$woman['sub_category_id'];
							?>
						
							<li><a href="category.php?category_id=2&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $woman['sub_category_name']; ?></a></li>
							
							<?php
							}
							?>
                            
                        </ul>
   </li>
   
   <li class='has-sub parent'><a href='category.php?category_id=3'><span>Fitness and Sports</span></a>
      <ul>
                           
                            <?php
							$kids_query =mysql_query("SELECT * FROM sub_category WHERE category_id=3");
							while($kids=mysql_fetch_array($kids_query))
								{
									$sub_category_id=$kids['sub_category_id'];
								?>
							
								<li><a href="category.php?category_id=3&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $kids['sub_category_name']; ?></a></li>
								
								<?php
								}
							?>  
                
                           
                        </ul>
   </li>
   
    <li class='has-sub parent'><a href='category.php?category_id=4'><span>Home and Kitchen</span></a>
       <ul>
                            
                             <?php
							$fairness_query =mysql_query("SELECT * FROM sub_category WHERE category_id=4");
							while($fairness=mysql_fetch_array($fairness_query))
							{
					$sub_category_id=$fairness['sub_category_id'];
							?>
						
							<li><a href="category.php?category_id=4&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $fairness['sub_category_name']; ?></a></li>
							
							<?php
							}
							?> 
                            
                        </ul>
   </li>
   
    <li class='has-sub parent'><a href='category.php?category_id=5'><span>Electronics</span></a>
     <ul>
                           
                            <?php
							$perfume_query =mysql_query("SELECT * FROM sub_category WHERE category_id=5");
							while($perfume=mysql_fetch_array($perfume_query))
							{
								$sub_category_id=$perfume['sub_category_id'];
							?>
						
							<li><a href="category.php?category_id=5&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $perfume['sub_category_name']; ?></a></li>
							
							<?php
							}
							?>
                           
                           
                        </ul>
   </li>
    
   <li class='last parent'><a href='category.php?category_id=6'><span>Others</span></a>
   	<ul>
                            
                              <?php
								$elec_query =mysql_query("SELECT * FROM sub_category WHERE category_id=6");
								while($elec=mysql_fetch_array($elec_query))
								{
									$sub_category_id=$elec['sub_category_id'];
								?>
							
								<li><a href="category.php?category_id=6&sub_category_id=<?php echo $sub_category_id; ?>"><?php echo $elec['sub_category_name']; ?></a></li>
								
								<?php
								}
								?>
                            
                            
                        </ul>
         </li>
      </ul>
   </li>
</ul>
</div>
</body>
</html>