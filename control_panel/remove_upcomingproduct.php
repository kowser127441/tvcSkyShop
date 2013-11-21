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


<?php


$position = mysql_escape_string($_REQUEST['position']);




include('../connection.php');


// get the file_name 

$query=mysql_query("SELECT * FROM upcoming_products  WHERE  position='$position'");
while($data=mysql_fetch_array($query))
{
	
	$picture=$data['up_image_url'];
	unlink($picture);
	 
	
}





$sql="DELETE FROM upcoming_products WHERE position='$position'";

if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	 
  //die('Error: ' . mysql_error());
  }
  
  
 else
  {
	 
	  $_SESSION['error']= 2;
	  
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']);
die();




?>