<? 
ob_start();
   session_start();
    if(!isset($_SESSION['lname'])){
         header("Location: ../index.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sign In</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="../images/Envision.css" type="text/css"/>
<meta name="keywords" content="Corporation town car sign in, limozoor town car, create new account"/>

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
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="/resources/demos/external/jquery.bgiframe-2.1.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />

 <script>
$(function() {
$( "#holder" ).dialog({
	modal: true,
	buttons: {
		OK: function(event,ui) {
	 window.location = 'homepage.php';
	}
	}
	});
	});
</script>
<style type="text/css">
#holder{width:100%; height:auto;}
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
  	
      <div id="holder" title="RESERVATION INFORMATION">
	  
	  <table width="100%">
	  <tr><td colspan="2"><? echo $_SESSION['lname'].", ". $_SESSION['fname']; ?> your reservation number is :</td><td></td></tr>
	  <tr><td colspan="2"><? echo $_SESSION['code'];?></td></tr>
	 
	
	  </table>
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
