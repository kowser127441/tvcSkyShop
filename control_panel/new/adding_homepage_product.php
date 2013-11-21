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

$product_id = mysql_escape_string($_POST['product_id']);


include('../connection.php');

$query ="INSERT INTO home_page_product (product_id) VALUES ('$product_id')" ;

 if(!mysql_query($query))
				 {
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
					$_SESSION['error']= 2;

				 }


header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>


