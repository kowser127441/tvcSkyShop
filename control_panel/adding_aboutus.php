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
	header("Location:index.php");
	die();
	}
	
	
// Session Time out


$inactive =600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: logout.php");
		die();
		echo "session time out";
    }
}
$_SESSION['timeout'] = time();


?>



<?php
//session_start();
include '../connection.php';


$aboutus = mysql_escape_string($_POST['aboutus']);


//$image_name = mysql_escape_string($_POST['uploaded']);



$sql="INSERT INTO aboutus 

(
aboutus
)

VALUES
(
'$aboutus'
)";




if (!mysql_query($sql))
  {
	 
	  $_SESSION['error']= 1;

	 
	  
 // die('Error: ' . mysql_error());
  }
  
  
 else
  {
	 
	 $_SESSION['error']= 2;
	 
  }

}


header('Location: ' . $_SERVER['HTTP_REFERER']);
die();


?>