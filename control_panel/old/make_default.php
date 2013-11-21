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
$product_id=$_REQUEST['product_id'];
$pic_url=$_REQUEST['pic_url'];


include('../connection.php');


$query ="UPDATE picture SET 
		_default='NULL'
		
		WHERE product_id='$product_id'" ;

 if(!mysql_query($query))
				 {
					
					$_SESSION['error']=1 ; 
				 }
				 else
				 {
				 
				 	$sql="UPDATE picture SET 
							_default='default'
							WHERE product_id='$product_id' AND picture_url='$pic_url'" ;
							
							 if(!mysql_query($sql))
								 {
									
									$_SESSION['error']=1 ; 
								 }
								 else
								 {
									$_SESSION['error']= 2; 
								 }
							
					

				 }


 header('Location: ' . $_SERVER['HTTP_REFERER']);





?>