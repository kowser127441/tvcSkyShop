<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LOGIN PANEL</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="images/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    <div class="container">
<?php
 $email= $_POST['email'];
 
// echo 'Random Number - '.rand(50000000,10000000);
 
 function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

 $random = generateRandomString();
 //echo $random ; 
 
 include('../connection.php');
 
 $token="UPDATE admin_access SET token='$random' WHERE admin_email='$email'";
 
 if (!mysql_query($token))
 {
	 $_SESSION['error']=1 ; 
	 header('Location: ' . $_SERVER['HTTP_REFERER']);
    
 }
	
	else
	{

?>    

	<div class="form-signin">
    <center>
    
    <?php
   
	
	// Sending Email to Client 
	//  recipients
	$to  = $email;
											
	// subject
	$subject = 'Reset Password';
	$message = "
	<html>
	<head>
	 <title>Reset Your Password :</title>
	</head>
	<body>
	<h2>Dear User , <br/>A token has been generated to change your password.</h2>
	<h3>Please go to this link and reset your password - </h3>
	<a href='http://www.abhworld.info/uk-cosmetics/resetpassword.php?token=".$random."&email=".$email."'>Click here To Reset Your Password - </a>
	</body>
	</html>
	";
									
	// Always set content-type when sending HTML email
									
	$message= wordwrap($message,70);
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
									
	// More headers
	$headers .= 'From:UK-Cosmetics.com';
									
	// Mail it
	if(! mail($to,$subject,$message,$headers))
	{
	?>
		
        <h3 style="color:#F00;"> Some Problem Occured . <br/> Please Enter Your Email Address Again </h3>
        
	<?php
	}
	else
	{
    ?>
   <h3 style="color:#069;"> Check Your Email  and Go to the provided URL </h3>
  
  <?php
	}
	?>
   <?php /*?>change the url<?php */?>
   <a href='index.php'><button class="btn btn-large btn-primary" type="submit">OK</button></a>
   
    </center>
    </div>
   <?php
	}
	?>
      
      

    </div>
    
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	
		<!--  end forgot-inner -->
		<div class="clear"></div>
        
		
        
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>