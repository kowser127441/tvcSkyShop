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

$category = mysql_escape_string($_POST['category']);
$sub_name = mysql_escape_string($_POST['sub_name']);



include '../connection.php';


$sql="INSERT INTO sub_category (category_id,sub_category_name)
VALUES
('$category','$sub_name')";



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