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
			//error_reporting (E_ALL ^ E_NOTICE);
			
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
				mail($yogi,$subject,$body,$headers);
				
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
<title>Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="images/Envision.css" type="text/css"/>

<meta name="description" content="limozoor santa clara san jose oakland san francisco sfo milpitas los gatos gilroy town car, corporate transfer contact form"/>

<meta name="Author" content="Manzoor Ahmed"/>
<meta name="copyright" content="limozoor.com"/>
<meta name="language" content="English"/>
<meta name="distribution" content="Global"/>
<meta name="rating" content="General"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="Content-Language" content="en-us"/>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<meta http-equiv="Reply-to" content="limozoor@gmail.com"/>
<meta name="robots" content="index,follow"/>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
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
  <div id="header"></div>
  <!-- start menu -->
  <div  id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="reservation.php">Reservation</a></li>
      <li><a href="limo_services.php">Services</a></li>
      <li><a href="prices.php">Prices</a></li>
      <li  id="current"><a href="contact.php">Contact</a></li>
      <li class="last"><a href="about.php">About</a></li>
      <li class="last"><a href="sitemap.php">Site map</a></li>
	  <li class="last"><a href="#"></a></li>
      <li class="last"><a href="#"></a></li>
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
	  
	   <h2 class="man">Santa Clara, San Jose, San Francisco (SFO), Oakland (OKL), Milpitas, Gilroy, Los Gatos, Napa wine tour, airport town car, stretch limousine, wedding, corporate transfer, sports, birthday &amp; personal driver contact form. </h2>
	   <?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<!--start form-->
<div id='contact_form_errorloc' class='err'></div>
            
			<form method="POST" name="contactform"
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<table width="100%" border="0">
<tr><td colspan="2"><label class="personal">Personal Information</label></td>
</tr>
<tr><td width="38%">
<label for='firstname'>First Name <span class="red">*</span> </label></td>
<td width="60%"><input type="text" name="firstname" value='<?php echo htmlentities($firstname) ?>'></td></tr>
<tr><td>
<label for='email'>Last Name <span class="red">*</span> </label></td>
<td>
<input type="text" name="lastname" value='<?php echo htmlentities($lastname)?>'></td></tr>
<tr>
<td>
<label for='email'>Phone <span class="red">*</span> </label></td><td>
<input type="text" name="pphone" id="pphone" value="<?php echo htmlentities($pphone)?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#009900">xxx-xxx-xxxx</span></td></tr>
<tr><td>
<label for='email'>Email <span class="red">*</span> </label></td>
<td><input type="text" name="eemail" id="eemail" value='<?php echo htmlentities($eemail) ?>'></td></tr>
<tr><td>
<label for='message'>Message<span class="red">*</span></label></td>
<td>
<textarea name="message" rows=8 cols=30><?php echo htmlentities($user_message) ?></textarea></td></tr>
<tr><td>
<tr><td>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' alt="captcha" ></td><td>&nbsp;</td></tr>
<tr><td colspan="2">
<label for='message'>Enter the code above here <span class="red">*</span></label></td></tr>
<tr><td>
<input id="6_letters_code" name="6_letters_code" type="text"></td><td>&nbsp;</td></tr>
<tr><td>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</td><td>&nbsp;</td></tr>
<tr><td>
<input type="submit" value="Contact" name="submit" style="background-color:#E93701; font-weight: bold; color:#FFFFFF;"></td><td>&nbsp;</td></tr></table>
</form>
<!--end form-->

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
    | <a href="terms.php"> Terms and conditions</a> | <a href="reservation.php">reservation</a> &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="index.php">Home</a>&nbsp; |&nbsp; <a href="sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
