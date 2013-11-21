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
     
     
     
    
   <script language="javascript">

function changecategory()
		{
			
			  var xmlhttp=false;
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
			
			location.href = "edit_sub_category.php?category_id="+ bodySelect ;
			//open("GET","view_product.php?bodySelect=" + bodySelect);
			//open("GET","view_product.php?bodySelect=" + bodySelect,true);
			xmlhttp.send();	
		}
</script>
 
    <!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm(id)
{
	
	// Category velidation -
	 var n=document.forms["form_"+id]["sub_category_name"].value;
 if (n==null || n=="")
  {
  alert("Sub Category Name field can't be empty");
  return false;
  }
}

</script>
   
  <script type="text/javascript">
// Delete Confirmation

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
   include("edit_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>Edit Sub-Category</h2>

</center>

 <?php
			include("edit_sidebutton.php");
	?>
    
    
     <div style="width:800px; margin-left:auto; margin-right:auto;">
    
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
    
    
    
    <table width="450" border="0">
 
         
         <tr>
        <td>Category Name :</td>
        <td>
        
        	<select name="category" onchange="changecategory()" id="body">
            	<option value="0">--- Choose Category ---</option>
                
                <?php
				error_reporting(0);
				include('../connection.php');
				$sql= mysql_query("SELECT * FROM category");
				
				while($data=mysql_fetch_array($sql))
				{
					$value=$data['category_id'];
					$category_name=$data['category_name'];
				
				?>
                
                <option value="<?php echo $value;?>"><?php  echo $category_name; ?></option>
                
                
                <?php
				}
				?>
            
            </select>
        
        </td>
        </tr>
        
</table>


<table class="data display datatable" id="example" style="width:850px;">
		<thead>
			<tr>
		            <th>SL.</th>
					<th>Sub Category Name</th>
                    <th>Change Sub Category Name</th>
                    <th>Action</th>
					
                    
                

			</tr>
		</thead>
		<tbody>
        
        <?php
        
		$category_id = $_REQUEST['category_id'];
		
		
		
        $i=1;
					$sqlCategory=mysql_query("select * from sub_category where category_id='$category_id' order by sub_category_id desc");
					$countRow=mysql_num_rows($sqlCategory);
					if($countRow>0){
						while($rowCategory=mysql_fetch_array($sqlCategory)){
							$sub_category_id = $rowCategory['sub_category_id'];
							$sub_category_name = $rowCategory['sub_category_name'];
							
        
		?>
        
        <tr class="odd gradeX">

				<td><?php echo $i;?></td>
				
                 <td class="center">
					 
                    <?php echo $sub_category_name; ?>
				 </td>
                 
                 <td class="center">
					 
                 <form method="post" action="editing_sub_category.php" name="form_<?php  echo $sub_category_id; ?>" onsubmit="return validateForm(<?php echo $sub_category_id; ?>)">
                 <input type="hidden" name="sub_category_id" value="<?php echo $sub_category_id; ?>">
                 <input type="text" name="sub_category_name">
                 <input type="submit" value="Change">
                 
                 </form>
                 
				 </td>
                 
                <td>
                <?php
				$prd_query=mysql_query("SELECT * FROM product WHERE sub_category_id='$sub_category_id'");
				$count = mysql_num_rows($prd_query);
				
				if($count > 0)
				{
				?>
                <a>Product Exists</a>
                <?php
				}
				else
				{
				?>
                
                 <a href="delete_sub_category.php?sub_id=<?php echo $sub_category_id; ?>" onClick="return confarmation()">Remove </a>
                 <?php
				}
				?>
				 
                 
                 
                </td> 
                 
        </tr>
        
        
        
        
         <?php

					 $i=$i+1;
						}
					}
					 ?>
                        
		</tbody>
				</table>


    

	</div>
    

</div>

  </body>
</html>