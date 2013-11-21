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

$sub_category_id = mysql_escape_string($_POST['sub_category_id']);
$sub_category_name = mysql_escape_string($_POST['sub_category_name']);


// echo $sub_category_id.'---'.$sub_category_name;


include('../connection.php');


$query ="UPDATE sub_category SET sub_category_name='$sub_category_name' WHERE sub_category_id='$sub_category_id'" ;

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


