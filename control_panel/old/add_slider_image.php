<?php
session_start();

if (isset($_SESSION['admin_access'])) 
{
}
else
{
	header("Location:logout.php");
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
     
<!--FORM VELIDATION-->

<script language="javascript">

function validateForm()
{

//Position velidation -
	 var n=document.forms["myForm"]["position"].value;
  if (n==null || n=="0")
  {
  alert("Please chose a Position");
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
   include("add_menu.php");
   ?>


</div>


<!--Contents-->

<div class="content">
<center>
<h2>Add Homepage Slider Image</h2>

</center>

 <?php
			include("add_sidebutton.php");
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
    
    
    
    <table width="650" border="0">
 
          <tr>
        <td style="width:200px;"> <h4> Select Position : </h4> </td>
        <td>
        <form  enctype="multipart/form-data"  action="adding_slider_pic.php" method="post" name="myForm" onsubmit="return validateForm()">
        <select name="position">
        <option value="0">-- Select Position --</option>
        <option value="1"> 1 </option>
        <option value="2"> 2 </option>
        <option value="3"> 3 </option>
        <option value="4"> 4 </option>
        <option value="5"> 5 </option>
        <option value="6"> 6 </option>
        <option value="7"> 7 </option>
        <option value="8"> 8 </option>
        <option value="9"> 9 </option>
        <option value="10"> 10 </option>
         </select>
        </td>
        </tr>
        <tr>
        <td><h4>Title : </h4> </td>
        
       <td> <input type="text" name="title" /> </td>
        
        </tr> 
        <tr>
        <td><h4>Description : </h4> </td>
        
       <td> <textarea name="description"></textarea> </td>
        
        </tr> 
         
         <tr>
        <td style="width:200px;"><h4>Upload Picture :</h4></td>
        <td>
        
        
        <input type="file" name="uploaded"> <p style="color:red">Image Resulation - Width : 558px , Height : 300px</p>
        <br/>
        
        <input type="submit" value="Add" >
        </form>
        	
        
        </td>
        </tr>
        
</table>

<h3>Remove Image :</h3>

<table class="data display datatable" id="example" style="width:850px;">
		<thead>
			<tr>
		            <th>Position</th>
					<th>Picture</th>
                    <th>Action</th>
					
                    
                

			</tr>
		</thead>
		<tbody>
        
        <?php
        
		include('../connection.php');
		
        $i=1;
					$sqlCategory=mysql_query("select * from slider_image order by position");
					$countRow=mysql_num_rows($sqlCategory);
					if($countRow>0){
						while($rowCategory=mysql_fetch_array($sqlCategory)){
							$picture = $rowCategory['picture_url'];
							$position= $rowCategory['position'];
							
							
        
		?>
        
        <tr class="odd gradeX">

				<td><?php echo $position; ?></td>
				
                 <td class="center">
					
                    <img src="<?php echo $picture; ?>" style="width:300px;" >
                    
				 </td>
                 
                
                 
                <td>
               
               <a href="remove_slider_pic.php?url=<?php echo $picture; ?> " onClick="return confarmation()">Remove</a>
                 
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