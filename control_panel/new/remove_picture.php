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
$product_id=$_REQUEST['product_id'];
$pic_url=$_REQUEST['pic_url'];


include('../connection.php');


$query ="DELETE FROM picture WHERE product_id='$product_id' AND picture_url='$pic_url'" ;

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