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


		
      <form class="form-signin" action="email_url.php" method="post">
        <h2 class="form-signin-heading">Enter You Email Address </h2>
        <input type="text" name="email" placeholder="Email Address">
        <button class="btn btn-large btn-primary" type="submit">OK</button>
      </form>
      
      
      
      

    </div>














</div>

  </body>
</html>