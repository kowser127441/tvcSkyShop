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

$pic_url=$_REQUEST['url'];


include('../connection.php');


$query ="DELETE FROM slider_image WHERE  picture_url='$pic_url'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {	
				 			unlink($pic_url);
				 
				 			$_SESSION['error']= 2; 
				
				 }
				 
				 echo mysql_error();


header('Location: ' . $_SERVER['HTTP_REFERER']);
die();





?>