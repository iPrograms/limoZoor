<?php
$your_email ='limozoor@gmail.com';
$yogi ='blkyogibearlimo@sbcglobal.net';

session_start();

$errors = '';

$firstname = '';
$lastname ='';
$pphone ='';
$eemail = '';
$user_message ='';

if(isset($_POST['submit']))
{
			error_reporting (E_ALL ^ E_NOTICE);
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$pphone = $_POST['pphone'];
			$eemail = $_POST['eemail'];
			$user_message =$_POST['message'];
			
			 $ck_name = '/^[A-Za-z ]{2,20}$/';
			 $ck_phone = '/^\d{3}-\d{3}-\d{4}$/';
			 $ck_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
			 
			 if(empty($firstname)){
				$errors.="\n Please provide First Name.";
			 }
			 if(!empty($firstname)){
				
				if(!preg_match($ck_name,$firstname)){
					$errors.="\n Invalid First Name.";
				}
			 }
			 //last name
			 if(empty($lastname)){
				$errors.="\n Please provide Last Name.";
			 }
			 if(!empty($lastname)){
				
				if(!preg_match($ck_name,$lastname)){
					$errors.="\n Invalid Last Name.";
				}
			 }
			 //phone
			 if(empty($pphone)){
				$errors.="\n Please provide phone number.";
			 }
			 if(!empty($pphone)){
				if(!preg_match($ck_phone,$pphone)){
					$errors.="\n Invalid phone number, use xxx-xxx-xxxx format.";
				}
			 }
			 //email
			 if(empty($eemail)){
				$errors.="\n Please provide email.";
			 }
			 if(!empty($eemail)){
				if(!preg_match($ck_email,$eemail)){
				$errors.="\n Invalid email.";
				}
			 }
			 //message
			 if(trim($user_message)==""){
			 	$errors.="\n Please enter your message.";
			 } 
			 
			 if(empty($_SESSION['6_letters_code'] ) ||
	 		 strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
			{
				//Note: the captcha code is compared case insensitively.
				//if you want case sensitive match, update the check above to
				// strcmp()
				$errors .= "\n The captcha code does not match!";
			}
	 		if(empty($errors))
			{
				$to = $your_email;
				$subject="CONTACT Form submited >> Limozoor.";
				$from = $your_email;
				$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
				$body = "LIMOZOOR >> CONTACT REQUEST.\n\n".
				"PERSONAL INFORMATION           \n\n".
				"First Name : $firstname                 Last Name  : $lastname\n".
				"Email      : $eemail                     Phone      : $pphone\n\n".
				"Message: \n ".
				"$user_message\n\n".
				"User IP Address  : $ip\n";
				
				$headers = "From: $from \r\n";
				$headers .= "Reply-To: $email \r\n";
				
				mail($to,$subject,$body,$headers);
				//mail($yogi,$subject,$body,$headers);
				
				header('Location: contacted.php');
			}
	
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<head>
<title>San Francisco, San Jose, Oakland, Bay Area town car reservation <? include('phone.php'); echo $toll_free; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="images/Envision.css" type="text/css"/>
<!-- keywords-->
<meta name="description" content="sjc,airport,town car, San jose, san francisco, oakland airport Limo reservation,san jose limo reservation,town car"/>

<meta name="Author" content="Manzoor Ahmed"/>
<meta name="copyright" content="limozoor.com"/>
<meta name="language" content="English"/>
<meta name="revisit-after" content="10 days"/>
<meta name="distribution" content="Global"/>
<meta name="rating" content="General"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="Content-Language" content="en-us"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<meta http-equiv="Reply-to" content="limozoor@gmail.com"/>
<meta name="robots" content="index,follow"/>

<style type="text/css">
label,a, body
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px;
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
.personal{font-size:16px; color:#000000;}
.holder{width:60%;  margin:10px 30px 10px 250px; float:left;}
.hide{visibility:collapse;}
.red{color:#FF0000; font-size:16px;}
</style>

<script language="javascript" src="javacode.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25360825-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<!-- Start body -->
<body>
<div id="wrap">
  <div id="header">
    
    
  </div>
  <!-- start menu -->
  <div  id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li id="current"><a href="reservation.php">Reservation</a></li>
      <li><a href="limo_services.php">Services</a></li>
      <li><a href="prices.php">Prices</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li class="last"><a href="about.php">About</a></li>
      <li class="last"><a href="sitemap.php">Site map</a></li>
	    <li class="last"><a href="#"></a></li>
		<li class="last"><a href="#"></a></li>
		<li class="last"><a href="#"></a></li>
		
    </ul>
  </div>
  <!-- end menu -->
  <div id="content-wrap">
    <!-- End left nav -->
<div id="main1">
      <!--Text start -->
      
        <!--End Text -->
      <div class="upper">
        <div id="form" style="width:100%; background-color:
#FFFFFF;">
<table width="127%">
<tr><td>
	    <h3 style="color:#009999; font-size:16px;">Thank you for contacting us. We will respond to your email as soon as we can.</h3></td></tr>
		<tr>
		  <td><a href="index.php">GO HOME</a></td>
		</tr>
		
		</table>
		 

			<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
	  
	  <!-- End fomr-->
	  </div>
	  
	  
	  </div>
	  <div class="Our_prices" style="margin:0px 0px 0px 50px;"></div>
      <!-- innerholder for the bottom columns-->
      <!-- End innerHolder-->
</div>
  </div>
  <div id="footer">
    <p>&copy; 2010 - <script type="text/javascript">var d = new Date(); document.write(d.getFullYear());</script>
    | <a href="terms.php">Terms and conditions</a> | <a href="reservation.php">reservation</a> &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="index.php">Home</a>&nbsp; |&nbsp; <a href="sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
