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
      <input type="hidden" name="email" value="<?php echo $email; ?>"> 
      <input type="hidden" name="token" value="<?php echo $token; ?>">
        <h4 class="form-signin-heading">Enter Your New Password :</h4>
        <input type="password" name="password"  placeholder="New Password">
        <h4 class="form-signin-heading">Re-Type Password :</h4>
        <input type="password" name="re_password"  placeholder="Again Password">
        <button class="btn btn-large btn-primary" type="submit">OK</button>
      </form>
      
      
      
      

    </div> 














</div>

  </body>
</html>