<?php
/**
*Reset user's password
*@Aut: Manzoor Ahmed
*Version 1.2
*Last updated 02/24/13 
*****/
$chk_email;
$er ='';

if(isset($_POST['send']))
{
	$chk_email =$_POST['email'];
	$ck_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
	include_once('dbc.php');
	include_once('genpass.php');
	
	//********************VALIDATION*************************************/
	if(empty($chk_email)){
		$er.="\nPlease provide email";	
	}
	
	if(!empty($chk_email)){
		
		if(!preg_match($ck_email,$chk_email)){
			$er.="\n Invalid email";
		}
	}	
	//*****************************************************************/
		
		$q= "SELECT `uid`,`email` FROM `user` WHERE (`email`='$chk_email')";					
		
		$result = mysqli_query($dbc,$q) or die(mysqli_error($dbc));
		
		$new_password = generatePassword(8);//generates 8 char long random password
		$enc_password = md5($new_password); //encrypt
		
		//if found in user 
		if(mysqli_num_rows($result) == 1)
		{
				$ROW = mysqli_fetch_array($result);
						
				$id = $ROW['uid'];
				$sent_email = $ROW['email'];
			
				mysqli_query($dbc,"BEGIN");
				//reset password
				$statement = "UPDATE `user` SET `password`= '$enc_password' WHERE `uid` ='$id'";
				$go = mysqli_query($dbc,$statement) or die(mysqli_error($dbc));
				mysqli_query($dbc,"COMMIT");
				
				$sendmessage = "We have generated a new Limozoor Account Password for you.\n 
							        Your password is reset to $new_password 
							       \n Please note that this password is not secure. Once you login, please reset your password.\n ";
						
					mail($sent_email,'Limozoor Password Reset',$sendmessage,'From: limozoor@gmail.com');
					$chk_email ='';
					
					if(!headers_sent())
					{							
						 echo "<p style='color:green;'>Passowrd updated. Please check your email $sent_email </p>";
						 echo '<meta http-equiv="refresh" content="10;URL=\'../login/signin.php\'">';
						
					}
					else
					{
						echo "<p>Password can not be updated!</p>";	
						mysqli_query($dbc,"ROLLBACK"); 
					}					
		}//if 1
			
			//look in corporate 
		if(mysqli_num_rows($result) == 0)
		{
				$querr="SELECT `uid`,`email` FROM `corporate` WHERE (`email`='$chk_email')";
				$resultt = mysqli_query($dbc,$querr) or die(mysqli_error($dbc));
				
				//if found
				if(mysqli_num_rows($resultt) == 1)
				{
						$ROW = mysqli_fetch_array($resultt);
						$sent_email = $ROW['email'];
						$id = $ROW['uid'];
						
						//reset password begin transaction
						mysqli_query($dbc,"BEGIN");
					    $statement = "UPDATE `corporate` SET `password` = $enc_password  WHERE `uid`='$id'";
						$go = mysqli_query($dbc,$statement) or die(mysqli_error($dbc));
						mysqli_query($dbc,"COMMIT");
						
						$sendmessage = "We have generated a new Limozoor Account Password  for you.\n 
							        	Your password is reset to $new_password 
							      		\n Please note that this password is not secure. Once you login, please reset your password.\n ";
						
							mail($sent_email,'Limozoor Password Reset',$sendmessage,'From: limozoor@gmail.com');
							$chk_email ='';
							
							if(!headers_sent())
							{							
						 		echo "<p style='color:green;'>Passowrd updated. Please check your email $sent_email </p>";
								echo '<meta http-equiv="refresh" content="10;URL=\'../login/signin.php\'">';
						 		exit();
							}					
			     		
				 			else
				 			{
								echo "<p>Password can not be updated!</p>";	
								mysqli_query($dbc,"ROLLBACK"); 
				 			}
			    }//if
				 
				 if(mysqli_num_rows($resultt)== 0)
				{
					$er.="\n Email does not exists. ";	
				}
			   
		}//if 0
		mysqli_close($dbc);
}//1


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Forgot password, reset password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="../images/Envision.css" type="text/css"/>
<meta name="language" content="English"/>
<meta name="revisit-after" content="10 days"/>
<meta name="distribution" content="Global"/>
<meta name="rating" content="General"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="Content-Language" content="en-us"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<meta http-equiv="Reply-to" content="limozoor@gmail.com"/>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<style type="text/css">
.button:hover {
	background: #3f9db8;
	border: 1px solid rgba(256,256,256,0.75);
</style>
</head>
<!-- Start body -->
<body>
<div id="wrap">
  <div id="header"></div>
 
  <div  id="menu">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../reservation.php">Reservation</a></li>
      <li><a href="limo_services.php">Services</a></li>
      <li><a href="../prices.php">Prices</a></li>
      <li><a href="../contact.php">Contact</a></li>
      <li><a href="../about.php">About</a></li>
      
	  <li class="last"><a href="../sitemap.php">Site map</a></li>
	  <li class="last"><a href="#"></a></li>
      <li class="last"><a href="#"></a></li>
      <li class="last"><a href="#"></a></li>
	  <li class="last"><a href="#"></a></li>
      <li class="last"><a href="#"></a></li>
    </ul>
  </div>
  <!-- end menu -->
  <div>
  
  <form name="forgot" id="" method="post" action="">
  <table width="89%" height="72">
  <tr><td colspan="2">
  <?php 
   if(!empty($er))
   {
   		echo $er;
   }
  ?></td></tr>
  		<tr><td><label>Please enter your email address</label></td><td><input type="text" name="email" id="email" size="25" /></td><td><input type="submit" name="send" id="send" value="Request Password"  style="background-color:#E93701; font-weight: bold; color:#FFFFFF;"/></td></tr>
  </table>
  </form>
  </div>
  <div id="footer">
    <p> 2010 &copy; <script type="text/javascript">var data = Date.getFullYear(); document.write(date);</script>| 
	<a href="../terms.php">Terms and conditions </a>| <a href="../reservation.php">reservation</a> &nbsp;| <a href="../index.php">Home</a>&nbsp;|&nbsp; <a href="../sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
