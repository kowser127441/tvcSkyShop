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
	 var n=document.forms["myForm"]["category"].value;
	// alert("Cetagory Name field can't be empty");
	 
  if (n==0)
  {
  alert("Please Choose a Category");
  return false;
  }
  
  
  //Description velidation -
	 var n=document.forms["myForm"]["sub_name"].value;
  if (n==null || n=="")
  {
  alert("Sub-Category Name field can't be empty");
  return false;
  }
	
  
}
</script>

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
<h2>Add About Us</h2>

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
    
    <?php
	$sql = mysql_query("SELECT * FROM aboutus");
					while($data = mysql_fetch_array($sql))
					{
						$aboutus = $data['aboutus'];
					}
	
	?>
    
    <br/><br/><br/>
    <form method="post" action="adding_aboutus.php" style="margin-left:20px"  name="myForm" onsubmit="return validateForm1()">
   
    
    
    <textarea  cols="100" name="aboutus" id="area3" style="width:700px; height:300px;"><?php echo $aboutus; ?></textarea>
    
    <input type="submit" value="Add"  style="margin-left:100px; height:30px; width:80px; font-size:15px;">
 
        

  
      </form>
    

	</div>
    

</div>

  </body>
</html>