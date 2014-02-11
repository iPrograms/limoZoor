<?php 
session_start();
	if(!isset($_SESSION['confirm'])){
		session_destroy();
		header('Location: http://limozoor.com/login/register.php');
		exit();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Successfull registration form</title>
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
    <!-- End left nav -->
<div >
      <!--Text start -->
      
        <!--End Text -->
        <div style="background-image:url(../images/register.gif); background-repeat:no-repeat;" >
<div >
<p style="color:#4E8A53; font-size:18px; font:Verdana, Arial, Helvetica, sans-serif; "><div style="margin:10px 0px 0px 120px;" ><label class="man">Registration successful ! <br />
Please check your email to activate your account.</label>
<?  echo '<meta http-equiv="refresh" content="7;URL=\'http://limozoor.com/login/signin.php\'">';?>
</div>
</div>
        </div>
      <!-- End innerHolder-->
    </div>
  </div>
  <div id="footer">
    <p> 2010 &copy; <script type="text/javascript">var data = Date.getFullYear(); document.write(date);</script>| 
	<a href="terms.php">Terms and conditions </a>| <a href="reservation.php">reservation</a> &nbsp;| <a href="index.php">Home</a>&nbsp;|&nbsp; <a href="sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
