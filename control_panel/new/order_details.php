<?php
ob_start();
?>
<?php
session_start();

if (isset($_SESSION['admin_access']) && isset($_SESSION['user_id'])  && isset($_SESSION['password']) ) 
{

	include('verification.php');
	$verification = new Verification();
	
	if($verification->isValid())
	{
		//echo "success";	
	}
	else 
	{
		header("Location:logout.php");
		die();	
	}
	
}
else
{
	header("Location:logout.php");
	die();
}

include('timeout.php');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/super_admin.css" />
     <link href="css/bootstrap.css" rel="stylesheet">
    
   
   
    <!-- Form Velidation--> 
    
<script type="text/javascript">
function validateForm1()
{
	
	
	//namel velidation -
	 var n=document.forms["myForm"]["category_name"].value;
	// alert("Cetagory Name field can't be empty");
	 
  if (n==null || n=="")
  {
  alert("Cetagory Name field can't be empty");
  return false;
  }
  
  
  //Description velidation -
	 var n=document.forms["myForm"]["description"].value;
  if (n==null || n=="")
  {
  alert("Description field can't be empty");
  return false;
  }
	
	
  
}
</script>

      
<!-- Table Start -->

<link rel="stylesheet" href="css-table/text.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/layout.css" type="text/css" media="screen" title="no title" />	
<link rel="stylesheet" href="css-table/plugin/dataTables.css" type="text/css" media="screen" title="no title" />
<link rel="stylesheet" href="css-table/custom.css" type="text/css" media="screen" title="no title">




<script src="js-table/jquery/jquery-1.5.2.min.js"></script>
<script src="js-table/jquery/facebox.js"></script>
<script src="js-table/jquery/jquery.dataTables.min.js"></script>  <!-- it's for search display and work-->
<script src="js-table/dashboard.js"></script>   <!-- it's for search display and work-->

<script>
	
$(document).ready ( function () 
{
	Dashboard.init ();
});

</script>

<!-- Table END -->


<script type="text/javascript">


function confarmation()
{
var r=confirm("Are you sure you want to delete ?");
if (r==true)
{
//User Pressed okay. Delete

return true;

}
else
{
	return false;
//user pressed cancel. Do nothing
    }
 }
 
 </script>

   
   

  </head>

  <body>

   <div class="header">

<img src="images/logo.png" class="logo" />


</div>

<div class="divider">

</div>
<!--Main Menu-->

<div class="menu">
<?php
			include("orders_menu.php");
	?>
</div>


<!--Contents-->

<div class="content">
<center>
<h2>Order Details</h2>

</center>



 <?php
			include("orders_sidebutton.php");
			include '../connection.php';
	?>
    
    
     <div style="width:850px; margin-left:auto; margin-right:auto;">
    
    <h3>Client Information : </h3>

    <?php
	$order_id = mysql_escape_string($_REQUEST['order_id']);
	$information=mysql_query("SELECT * FROM order_table WHERE order_id='$order_id'");
					
			while($data=mysql_fetch_array($information))
			{
				$product_id=$data['product_id'];
				$quantity=$data['quantity'];
				$user_name=$data['user_name'];
				$gender=$data['gender'];
				$user_name=$data['user_name'];
				
				$phone=$data['phone'];
				$address=$data['address'];
				$place=$data['place'];
				$shipping_address=$data['shipping_address'];
				$date=$data['date'];
				$email=$data['email'];
				$status=$data['status'];	
			}
			
	$product= mysql_query("SELECT * FROM product WHERE product_id='$product_id'");
				
		
        					
		while($information=mysql_fetch_array($product))
			{
				$product_name=$information['product_name'];	
				$details=$information['details'];
				$price=$information['price'];
				$size=$information['size'];
				$color=$information['color'];
				$discount=$information['discount'];	
				
				$price=$price-$discount;

			}				
	
	
	
	?>
    
     <table width="500">
        <tr>
            <td>Name : </td>
            <td><?php echo $user_name; ?></td>
        </tr>
        <tr>
        <td>Email : </td>
        <td><?php echo $email; ?></td>
        </tr>
        <tr>
        <td>Phone : </td>
        <td><?php echo $phone; ?></td>
        </tr>
        <tr>
        <td>Gender : </td>
        <td><?php echo $gender; ?></td>
        </tr>
        
        <tr>
        <td>Address : </td>
        <td><p><?php echo $address; ?></p></td>
        </tr>
        
         <tr>
        <td>Place : </td>
        <td><p><?php echo $place; ?></p></td>
        </tr>
        
         <tr>
        <td>Shipping Address : </td>
        <td><p><?php echo $shipping_address; ?></p></td>
        </tr>
        
       </table>
        
    
    <h3> Ordered Product : </h3>
    
    
   <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Updated";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Updated";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
    
     
       <h3 style="color:#39C; display:inline; margin-left:650px;">Status -  <?php echo $status; ?></h3>
      
   
<table class="data display datatable" id="example" style="width:850px;">
		<thead>
			<tr>
		           	<th>Product Name</th>
                    <th>Purchase Quantity</th>
					<th>Details</th>
                    <th>Price</th>
					<th>Color</th>
                    <th>Size</th>
                    <th>Discount</th>
                    <th>Total</th>
                

			</tr>
		</thead>
		<tbody>
                                       
                    	
			<tr class="odd gradeX">

				<td class="center">
				<?php echo $product_name; ?> 
                </td>
                
                <td class="center">
				<?php echo $quantity; ?> 
                </td>
                
				<td class="center">
					 <?php	echo $details;?>
                </td>
                
                <td class="center">
					 <?php	echo $price;  ?>
                </td>
                
                <td class="center">
					 <?php	echo $color; ?>
                     
                </td>
                
                 <td class="center">
					 <?php  echo $size;  
                     
                     ?>
                </td>
                
                <td class="center">
					 <?php  echo $discount;
                     ?>
                </td>
                
                 <td class="center">
					 <?php  echo $price*$quantity;
                     ?>
                </td>
                
                
				
		     </tr>
			
         
                        
		</tbody>
				</table>
     
     
    
	</div>
    
  
	



</div>

  </body>
</html>