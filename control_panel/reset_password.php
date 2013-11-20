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
<div class="container" align="center">
    
    
<?php

if(isset($_SESSION['error']))

{
	if($_SESSION['error']==1)
	{

?>    

<center>
<h4 style="color:#F00">Some Problem Occured !!</h4>
</center>

<?php
	}
	
	unset($_SESSION['error']);
}
?>


<?php

$email= mysql_escape_string($_REQUEST['email']);
$token= mysql_escape_string($_REQUEST['token']);

?>

		
      <form name="myForm" class="form-signin" action="changing_password_forgote.php" method="post" onsubmit="return validateForm()">
      <table>
      <input type="hidden" name="email" value="<?php echo $email; ?>"> 
      <input type="hidden" name="token" value="<?php echo $token; ?>">
      <tr>
      
        <td><h4 class="form-signin-heading">Enter Your New Password :</h4></td>
        <td><input type="password" name="password"  placeholder="New Password"></td>
        
        </tr>
        <tr>
        <td><h4 class="form-signin-heading">Re-Type Password :</h4></td>
        <td><input type="password" name="re_password"  placeholder="Re-Type Password"></td>
        </tr>
        <tr>
        <td><button class="submit-login" type="submit"></button></td>
        </tr>
        
        
        </table>
      </form>
      
      
      
      

    </div>
      

    </div>
    
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>