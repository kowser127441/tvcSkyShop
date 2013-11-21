<?php 
ob_start(); 
?>

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


?>