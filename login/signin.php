<?php
		session_start();
		$corp = '';
		$eemail='';
		$dpassword ='';
		$e ='';
		$ck_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
if((isset($_POST['go'])))
{
	require_once('dbc.php');
	$corp= $_POST['corp'];
	$eemail = $_POST['eemail'];
	$dpassword=trim($_POST['dpassword']);
	$md5pass = md5($dpassword);
	
    //account is not selected					
	if($corp=='none')
	{
		$e.="\n Please select account type.";
	}
	//empty email 
	if(empty($eemail))
	{
		$e.="\n Email can not be empty.";
	}
	//empty password
	if(empty($dpassword))
	{
				$e.="\n Please provide Password.";
	}
	//invalid email 
	if(!empty($eemail))
	{
		if(!preg_match($ck_email,$eemail))
		    {
					$e.="\n Invalid Email";
			}
	}		
	
	////////////////////////////CORP ACCOUNT////////////////////////////////////////////////////
	if($corp =='corp')
	{
			//if no errors
			if(empty($e))
			{
					//check if the account is activated
					$qq="SELECT email FROM `corporate` WHERE (`email`='$eemail' AND `password`= '$md5pass' AND `activated` = 0)";
					$rez = mysqli_query($dbc,$qq);
					//found in  corporate
					if(@mysqli_num_rows($rez) == 1)
					{
						$e.="\n  Your account is not activated.";
					}
					
					//activated account
					if(@mysqli_num_rows($rez) ==0)
					{
						$q="SELECT * FROM `corporate` WHERE (`email`='$eemail' AND `password`= '$md5pass' AND `activated` = 1)";
						$result= mysqli_query($dbc,$q);
						//if matched a row
						if(@mysqli_num_rows($result) == 1)
						{
							$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
						
							//set cookie for 30 minutes
							setcookie('lname', $_SESSION['lname'], time()+1800);
							setcookie('fname',$_SESSION['fname'],time()+1800);
						
							//if no headers sent, send one
							if(!headers_sent())
							{
								header("Location: ../login/homepage.php");
							}
				    	}//if
						
						if(@mysqli_num_rows($result) ==0 )
						{
							$e.="The email or password you entered is incorect\n";
						}
						
					}//else	
					
			}//if empty
		}//corp
					
		////////////////////////////SINGLE USER ACCOUNT/////////////////////////////////////////////////////////////	
		if($corp=='ind')
		{
			//check if account is activated
			if(empty($e))
			{
					$qqq="SELECT `email` FROM `user` WHERE (`email`='$eemail' AND `password`= '$md5pass' AND `activated` = 0)";
					echo $md5pass;
					
					$rezz = mysqli_query($dbc,$qqq);
						
					if(@mysqli_num_rows($rezz) == 1)
					{
						$e.="\n  Account is not activated.";
					}
		
					//check if account is activated
					if(@mysqli_num_rows($rezz) ==0 )
					{
						$q="SELECT * FROM `user` WHERE (`email`='$eemail' AND `password`= '$md5pass' AND `activated` = 1)";					
						$resultt= mysqli_query($dbc,$q);
	 					
						if(@mysqli_num_rows($resultt) == 1)
						{
							$_SESSION = mysqli_fetch_array($resultt, MYSQLI_ASSOC);
							//set cookie for 30 minutes
							setcookie('lname', $_SESSION['lname'], time()+1800);
							setcookie('fname',$_SESSION['fname'],time()+1800);
							//show home page
							if(!headers_sent())
							{
								header("Location: ../login/homepage.php");
							}
				    	}//if
						
						if(@mysqli_num_rows($resultt) ==0 )
						{
							$e.="The email or password you entered is incorect.\n";
						}//if
						
					}//if 0
			  }//empty
		}////////////////////////////////////////////////////////////////////////////ind
}//go
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sign In</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="../images/Envision.css" type="text/css"/>

<meta name="Author" content="Manzoor Ahmed"/>
<meta name="copyright" content="limozoor.com"/>
<meta name="language" content="English"/>
<meta name="distribution" content="Global"/>
<meta name="rating" content="General"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="Content-Language" content="en-us"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<meta http-equiv="Reply-to" content="limozoor@gmail.com"/>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />

</head>
<!-- Start body -->
<body>
<div id="wrap">
  <div id="header"></div>

  <div  id="menu">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../reservation.php">Reservation</a></li>
      <li><a href="../limo_services.php">Services</a></li>
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
  <div id="content-wrap">
    <div id="sidebar">
	<span>&nbsp;</span>
     <div style="background-image:url(../images/cont.gif); height:90px; padding:20px 10px 5px 15px;">
	<span class="man">Toll-Free: <? include('../phone.php'); echo $toll_free; ?></span><br />
      <span class="man">Bay Area : <? echo $phone; ?></span><br/>
      <span class="man"><? echo $email; ?></span>
	 </div>
      <ul class="sidemenu">

      </ul>

      <div class="cities"><p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
  </p>
  </div>
    </div>
    <!-- End left nav -->
    <div id="main1">

      <div class="man">Please sign in for faster reservation
        <div style="margin:10px 0px 0px 0px;">
		<div id="error" style="visibility:collapse">

		</div>
		<div style="background-color:#CCCCCC;">
		<?php
			if(isset($_POST['go']))
			{
				if(!empty($e))
				{
					echo "<p style='color:red;'>".nl2br($e)."</p>";
				}
		    }
		?>
</div>
	  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="signin" >
	  <table>
	   <tr>
	   <td width="41%"><label>Account Type * </label></td>
	   <td width="59%">
	   <select name="corp" id="corp" />
	   <?php
			$t = array("","","");

			if($corp == "none"){
				$t[0]="selected='selected'";
			}
			if($corp == "corp"){
				$t[1]="selected='selected'";
			}
			if($corp == "ind"){
				$t[2]="selected='selected'";
			}
		?>

	   <option value="none"  <? echo $t[0]?>>Select</option>
	   <option value="corp"  <? echo $t[1]?>>Corporation</option>
	   <option value="ind" <? echo $t[2]?>>Individual</option>
	   </select></td>
	   </tr>
	  <tr>
	  <td width="161">
	  <label>Email</label></td><td width="327"><input type="text" size="30" name="eemail" id="eemail" value="<? echo htmlentities($eemail);?>"/></td></tr>
	  <tr><td>
	  <label>Password</label></td><td><input type="password" size="30" name="dpassword" id="dpassword" value="<? echo htmlentities($dpassword);?>"/></td></tr>
	  <tr><td>&nbsp;</a></td><td>&nbsp;</td></tr>
	  <tr><td><a href="forgot.php">Forgot password</a></td><td>&nbsp;</td> </tr>
	  <tr><td>&nbsp;</a></td><td>&nbsp;</td> </tr>

	  <tr><td><input type="submit" value="GO!" name="go" id="go" style="background-color:#E93701; font-weight: bold; color:#FFFFFF;" /></td>
	  <td>
	  <input type="button" value="RESET" name="reset" id="reset" onclick="reset"  style="background-color:#E93701; font-weight:bold; color:#FFFFFF;"/></td></tr>
	  <tr><td colspan="2">&nbsp;</td></tr>
	  </table>
	  </form>
	  </div>
	  </div>
<div id="holder">
<div class="linkfooter"></div>
        <!-- end linkfooter -->
        <!-- end linkfooter holder-->
      </div>
      <!-- End innerHolder-->
    </div>
  </div>
  <div id="footer">
    <p> 2010 &copy; <script type="text/javascript">var data = Date.getFullYear(); document.write(date);</script>|
	<a href="../terms.php">Terms and conditions </a>| <a href="../reservation.php">reservation</a> &nbsp;| <a href="../index.php">Home</a>&nbsp;|&nbsp; <a href="../sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
