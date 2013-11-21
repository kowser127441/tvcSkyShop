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

$order_id=$_REQUEST['order_id'];


include('../connection.php');


$query ="DELETE FROM order_table WHERE  order_id='$order_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {	
				 			$_SESSION['error']= 2; 
				
				 }
				 
				 echo mysql_error();



header('Location: ' . $_SERVER['HTTP_REFERER']);
die();





?>