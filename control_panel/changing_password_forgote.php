<?php
ob_start();
?>
<?php
session_start();
?>

<?php

$email= mysql_escape_string($_POST['email']);
$token= mysql_escape_string($_POST['token']);
$password= mysql_escape_string($_POST['password']);

// Generating hash password
for ($i=0; $i<=31; $i++)
 {
  $d=rand(1,30)%2;
  $salt .= $d ? chr(rand(65,90)) : chr(rand(48,57));
}   
$hashed = md5($password.$salt);
$password = $hashed . ':' . $salt;
// end of hash password

include('../connection.php');

$sql= mysql_query("SELECT * FROM admin_access WHERE admin_email='$email' and token='$token'");
$count= mysql_num_rows($sql);
if($count >> 0)
{
	while($data= mysql_fetch_array($sql))
	{
		$db_email = $data['admin_email'];
		$db_token = $data['token'];	
		     
		//$agency_id = $data['agency_id'];
	}
	
  //  echo $db_email.'<br/>'.$db_token.'<br/>NORMAL - '.$email.'<br/>'.$token.'<br/>' ;
    
	if($db_email == $email && $db_token == $token)
	{
		$change_sql="UPDATE admin_email SET admin_password='$password' , token='disable' WHERE admin_email='$email' AND token='$token'" ;
		if(!mysql_query($change_sql))
		{
			 $_SESSION['error']= 1;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			
		}
		
		else // SUCCESS
		{	
           //checking this ??? 
           $_SESSION['admin_access']=$user_id;
		   $_SESSION['user_id']=$user_id;
		   $_SESSION['password']=$password;;
           
		   
			
	 		 $_SESSION['error']= 2;
			 header('Location: index.php');
				
		}
	}
	
	else 
	{
		// email & token dosent match	
		$_SESSION['error']= 1;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
		
}

else
{
	// whrn count = 0 
	$_SESSION['error']= 1;
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>