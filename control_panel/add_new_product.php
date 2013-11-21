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

//include('timeout.php');

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
function validateForm()
{
	
	// Category velidation -
	 var n=document.forms["myForm"]["category"].value;
  if (n==0)
  {
  alert("Please Choose a Category");
  return false;
  }
  
  	// SUb-Category velidation -
	 var n=document.forms["myForm"]["sub_category"].value;
  if (n==0)
  {
  alert("Please Choose a Sub-Category");
  return false;
  }
  
	
	// Name velidation -
	 var n=document.forms["myForm"]["name"].value;
  if (n==null || n=="")
  {
  alert("Product Name field can't be empty");
  return false;
  }
  
    //Price velidation -
	 var n=document.forms["myForm"]["price"].value;
  if (n==null || n=="")
  {
  alert("Price field can't be empty");
  return false;
  }
  
  //Details  velidation -
	 var n=document.forms["myForm"]["details"].value;
  if (n==null || n=="")
  {
  alert("Details field can't be empty");
  return false;
  }
  
  //Terms of Condition velidation -
	 var n=document.forms["myForm"]["terms"].value;
  if (n==null || n=="")
  {
  alert("Terms of Conditions field can't be empty");
  return false;
  }  
  
  
  
 
 
  
 //Image velidation -
	 var n=document.forms["myForm"]["uploaded"].value;
  if (n==null || n=="")
  {
  alert("Please chose an Image");
  return false;
  }  
  
  	
 
  
  
  
}
</script>
 
 
    <script language="javascript">

function changecategory()
		{
			
			
			  var xmlhttp;
			  if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			  
			  else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
			else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			xmlhttp.onreadystatechange = function()
				{
					if(xmlhttp.readyState==4 )
						{
							document.getElementById("bodyspan").innerHTML=xmlhttp.responseText;
						}
				}
			var bodySelect = document.getElementById("body").value;
			xmlhttp.open("GET","sub_category.php?category_id=" + bodySelect,true);
			xmlhttp.send();	

		}
		
function changecategory2()
		{
		
		document.getElementById("add").style.visibility = "visible"; 
			
		}		


</script>
 
 
 <!--TINY EDITOR-->

<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	
	new nicEditor({iconsPath : 'images/nicEditorIcons.gif'}).panelInstance('area3');
	
});
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
   include("add_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>Add New Product</h2>

</center>

 <?php
			include("add_sidebutton.php");
	?>
    
    
     <div style="width:500px; margin-left:auto; margin-right:auto;">
    
   <center> <?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "Not Successfully Inserted";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "Successfully Inserted";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
     </center>
    
    
    
    <br/><br/><br/>
    <form method="post"  enctype="multipart/form-data" action="adding_new_product.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm()">
    
    
    <table width="700" border="0">
 
         
         <tr>
        <td>Choose Category :</td>
        <td>
        
        <select  name="category" id="body" onchange="changecategory()" >
					<option value="0">---Select Category---</option>
							 <?php
							 
							 include '../connection.php';
							 
					  $sql=mysql_query("select * from category ");
					  $row=mysql_num_rows($sql);
					  if($row>0){
						  while($row=mysql_fetch_array($sql)){
					 ?>
		         	  <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
		         	<?php
						  }
					  }
			?>
				 </select>
        
        </td>
        </tr>
         <tr>
        <td>Sub Category : </td>
        <td><span id="bodyspan"> </span></td>
        </tr>
        
        <tr>
        <td>Product Name : </td>
        <td><input type="text" name="name" /></td>
        </tr>
        
         <tr>
        <td>Price : </td>
        <td><input type="text" name="price" /></td>
        </tr>
        
        <tr>
        <td>Product Details :</td>
        <td><textarea name="details" id="" style="width:500px; height:200px;"></textarea></td>
        </tr>
        
        <tr>
        <td>Terms of Conditions :</td>
        <td><textarea name="terms"></textarea></td>
        </tr>
       
       
       <tr>
        <td>Size :</td>
        <td><input type="text" name="size" /></td>
        </tr>
       
       <tr>
        <td>Color :</td>
        <td><input type="text" name="color" /></td>
        </tr>
       
        <tr>
        <td>Image :</td>
        <td><input type="file" name="uploaded" /></td>
        </tr>
       
       
         <tr>
          <td></td>
            <td>
            <span id="add" style=" visibility:hidden">
            <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
            </span>
            </td>
          </tr>
  
</table>

  
      </form>
    

	</div>
    

</div>

  </body>
</html>