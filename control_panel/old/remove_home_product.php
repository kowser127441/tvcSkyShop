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

$product_id = mysql_escape_string($_REQUEST['product_id']);


include('../connection.php');

$query ="DELETE FROM home_page_product WHERE product_id='$product_id'" ;

 if(!mysql_query($query))
				 {
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
					$_SESSION['error']= 2;

				 }


header('Location: ' . $_SERVER['HTTP_REFERER']);


?>


