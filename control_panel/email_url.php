<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="css/super_admin.css" />
    
   
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

  </head>

  <body>

   <div class="header">
<img src="images/logo.png"  class="logo"/>



</div>

<div class="divider">

</div>
<!--Main Menu-->




<!--Contents-->

<div class="content">
<center>
<h1> Forgot Password </h1>




</center>

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

  </body>
</html>