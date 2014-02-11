<?php
$your_email ='';
$yogi = '';

session_start();
$errors = '.......SORRY, THIS SITE IS UNDER CONSTRUCTION!.......';

$firstname = '';
$lastname ='';
$pphone ='';
$eemail = '';
$cars ='';
$passangers ='';
$pickupaddress ='';
$pickupcity = '';
$pickupzipcode = '';
$flightnumber = '';
$airports = '';
$flightnumber = '';
$airlinename ='';
$airlinecode ='';
$meet ='';
$month = '';
$day ='';
$hour = '';
$minute = '';
$ampm ='';

$pickupaddress1 = '';
$flightnumber1 ='';
$pickupcity1 = '';
$pickupzipcode1 ='';
$airportname1 = '';
$airlinename1 ='';
$airlinecode1 = '';
$terminal ='';
$airports1 ='';
$terminal ='';
$user_message ='';
$payment ='';
$errors = '';
$first ='';
$secondd ='';

$agree ='';
$stops ='';
$title ='';
$Ourterms= '1. All deposits are NON refundable........If you would like to make payment with cash; we still need a valid credit card, or debit card on hold until the cash payment is received.';

if(isset($_POST['submit']))
{
			error_reporting (E_ALL ^ E_NOTICE);
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$pphone = $_POST['pphone'];
			$eemail = $_POST['eemail'];
			
			$cars = $_POST['cars'];
			$passangers = $_POST['passangers'];
			$pickupaddress =trim($_POST['pickupaddress']);
			$pickupcity = trim($_POST['pickupcity']);
			$pickupzipcode = trim($_POST['pickupzipcode']);
			
			$flightnumber = $_POST['flightnumber'];
			$airports = $_POST['airports'];
			$airlinename =$_POST['airlinename'];
			$airlinecode =$_POST['airlinecode'];
			$meet =$_POST['meet'];
			
			$month = $_POST['month'];
			$day =$_POST['day'];
			$hour = $_POST['hour'];
			$minute = $_POST['minute'];
			$ampm =$_POST['ampm'];
			
			$pickupaddress1 = $_POST['pickupaddress1'];
			$pickupcity1 = $_POST['pickupcity1'];
			$pickupzipcode1 =$_POST['pickupzipcode1'];
			$airlinename1 = $_POST['airlinename1'];
			$flightnumber1 = $_POST['flightnumber1'];
			$airlinecode1 = $_POST['airlinecode1'];
			$terminal =$_POST['terminal'];
			$airports1 =$_POST['airports1'];
			$user_message =$_POST['message'];
			$payment= $_POST['payment'];
			
			$first = $_POST['first'];
			$secondd = $_POST['secondd'];
			
			$agree = $_POST['agree'];
			$stops = $_POST['stops'];
			$title = $_POST['title'];
			$date = date('l jS \of F Y h:i:s A');
			
	 $ck_name = '/^[A-Za-z ]{2,20}$/';
	 $ck_phone = '/^\d{3}-\d{3}-\d{4}$/';
	 $ck_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	 $ck_zip ='/^\d{5}$/';
	 
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
	 //veh
	 if($cars ==""){
	 	$errors.="\n Please select vehicle.";
	 }
	 //passengers
	 if($passangers ==""){
	 	$errors.="\n Please select passengers.";
	 }
	 
	//get address info		
	
	//day
	if(trim($day) ==""){
		$errors.="\n Please select pickup day.";
	}
	//month
	if(trim($month)==""){
		$errors.="\n Please select pickup month.";
	}
	//hour
	if(trim($hour) ==""){
		$errors.="\n Please select pick up hour.";
	}
	//minute
	if(trim($minute) ==""){
		$errors.="\n Please select pick up minutes.";
	}
	//ampm
	if(trim($ampm) ==""){
		$errors.="\n Please select am or pm.";
	}
	
	if(!isset($first)){
		if(empty($pickupaddress)){
			$errors.="\n Please enter pick up address.";
		}
		if(empty($pickupcity)){
			$errors.="\n Please enter pick up city.";
		}
		if(empty($pickupzipcode) || !preg_match($ck_zip,$pickupzipcode)){
			$errors.="\n Please enter valid pick up zip code.";
		}
		
	}
	
	if(isset($first)){
		
		$pickupaddress ='';
		$pickupcity ='';
		$pickupzipcode ='';
		
		if(trim($airports) ==""){
			$errors.="\n Please check 'Airport  pick up' and  select pick up airport.";
		}
		if(trim($flightnumber)==""){
			$errors.="\n Please check 'Airport pick up' and provide flight number.";
		}
		if(trim($airlinename)==""){
			$errors.="\n Please check 'Airport pick up' and provide airline name.";
		}
		if(trim($meet)==""){
			$errors.="\n Please check 'Airport pick up' and  select meet area.";
		}
	}
	
	
	if(isset($secondd)){
		
		$pickupaddress1 ='';
		$pickupcity1 ='';
		$pickupzipcode1 ='';
		
		if(trim($airports1) ==""){
			$errors.="\n Please select drop airport.";
		}
		if(trim($flightnumber1)==""){
			$errors.="\n Please check 'Airport drop off' and  provide drop flight number.";
		}
		if(trim($airlinename1)==""){
			$errors.="\n Please provide dropp  airline name.";
		}
		if(trim($terminal) ==""){
			$errors.="\n Please select drop off terminal.";
		}
	}
	if(!isset($secondd)){
		if(trim($pickupaddress1)==""){
			$errors.="\n Please enter drop off address.";
		}
		if(empty($pickupcity1)){
			$errors.="\n Please enter drop city.";
		}
		if(empty($pickupzipcode1) || !preg_match($ck_zip,$pickupzipcode1)){
			$errors.="\n Please enter valid drop zip code.";
		}
	}
	if(trim($payment) ==""){
		$errors.="\n Please select payment type.";
	}
	if(!isset($agree)){
		$errors.="\n Please agree to terms.";
	}
	if(trim($stops) ==""){
		$errors.="\n Please select number of stops.";
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
		//send the email
		$to = $your_email;
		$subject="Limozoor >> RESERVATION";
		$from = $eemail;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

		$body = "Limozoor.\n\n".
		"Form submision time:        $date\n".
		"PERSONAL INFORMATION           \n\n".
		"Name       : $title $firstname  $lastname\n".
		"Email      : $eemail                     Phone      : $pphone\n\n".
		"VEHICLE INFORMATION\n\n".
		"Vehicle : $cars                         Passangers : $passangers\n\n".
		"PICK UP INFORMATION\n\n".
		"Address            : $pickupaddress       City       : $pickupcity\n".
		"Zipcode            : $pickupzipcode\n".
		"Airport            : $airports            Flight#    : $flightnumber\n".
		"Airline name     : $airlinename\n".
		"Airline code     : $airlinecode         Meet Area  : $meet\n".
		"Time                  : $month $day $hour:$minute $ampm\n\n".
		"DROP OFF INFORMATION\n".
		"Drop Address     : $pickupaddress1       City       : $pickupcity1\n".
		"Zipcode          : $pickupzipcode1\n".
		"Airport          : $airports1            Flight#    : $flightnumber1\n ".
		"Airline name     : $airlinename1\n".
		"Terminal         : $terminal\n\n".
		"Stops            : $stops\n\n".
		"Payment          : $payment\n\n".
		"Message: \n ".
		"$user_message\n\n".
		"------------------------------------------------------------------------\n".
		"\n".
		"I $firstname, $lastname  agree to :\n".
		"$Ourterms\n\n".
		"My IP Address is  : $ip\n";
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $email \r\n";
		
		mail($to,$subject, $body,$headers);
		mail($yogi,$subject,$body,$headers);
		mail("manzoor_81@hotmail.com",$subject,$body,$headers);
	    
		header('Location: reservation1.php');
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
.style40 {
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
	font-weight: bold;
}
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
      <li id="current"><a href="reservation.php">Reservation</a></li>
      <li><a href="limo_services.php">Services</a></li>
      <li><a href="prices.php">Prices</a></li>
      <li><a href="contact.php">Contact</a></li>
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
<div id="main2">
      <!--Text start -->
      
        <!--End Text -->
      <div class="upper">
        
	  
	  <div id="form" style="width:100%; background-color:
#FFFFFF;">

	    <p class="man">All Online Reservation must be made at least 24 hours in advance!</p>
	    <p style="color:#000000; font-size:14px;"><span style="color:#006699;">Don't have 24 hours? </span>Call us toll free today at <span style="color:#990000; font-size:24px; font-family:Arial, Helvetica, sans-serif; font-stretch:condensed;">
	      <? include('phone.php'); echo $toll_free; ?>
        </span>to make a reservation</p>
	    <h2 class="man1">San Jose, San Francisco (SFO), Oakland (OKL), Gilroy, Los Gatos, Napa, airport town car, stretch limousine, wedding, corporate, sports, birthday,personal driver reservation form. </h2>
	    <p class="style40">SORRY, THIS PAGE IS UNDER CONSTRUCTION. CURENTLY WE DO NOT ACCEPT RESERVATION THROUGH THIS SITE. </p>
	    <p class="man1">&nbsp;</p>
	    <?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>
            
			<form method="POST" name="contact_form"
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
<table width="100%" border="0">
<tr><td colspan="2"><label class="personal">Personal Information</label></td>
</tr>
<tr><td><label>Title<span class="red">*</span></label></td>
<td><select name="title" id="title">
<?php 
$t = array("","","","");

if($title == ""){
	$t[0]="selected='selected'";
}
if($title == "Mr."){
	$t[1]="selected='selected'";
}
if($title == "Mrs."){
	$t[2]="selected='selected'";
}
if($title == "Miss"){
	$t[3]="selected='selected'";
}

?>
<option value="" <? echo $t[0]?>>Select</option>
<option value="Mr." <? echo $t[1]?>>Mr</option>
<option value="Mrs." <? echo $t[2]?>>Mrs</option>
<option value="Miss." <? echo $t[3]?>>Miss</option>

</select></td></tr>
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
<tr><td colspan="2"><label class="personal">Vehicle Information</label></td></tr>
<tr><td>
<label>Vehicle <span class="red">*</span> </label></td><td>

<select name="cars" >
 
			
			<?php $selectedOption = $cars;
			$options = array("", "", "", "");
			
			if($selectedOption == ""){
				$options[0] = "selected='selected'";
			}
			if($selectedOption =="Town Car"){
				$options[1] = "selected='selected'";
			}
			if($selectedOption == "Stretch Limo"){
				$options[2] = "selected='selected'";
			}
			if($selectedOption == "SUV"){
				$options[3] = "selected='selected'";
			}?>
<option value="" <?php echo $options[0];?>>Select</option>
<option value="Town Car" <?php echo $options[1];?> >Town Car</option>
<option value="Stretch Limo" <?php echo $options[2];?>>Stretch Limo</option>
<option value="SUV" <?php echo $options[3];?>>SUV</option>
</select>
</td></tr>
<tr><td>
<label>Passengers <span class="red">*</span> </label></td><td>
<select name="passangers">

				<?php
				
				$selectOpt = $passangers;
				$option = array("","","","","","","","","","","");
				
				if($selectOpt == ""){
					$option[0] = "selected='selected'";
				}
				if($selectOpt =="1")
				{
					$option[1] = "selected='selected'";
				}
				if($selectOpt =="2"){
					$option[2] = "selected='selected'";
				}
				if($selectOpt =="3"){
					$option[3] = "selected='selected'";
				}
				if($selectOpt =="4"){
					$option[4] = "selected='selected'";
				}
				if($selectOpt =="5"){
					$option[5] = "selected='selected'";
				}
				if($selectOpt =="6"){
					$option[6] = "selected='selected'";
				}
				if($selectOpt =="7"){
					$option[7] = "selected='selected'";
				}
				if($selectOpt =="8"){
					$option[8] = "selected='selected'";
				}
				if($selectOpt =="9"){
					$option[9] = "selected='selected'";
				}
				if($selectOpt =="10"){
					$option[10] = "selected='selected'";
				}
				?>
<option value="" <?php echo $option[0]; ?>>Select</option>
<option value="1" <?php echo $option[1]; ?>>1</option>
<option value="2" <?php echo $option[2]; ?>>2</option>
<option value="3" <?php echo $option[3]; ?>>3</option>
<option value="4" <?php echo $option[4]; ?>>4</option>
<option value="5" <?php echo $option[5]; ?>>5</option>
<option value="6" <?php echo $option[6]; ?>>6</option>
<option value="7" <?php echo $option[7]; ?>>7</option>
<option value="8" <?php echo $option[8]; ?>>8</option>
<option value="9" <?php echo $option[9]; ?>>9</option>
<option value="10" <?php echo $option[10]; ?>>10</option>
</select>
</td></tr>
<tr><td colspan="2">
<label class="personal" id="m">Pick up address information</label></td></tr>
<tr><td>
<label id="firstt">Please Choose <span class="red">*</span> </label></td>
<td><label>Airport pick up</label>
  <input type="checkbox" name="first" id="first" value="yes"  onChange="hideshow()"></td>
</tr>
<tr id="pickadd"><td>
<label>Pick up address <span class="red">*</span></label></td><td>
<input type="text" name="pickupaddress"  value="<? echo htmlentities($pickupaddress);?> " id="pickupaddress"></td></tr>
<tr id="pickcity"><td>
<label>City  <span class="red">*</span></label>
</td><td><input type="text" name="pickupcity" value="<?php echo htmlentities($pickupcity)?>"  id="pickupcity">
</td></tr>
<tr id="pickzip">
  <td><label>Zip Code <span class="red">*</span></label></td>
  <td><input type="text" name="pickupzipcode" value="<? echo htmlentities($pickupzipcode)?>" id="pickupzipcode"></td></tr>
<tr class="hide" id="airportlabel"><td colspan="2" ><label class="personal">Airport pick up information</label></td></tr>
<tr id="pickair" class="hide"><td>
<label>Airport name <span class="red">*</span></label></td><td>
<select name="airports" id="airports">
<?php 

$airselec = array("","","","");
$clicked = $airports;

if($clicked ==""){
	$airselec[0] ="selected='selected'";
}
if($clicked =="San Jose Int"){
	$airselec[1] ="selected='selected'";
}
if($clicked =="San Francisco Int"){
	$airselec[2] ="selected='selected'";
}
if($clicked =="Oakland Int"){
	$airselec[3] ="selected='selected'";
}
?>

<option value="" <?php echo $airselec[0] ?>>Select</option>
<option value="San Jose Int" <?php echo $airselec[1] ?>>San Jose Int</option>
<option value="San Francisco Int" <?php echo $airselec[2] ?>>San Francisco</option>
<option value="Oakland Int" <?php echo $airselec[3] ?>>Oakland</option>
</select></td></tr>
<tr id="pickflight" class="hide"><td>
<label>Flight Number <span class="red">*</span> </label></td>
<td><input type="text" value="<?php echo htmlentities($flightnumber)?>" name="flightnumber" id="flightnumber"></td></tr>
<tr id="pickairline" class="hide"><td><label>Airline name <span class="red">*</span></label></td><td><input type="text" value="<?php echo htmlentities($airlinename)?>" name="airlinename" id="airlinename"></td></tr>
<tr id="pickcode" class="hide"><td><label>Airline code</label></td><td><input type="text" value="<?php echo htmlentities($airlinecode)?>" name="airlinecode">
&nbsp;&nbsp;&nbsp;&nbsp;American Airlines = <span style="color:#006699; font-size:16px; font-weight:bold;">AA</span> </td>
</tr>
<tr id="pickmeet" class="hide"><td><label>Meet area <span class="red">* </span></label></td><td>
<select name="meet" id="meet">
<?php 
$meetar = array("","","");
$chosen = $meet;

if($chosen == ""){
$meetar[0]= "selected='selected'";
}
if($chosen == "Inside"){
$meetar[1]= "selected='selected'";
}
if($chosen == "Outside"){
$meetar[2]= "selected='selected'";
}
?>
  <option value="" <? echo $meetar[0]?>>Select</option>
  <option value="Inside" <? echo $meetar[1]?>>Inside</option>
  <option value="Outside" <? echo $meetar[2]?>>Outside</option>
</select></td></tr>
<tr>
<td>
<label id="month">Pick up Day <span class="red">*</span></label></td><td>
<select name="month">
				
				<?php 
				
				$holder = array("","","","","","","","","","","","","");
				$mmmonth = $month;
				
				if($mmmonth ==""){
					$holder[0]= "selected='selected'";
				}
				
				if($mmmonth =="Jan"){
					$holder[1] ="selected='selected'";
				}
				if($mmmonth =="Feb"){
					$holder[2] ="selected='selected'";
				}
				if($mmmonth =="Mar"){
					$holder[3] ="selected='selected'";
				}
				if($mmmonth =="Apr"){
					$holder[4] ="selected='selected'";
				}
				if($mmmonth =="May"){
					$holder[5] ="selected='selected'";
				}
				if($mmmonth =="Jun"){
					$holder[6] ="selected='selected'";
				}
				if($mmmonth =="Jul"){
					$holder[7] ="selected='selected'";
				}
					
				if($mmmonth =="Aug"){
					$holder[8]="selected='selected'";
				}
				if($mmmonth =="Sep"){
					$holder[9] ="selected='selected'";
				}
				if($mmmonth =="Oct"){
					$holder[10] ="selected='selected'";
				}
				if($mmmonth =="Nov"){
					$holder[11] ="selected='selected'";
				}
				if($mmmonth =="Dec"){
					$holder[12] ="selected='selected'";
				}
					
				?> 
				<option value="" <? echo $holder[0]?>>Month</option>
				<option value="Jan" <? echo $holder[1]?>>Jan</option>
                <option value="Feb" <? echo $holder[2]?>>Feb</option>
                <option value="Mar" <? echo $holder[3]?>>Mar</option>
                <option value="Apr" <? echo $holder[4]?>>Apr</option>
                <option value="May" <? echo $holder[5]?>>May</option>
                <option value="Jun" <? echo $holder[6]?>>Jun</option>
                <option value="Jul" <? echo $holder[7]?>>Jul</option>
                <option value="Aug" <? echo $holder[8]?>>Aug</option>
                <option value="Sep" <? echo $holder[9]?>>Sep</option>
                <option value="Oct" <? echo $holder[10]?>>Oct</option>
                <option value="Nov" <? echo $holder[11]?>>Nov</option>
                <option value="Dec" <? echo $holder[12]?>>Dec</option>
</select>

<select name="day">
				
				<?php 
				$dayy = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
				$dayp = $day;
				
				if($dayp ==""){
					$dayy[0] ="selected='selected'";
				}
				if($dayp =="1"){
					$dayy[1] ="selected='selected'";
				}
				if($dayp =="2"){
					$dayy[2] ="selected='selected'";
				}
				if($dayp =="3"){
					$dayy[3] ="selected='selected'";
				}
				if($dayp =="4"){
					$dayy[4] ="selected='selected'";
				}
				if($dayp =="5"){
					$dayy[5] ="selected='selected'";
				}
				if($dayp =="6"){
					$dayy[6] ="selected='selected'";
				}
				if($dayp =="7"){
					$dayy[7] ="selected='selected'";
				}
				if($dayp =="8"){
					$dayy[8] ="selected='selected'";
				}
				if($dayp =="9"){
					$dayy[9] ="selected='selected'";
				}
				if($dayp =="10"){
					$dayy[10] ="selected='selected'";
				}
				if($dayp =="11"){
					$dayy[11] ="selected='selected'";
				}
				if($dayp =="12"){
					$dayy[12] ="selected='selected'";
				}
				if($dayp =="13"){
					$dayy[13] ="selected='selected'";
				}
				if($dayp =="14"){
					$dayy[14] ="selected='selected'";
				}
				if($dayp =="15"){
					$dayy[15] ="selected='selected'";
				}
				if($dayp =="16"){
					$dayy[16] ="selected='selected'";
				}
				if($dayp =="17"){
					$dayy[17] ="selected='selected'";
				}
				if($dayp =="18"){
					$dayy[18] ="selected='selected'";
				}
				if($dayp =="19"){
					$dayy[19] ="selected='selected'";
				}
				if($dayp =="20"){
					$dayy[20] ="selected='selected'";
				}
				if($dayp =="21"){
					$dayy[22] ="selected='selected'";
				}
				if($dayp =="23"){
					$dayy[23] ="selected='selected'";
				}
				if($dayp =="24"){
					$dayy[24] ="selected='selected'";
				}
				if($dayp =="25"){
					$dayy[25] ="selected='selected'";
				}
				if($dayp =="26"){
					$dayy[26] ="selected='selected'";
				}
				if($dayp =="27"){
					$dayy[27] ="selected='selected'";
				}
				if($dayp =="28"){
					$dayy[28] ="selected='selected'";
				}
				if($dayp =="29"){
					$dayy[29] ="selected='selected'";
				}
				if($dayp =="30"){
					$dayy[30] ="selected='selected'";
				}
				if($dayp =="31"){
					$dayy[31] ="selected='selected'";
				}
				
				?>
				
				<option value="" <? echo $dayy[0];?>>Day</option>
 				<option <? echo $dayy[1];?> value="1">1</option>
                <option <? echo $dayy[2];?> value="2">2</option>
                <option <? echo $dayy[3];?> value="3">3</option>
                <option <? echo $dayy[4];?> value="4">4</option>
                <option <? echo $dayy[5];?> value="5">5</option>
                <option <? echo $dayy[6];?> value="6">6</option>
                <option <? echo $dayy[7];?> value="7">7</option>
                <option <? echo $dayy[8];?> value="8">8</option>
                <option <? echo $dayy[9];?> value="9">9</option>
                <option <? echo $dayy[10];?> value="10">10</option>
                <option <? echo $dayy[11];?> value="11">11</option>
                <option <? echo $dayy[12];?> value="12">12</option>
                <option <? echo $dayy[13];?> value="13">13</option>
                <option <? echo $dayy[14];?> value="14">14</option>
                <option <? echo $dayy[15];?> value="15">15</option>
                <option <? echo $dayy[16];?> value="16">16</option>
                <option <? echo $dayy[17];?> value="17">17</option>
                <option <? echo $dayy[18];?> value="18">18</option>
                <option <? echo $dayy[19];?> value="19">19</option>
                <option <? echo $dayy[20];?> value="20">20</option>
                <option <? echo $dayy[21];?> value="21">21</option>
                <option <? echo $dayy[22];?> value="22">22</option>
                <option <? echo $dayy[23];?> value="23">23</option>
                <option <? echo $dayy[24];?> value="24">24</option>
                <option <? echo $dayy[25];?> value="25">25</option>
                <option <? echo $dayy[26];?> value="26">26</option>
                <option <? echo $dayy[27];?> value="27">27</option>
                <option <? echo $dayy[28];?> value="28">28</option>
                <option <? echo $dayy[29];?> value="29">29</option>
                <option <? echo $dayy[30];?> value="30">30</option>
                <option <? echo $dayy[31];?> value="31">31</option>
</select> 

</td></tr>
<tr>
<td><label>Pick up time <span class="red">*</span></label></td><td>

				<select name="hour">
				<?php 
				$houra = array("","","","","","","","","","","","","","",);
				$hourr = $hour;
				
				if($hourr ==""){
					$houra[0] ="selected='selected'";
				}
				if($hourr =="01"){
					$houra[1] ="selected='selected'";
				}
				if($hourr =="02"){
					$houra[2] ="selected='selected'";
				}
				if($hourr =="03"){
					$houra[3] ="selected='selected'";
				}
				if($hourr =="04"){
					$houra[4] ="selected='selected'";
				}
				if($hourr =="05"){
					$houra[5] ="selected='selected'";
				}
				if($hourr =="06"){
					$houra[6] ="selected='selected'";
				}
				if($hourr =="07"){
					$houra[7] ="selected='selected'";
				}
				if($hourr =="08"){
					$houra[8] ="selected='selected'";
				}
				if($hourr =="09"){
					$houra[9] ="selected='selected'";
				}
				if($hourr =="10"){
					$houra[10] ="selected='selected'";
				}
				if($hourr =="11"){
					$houra[11] ="selected='selected'";
				}
				if($hourr =="12"){
					$houra[12] ="selected='selected'";
				}
				?>
				<option value=""   <?php echo $houra[0]?>>Hour</option>
				<option value="01" <?php echo $houra[1]?>>01</option>
                <option value="02" <?php echo $houra[2]?>>02</option>
                <option value="03" <?php echo $houra[3]?>>03</option>
                <option value="04" <?php echo $houra[4]?>>04</option>
                <option value="05" <?php echo $houra[5]?>>05</option>
                <option value="06" <?php echo $houra[6]?>>06</option>
                <option value="07" <?php echo $houra[7]?>>07</option>
                <option value="08" <?php echo $houra[8]?>>08</option>
                <option value="09" <?php echo $houra[9]?>>09</option>
                <option value="10" <?php echo $houra[10]?>>10</option>
                <option value="11" <?php echo $houra[11]?>>11</option>
                <option value="12" <?php echo $houra[12]?>>12</option>
</select>
				<select name ="minute">
				<?php 
				
				$minutee = array("","","","","","","","","","","","","");
				$minu = $minute;
				
				if($minu ==""){

					$minutee[0] ="selected='selected'";
				}
				if($minu =="00"){
					$minutee[1] ="selected='selected'";
				}
				if($minu =="05"){
					$minutee[2] ="selected='selected'";
				}
				if($minu =="10"){
					$minutee[3] ="selected='selected'";
				}
				if($minu =="15"){
					$minutee[4] ="selected='selected'";
				}
				if($minu =="20"){
					$minutee[5] ="selected='selected'";
				}
				if($minu =="25"){
					$minutee[6] ="selected='selected'";
				}
				if($minu =="30"){
					$minutee[7] ="selected='selected'";
				}
				if($minu =="35"){
					$minutee[8] ="selected='selected'";
				}
				if($minu =="40"){
					$minutee[9] ="selected='selected'";
				}
				if($minu =="45"){
					$minutee[10] ="selected='selected'";
				}
				if($minu =="50"){
					$minutee[11] ="selected='selected'";
				}
				if($minu =="55"){
					$minutee[12] ="selected='selected'";
				}
				?>
				
                <option value=""   <?php echo $minutee[0]?>>Minute</option>
                <option value="00" <?php echo $minutee[1]?>>00</option>
                <option value="05" <?php echo $minutee[2]?>>05</option>
                <option value="10" <?php echo $minutee[3]?>>10</option>
                <option value="15" <?php echo $minutee[4]?>>15</option>
                <option value="20" <?php echo $minutee[5]?>>20</option>
                <option value="25" <?php echo $minutee[6]?>>25</option>
                <option value="30" <?php echo $minutee[7]?>>30</option>
                <option value="35" <?php echo $minutee[8]?>>35</option>
                <option value="40" <?php echo $minutee[9]?>>40</option>
                <option value="45" <?php echo $minutee[10]?>>45</option>
                <option value="50" <?php echo $minutee[11]?>>50</option>
                <option value="55" <?php echo $minutee[12]?>>55</option>
          </select>

			    <select name="ampm" id="ampm">
				<?php 
					$amarray = array("","","");
					$daynight = $ampm;
					
					if($daynight ==""){
						$amarray[0] = "selected='selected'";
					}
					if($daynight =="AM"){
						$amarray[1] = "selected='selected'";
					}
					if($daynight =="PM"){
						$amarray[2] = "selected='selected'";
					}
				?>
                <option value="" <?php echo $amarray[0]?>>AM/PM</option>
                <option value="AM" <?php echo $amarray[1]?>>AM</option>
                <option value="PM" <?php echo $amarray[2]?>>PM</option>
              </select>
</td></tr>
<tr><td colspan="2"><label class="personal">Drop off Information</label></td></tr>
<tr><td><label id="second">Airport drop off?</label></td>
<td><label>Airport drop off.</label>
  <input type="checkbox"  name="secondd" id="secondd" value="yes" onChange="hideshow1()"></td>
</tr>

<tr id="pickadd1"><td>
<label>Drop  off address <span class="red">*</span></label></td><td>
<input type="text" name="pickupaddress1"  value="<? echo htmlentities($pickupaddress1)?> " id="pickupaddress1"></td></tr>
<tr id="pickcity1"><td>
<label>City <span class="red">*</span></label>
</td><td><input type="text" name="pickupcity1" value="<?php echo htmlentities($pickupcity1)?>"  id="pickupcity1">
</td></tr>
<tr id="pickzip1">
  <td><label>Zip Code <span class="red">*</span></label></td>
  <td><input type="text" name="pickupzipcode1" value="<? echo htmlentities($pickupzipcode1)?>" id="pickupzipcode1"></td></tr>
<tr><td><label>Number of stops<span class="red">*</span></label></td>
<td>
<select name="stops" id="stops">
<?php 
$st = array("","","","","","");

if($stops ==""){
	$st[0] ="selected='selected'";
}
if($stops =="0"){
	$st[1] ="selected='selected'";
}
if($stops =="1"){
	$st[2] ="selected='selected'";
}
if($stops =="2"){
	$st[3] ="selected='selected'";
}
if($stops =="More than 3"){
	$st[4] ="selected='selected'";
}
?>
<option value=""<? echo $st[0] ?>>Select</option>
<option value="0" <? echo $st[1] ?>>0</option>
<option value="1" <? echo $st[2] ?>>1</option>
<option value="2" <? echo $st[3] ?>>2</option>
<option value="3" <? echo $st[4] ?>>3</option>
<option value="More than 3" <? echo $st[5] ?>>4</option>

</select></td></tr>

<tr class="hide" id="airportlabel"><td colspan="2" ><label class="personal" id="m2">Airport drop off information</label></td></tr>
<tr id="pickair1" class="hide"><td>
<label>Airport name <span class="red">*</span></label></td><td>

<select name="airports1" id="airports1">
  <?php 
  $dair = array("","","","");
  $aird =$airports1;
  
  if($aird ==""){
  	$dair[0] ="selected='selected'";
  }
  if($aird =="San Jose Int"){
  	$dair[1] ="selected='selected'";
  }
  if($aird =="San Francisco Int"){
  	$dair[2] ="selected='selected'";
  }
  if($aird =="Oakland Int"){
  	$dair[3] ="selected='selected'";
  }
  
  ?>
  <option value="" <?php echo $dair[0]?>>Select</option>
  <option value="San Jose Int" <?php echo $dair[1]?>>San Jose Int</option>
  <option value="San Francisco Int" <?php echo $dair[2]?>>San Francisco</option>
  <option value="Oakland Int" <?php echo $dair[3]?>>Oakland</option>
</select></td>
</tr>
<tr id="pickflight1" class="hide"><td>
<label>Flight Number <span class="red">*</span></label></td>
<td><input type="text" value="<?php echo htmlentities($flightnumber1)?>" name="flightnumber1" id="flightnumber1"></td></tr>
<tr id="pickairline1" class="hide"><td><label>Airline name <span class="red">*</span></label></td><td><input type="text" value="<?php echo htmlentities($airlinename1)?>" name="airlinename1" id="airlinename1"></td></tr>
<tr id="pickcode1" class="hide"><td><label>Airline code </label></td><td><input type="text" value="<?php echo htmlentities($airlinecode1)?>" name="airlinecode1"></td></tr>
<tr id="pickmeet1" class="hide"><td><label>Terminal <span class="red">*</span></label></td>
  <td>
  <select name="terminal">
  <?php 
  $terarray = array("","","");
  if($terminal ==""){
  	$terarray[0] ="selected='selected'";
  }
  if($terminal =="Domestic"){
  	$terarray[1] ="selected='selected'";
  }
  if($terminal =="International"){
  	$terarray[2] ="selected='selected'";
  }
  
  ?>
  
    <option value="" <?php echo $terarray[0]?>>Select</option>
    <option value="Domestic" <?php echo $terarray[1]?>>Domestic</option>
    <option value="International" <?php echo $terarray[2]?>>International</option>
  </select></td>
</tr>
<tr><td colspan="2"><label class="personal">Payment type</label></td><tr>
<tr><td><label>I would likt to pay with  <span class="red">*</span></label></td>
<td>
<select name="payment" id="payment">
<? $p = array("","","","");
	if($payment == ""){
		$p[0] = "selected='selected'";
	}
	if($payment =="Debit Card"){
		$p[1] = "selected='selected'";
	}
	if($payment == "Credit Card"){
		$p[2] = "selected='selected'";
	}
	if($payment =="Cash"){
		$p[3] = "selected='selected'";
	}
    
 ?>
<option value="" <?php echo $p[0]?>>Select</option>
<option value="Debit Card" <?php echo $p[1]?>>Debit Card</option>
<option value="Credit Card" <?php echo $p[2]?>>Credit Card</option>
<option value="Cash" <?php echo $p[3]?>>Cash</option>
</select></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>
<label for='message'>Additional information</label></td>
<td>
<textarea name="message" rows=8 cols=30><?php echo htmlentities($user_message) ?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td><label>Terms and conditions </label></td>
<td><textarea rows="4" cols="30">1. All deposits are NON refundable.... </textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td><label>I Agree to the above terms and conditions<span class="red">*</span></label></td>
<td><input type="checkbox" value="agree" id="agree" name="agree" 
<?php 
if(trim($agree)=="agree")
{ 
	echo "checked='checked'";
}
 ?>></td></td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ></td><td>&nbsp;</td></tr>
<tr><td colspan="2">
<label for='message'>Enter the code above here <span class="red">*</span></label></td></tr>
<tr><td>
<input id="6_letters_code" name="6_letters_code" type="text"></td><td>&nbsp;</td></tr>
<tr><td>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</td><td>&nbsp;</td></tr>
<tr><td>
<input type="submit" value="Submit Reservation" name='submit' class="submit" style="background-color:#E93701; font-weight: bold; color:#FFFFFF;" ></td><td>&nbsp;</td></tr></table>
</form>
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
	 
      <!-- innerholder for the bottom columns-->
      <!-- End innerHolder-->
</div>
  </div>
  <div id="footer">
    <p>&copy; 2010 - 
		<script type="text/javascript">
			var d = new Date(); 
			var year = d.getFullYear();
			document.write(year);
		</script>
    | <a href="terms.php">Terms and conditions</a> | <a href="reservation.php">reservation</a> &nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="index.php">Home</a>&nbsp; |&nbsp; <a href="sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
