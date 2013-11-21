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


$sub_category_id = mysql_escape_string($_POST['sub_category_id']);
$product_id = mysql_escape_string($_POST['product_id']);
$product_name = mysql_escape_string($_POST['product_name']);
$details = mysql_escape_string($_POST['details']);
$terms = mysql_escape_string($_POST['terms']);
$price = mysql_escape_string($_POST['price']);
$size = mysql_escape_string($_POST['size']);
$color = mysql_escape_string($_POST['color']);



// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="UPDATE product SET 
		sub_category_id='$sub_category_id',
		product_name='$product_name',
		details='$details',
		terms='$terms',
		price='$price',
		size='$size',
		color='$color'
		
		WHERE product_id='$product_id'" ;

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

