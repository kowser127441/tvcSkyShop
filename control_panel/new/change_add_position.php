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

$old_position = mysql_escape_string($_POST['old_position']);
$new_position = mysql_escape_string($_POST['new_position']);

echo $old_position.'---'.$new_position;



// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="UPDATE advertaisement SET position = '$new_position' WHERE position='$old_position'" ;

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