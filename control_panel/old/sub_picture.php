<?php

$product_id=$_REQUEST['product_id'];
?>


<table class="data display datatable" id="example" style="width:650px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Picture</th>
					<th>Status</th>
                    <th>Action</th>
                    
                

			</tr>
		</thead>
		<tbody>
                        <?php
						include('../connection.php');
						$i = 1;
							
						$query=mysql_query("SELECT * FROM picture WHERE product_id='$product_id'");
						while($data=mysql_fetch_array($query))
						{
						
						$pic_url=$data['picture_url'];
						$default = $data['_default']; 				
					
						
					?>
                    	
			<tr class="odd gradeX">

				<td><?php echo $i;?></td>
                
				<td class="center">
				
                <img src="<?php echo $pic_url; ?>" style="width:150px;" />
                               
                </td>
				<td class="center">
					 <?php	echo $data['_default'];  ?>
                </td>
				
                
                 <td class="center">
                 
                 <?php
                 if($default != 'default')
                 {
                 ?>
                 
                 <a href="make_default.php?product_id=<?php echo $product_id; ?>&pic_url=<?php echo $data['picture_url']; ?>">Make Default</a> |
                 <a href="remove_picture.php?product_id=<?php echo $product_id; ?>&pic_url=<?php echo $data['picture_url']; ?>"  onClick="return confarmation()">Remove</a>
                <?php
                }
                else
                {
               		echo "Default Image Can't remove ";
                }
                ?>
                
                </td>
                
				
		     </tr>
			
           <?php

					 $i=$i+1;
						}
					
					 ?>
                        
		</tbody>
				</table>
    