<?php 

$product_id = $_REQUEST['product_id'];

include('../connection.php');

$query = mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
while($data=mysql_fetch_array($query))
{

$product_name= $data['product_name'];
$category_id= $data['category_id'];
$sub_category_id= $data['sub_category_id'];
$details= $data['details'];
$terms = $data['terms'];
$price= $data['price'];
$size= $data['size'];
$color= $data['color'];

	
}


?>


<div style=" width:800px;">

<center><h3>Edit Form</h3></center>

<form action="editing_product.php" method="post" name="myForm" onsubmit="return validateForm()">

<input type="hidden" name="product_id" value="<?php echo $product_id ?>" />

    <table width="500" border="0">
 
         
         <tr>
        <td>Product Name : </td>
        <td>
       	<input type="text" name="product_name" value="<?php echo $product_name ?>"  />
        </td>
        </tr>
        
      
        
        <tr>
        <td>Sub Category : </td>
        <td> 
       
         <select name="sub_category_id">
        
        
        <?php 
		
		$sub_sql=mysql_query("SELECT * FROM sub_category WHERE category_id='$category_id'");
		while($sub_data=mysql_fetch_array($sub_sql))
		{
		
		$new_sub_id = $sub_data['sub_category_id'];
		$new_sub_name = $sub_data['sub_category_name'];
		
		?>
        
        <option value="<?php echo $new_sub_id; ?>" <?php if($sub_category_id==$new_sub_id){ echo 'selected="selected" ' ; } ?> ><?php echo $new_sub_name; ?> </option>
        
        <?php
		}
		?>
        
        
        </select>
        
        
        
        </td>
        </tr>
        
         <tr>
        <td>Details : </td>
        <td> <textarea name="details" style="width:400px; height:200px;"><?php echo $details; ?> </textarea> </td>
        </tr>
         <td>Terms : </td>
        <td> <textarea name="terms" style="width:400px; height:200px;"><?php echo $terms; ?> </textarea> </td>
        </tr>
         
          <tr>
        <td>Price : </td>
        <td> <input type="text" name="price" value="<?php echo $price; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Size : </td>
        <td> <input type="text" name="size" value="<?php echo $size; ?>"  /></td>
        </tr>
        
          <tr>
        <td>Color : </td>
        <td> <input type="text" name="color" value="<?php echo $color; ?>"  /></td>
        </tr>
        
       <tr><td></td><td><input type="submit" value="Update" /></td>
       </tr>  
 
</table>



</form>

</div>