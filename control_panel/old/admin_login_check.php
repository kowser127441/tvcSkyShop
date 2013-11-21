<?php 
ob_start(); 
?>
<?php

include '../connection.php';

$user_id= mysql_escape_string($_POST['name']);
$password= mysql_escape_string($_POST['password']);

session_start();


$query = mysql_query("Select * from admin_access WHERE admin_id='$user_id'") ;
										
										while($data = mysql_fetch_array($query))
										{
										
										  $db_password = $data['admin_password'];
										  //echo $db_password.'<br/>';
											
										}
										
										//echo 'db_password'.$db_password.'<br/>';
										
										
										// Retrive the Last Part With colone ':'
										$last = strstr($db_password,':');
										
										
										//echo 'salt with coon-'.$last.'<br/>' ; 
										// Remove colone ':' from Last Part 
										$last_without = substr($last, 1);
										
										//echo 'without- '.$last_without.'<br/>' ;
										// First Part 
										$first = substr($db_password , 0, 32);
										
										//echo 'first-'.$first.'<br/>' ;
										
										$pass_user = md5($password.$last_without);
										
										//echo 'pass+md5-'.$pass_user.'<br/>';
										
										if($pass_user == $first)
										{
											
											$_SESSION['admin_access']=$user_id;
											$_SESSION['admin_access_error']= 2;
						 					Header('Location:admin.php');
										}
										
										else
										{
											
											
											$_SESSION['admin_access_error']= 1;
						 					Header('Location:index.php');
										}
										




















/*				
		$result = mysql_query("SELECT * FROM admin_access WHERE admin_id='$user_id' AND admin_password='$password'");
	
		
		$number = mysql_num_rows($result);
		
		if( $number > 0 )
				{
				
				
				if($row = mysql_fetch_array($result))
				  {
						$admin_id=$row['admin_id'];
						$new_password=$row['admin_password'];
					
				
				 
					  if($admin_id == $user_id )
					  {
						 
							if( $new_password == $password)
							  {
									
									
									
									
								// Success
								
								
									$_SESSION['admin_access']=$admin_id;
									$_SESSION['admin_serial']=$admin_serial;
									Header('Location: admin.php ');
									
									
								 
							  }
								  
							 else {  // Wrong password
									//  echo " wrong password";
									 $_SESSION['admin_access_error']= 1 ;
									 
									Header('Location:index.php');
									  
								 }
					  		}
				        }
					  
					  else{ // Wrong Id
						// echo "wrong ID ";
						
						$_SESSION['admin_access_error']= 1;
						 
						Header('Location:index.php');
						  }
						  
				}
				
				
				
				  else{  // Return Zero column
					  
					  
						// echo "wrong Information ";
						
						echo "return zero";
						
						$_SESSION['admin_access_error']= 1 ;
						 
						Header('Location:index.php');
						  }
						  
*/						  
				
					
					
					
	
	   
	   
mysql_close($con);
					 
?>
