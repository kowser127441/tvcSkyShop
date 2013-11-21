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

$order_id=mysql_escape_string($_REQUEST['order_id']);

include '../connection.php';



$sql="UPDATE order_table SET 

		status='success'
		WHERE order_id='$order_id'
		";



if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;
	
	 // die('Error: ' . mysql_error());
  }
  
  
 else
  {
	  $_SESSION['error']= 2;
	   
  }
  
header('Location: ' . $_SERVER['HTTP_REFERER']); 



?>