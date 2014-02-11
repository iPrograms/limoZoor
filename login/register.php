<?
session_start();
/*****************************************************
 *register.php registers individual and corporate users
 *Writtine by Manzoor Ahmed
 *Date :12/29/12
 *last mod : 1/29/13 
 ****************************************************/
include_once("dbc.php");

    		$corp = '';
			$fname = '';
			$lname = '';
			$password1='';
			$password2='';
			$corpname = '';
			$industry ='';
			$eemail = '';
			$pphone ='';
			$fax = '';
			$aaddress = '';
			$zip = '';
			$dep = '';
			$num = '';
			$ccity = '';
			$errors = '';
	
	    //if submit
		if((isset($_POST['submit'])))
		{
			$corp = $_POST['corp'];
			$fname =$_POST['fname'];
			$lname =$_POST['lname'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			$corpname =$_POST['corpname'];
			$industry =$_POST['industry'];
			$eemail =$_POST['email'];
			$pphone =$_POST['phone'];
			$fax =$_POST['fax'];
			$aaddress =$_POST['address'];
			$zip =$_POST['zip'];
			$dep =$_POST['dep'];
			$num =$_POST['num'];
			$ccity =$_POST['city'];
			$pass_length=6;
			$pass_count=0;
			
			$ck_name = '/^[A-Za-z ]{2,20}$/';
			$ck_corp = '/^[\w.\'-]+$/';
			$ck_phone = '/^\d{3}-\d{3}-\d{4}$/';
			$ck_email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
			$ck_zip ='/^\d{5}$/';
		//select option    
		if($corp=='corp')
		{	
			//first name
	 		if(empty($fname))
			{
	 			$errors.="\n Please provide First Name.";
				
		 	}
	 		//first name
			if(!empty($fname))
			{
	 			//first name valid
				if(!preg_match($ck_name,$fname))
				{
	 				$errors.="\n Invalid First Name.";
	 			}
			}
			//last name
			if(empty($lname))
			{
	 			$errors.="\n Please provide Last Name.";
		 	}
	 		//last name
			if(!empty($lname))
			{
	 			//last name
				if(!preg_match($ck_name,$lname))
				{
	 				$errors.="\n Invalid Last Name.";
	 			}
			}
			
			if(empty($industry)){//do nothing
			}
			if(!empty($industry)){
				
				if(strlen($industry) > 30){
				$errors.="\n Industry name too long!";
				}
			}
			//password
			if(empty($password1) and empty($password2)){
				$errors.="\n Please provide password";
			}
			if(empty($password1) or empty($password2)){
				$errors.="\n Please provide both password fields. ";
			}
			
			if(!empty($password1) and !empty($password2)){
				
				if($password1 != $password2){ //chek if passwords match
					$errors.="\n Both passwords must match!";
				}
				//check password strength
				if((strlen($password1) < $pass_length )or (strlen($password2) < $pass_length)){
					$erros.="\n password length must be at least 6 digits.";
				}
			}
			
			//corpname
			if(empty($corpname)){
				$errors.="\n Please provide corporation name";
			}
			
			if(!empty($corpname)){
			
				if(strlen($corpname) > 30){
					$errors.="\n Invalid corporation name";
				}
			}
			if(empty($fax)){
			}
			
			if(!empty($fax)){
				
				if(!preg_match($ck_phone,$fax)){
					$errors.="\n Invalid fax number";
				}
			}
			
			//email
			 if(empty($eemail)){
	 			$errors.="\n Please provide email.";
	 		}
			//email
	 		if(!empty($eemail))
			{
				//valid email?
	 			if(!preg_match($ck_email,$eemail))
				{
					$errors.="\n Invalid email.";
				}
				
				//make sure user email is unique
				$query = "SELECT email FROM `corporate` WHERE email = '$eemail'";
			    
				//rows of data to be returned
				$data = mysqli_query($dbc,$query);
				
				if(mysqli_num_rows($data) > 0){
				
					$errors.="\n Email exists already, try loging in.";
				}
				
	 		} 
			
			//phone
			if(empty($pphone)){
			
				$erros.="\n Please provide phone number";
			}
			if(!empty($pphone)){
				if(!preg_match($ck_phone,$pphone)){
					$erros.="\n Invalid phone number";
				}
			}
			///department
			if(empty($dep)){
				
			}
			
			if(!empty($dep)){
		
				if(strlen($dep) > 20){
					$errors.="\n Department name too long.";
				}	
			}	
			
			if($num =='select'){
				$errors.="\n Please select number of employees using our service";
			}
			
			if(empty($aaddress)){
				$errors.="\n Please provide corporate address";
			}
			
			if(!empty($aaddress)){
				
				if(strlen($aaddress) >= 25){
					$errors.="\n Invalid, or address too long!";
				}	
			}
			
			if(empty($ccity)){
				$errors.="\n Please provide city";
			}
			
			if(!empty($ccity)){
				
				if(!preg_match($ck_name,$ccity)){
					$errors.="\n Invalid city ";
				}
			}
			
			if(empty($zip)){
				$errors.="\n Please provide zip code";
			}
			
			if(!empty($zip)){
				if(!preg_match($ck_zip,$zip)){
					$errors.="\n Zip code must be 5 digits.";
				}
			}
			if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
			{
				$errors.="\n Captcha code does not match.";
			}
		
		}////////////////////END CORP VALIDATION/////////////////////////////////
		
		if($corp=='ind'){
			
			//first name
	 		if(empty($fname))
			{
	 			$errors.="\n Please provide First Name.";
		 	}
	 		//first name
			if(!empty($fname))
			{
	 			//first name
				if(!preg_match($ck_name,$fname))
				{
	 				$errors.="\n Invalid First Name.";
	 			}
			}
			//last name
			if(empty($lname))
			{
	 			$errors.="\n Please provide Last Name.";
		 	}
	 		//last name
			if(!empty($lname))
			{
	 			//last name
				if(!preg_match($ck_name,$lname))
				{
	 				$errors.="\n Invalid Last Name.";
	 			}
			}
			//password
			if(empty($password1) and empty($password2)){
				$errors.="\n Please provide password";
			}
			
			if(empty($password1) or empty($password2)){
				$errors.="\n Please provide both password fields. ";
			}
			
			if(!empty($password1) and !empty($password2)){
				
				if($password1 != $password2){
					$errors.="\n Both passwords must match!";
				}
				//check password strength
				if((strlen($password1) < $pass_length) or (strlen($password2) < $pass_length)){
					$errors.="\n password length must be at least 6 digits.";
				}
			}
			
			//phone
			if(empty($pphone)){
			
				$errors.="\n Please provide phone number";
			}
			if(!empty($pphone)){
				
				if(!preg_match($ck_phone,$pphone)){
					$errors.="\n Invalid phone number";
				}
			}
			//fax
			if(empty($fax)){
			}
			
			if(!empty($fax)){
				
				if(!preg_match($ck_phone,$fax)){
					$errors.="\n Invalid fax number";
				}
			}
			
			//email
			 if(empty($eemail)){
	 			$errors.="\n Please provide email.";
	 		}
			//email
	 		if(!empty($eemail))
			{
				//email
	 			if(!preg_match($ck_email,$eemail))
				{
					$errors.="\n Invalid email.";
				}
				
				//make sure user email is unique
				$query = "SELECT email FROM `user` WHERE email = '$eemail'";
			    
				//rows of data to be returned
				$data = mysqli_query($dbc,$query);
				
				if(mysqli_num_rows($data) > 0){
				
					$errors.="\n Email exists already, try again.";
				}
				
	 		} 
				
			if(empty($aaddress)){
				$errors.="\n Please provide address";
			}
			
			if(!empty($aaddress)){
				
				if(strlen($aaddress) >= 25){
					$errors.="\n Invalid, or long address";
				}	
			}
			
			if(empty($ccity)){
				$errors.="\n Please provide city";
			}
			
			if(!empty($ccity)){
				
				if(!preg_match($ck_name,$ccity)){
					$errors.="\n Invalid city ";
				}
			}
			
			if(empty($zip)){
				$errors.="\n Please provide zip code";
			}
			
			if(!empty($zip)){
				if(!preg_match($ck_zip,$zip)){
					$errors.="\n Zip code must be 5 digits.";
				}
			}
			
			if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
			{
				$errors.="\n Invalid captcha code";
			}
		
		}///////////////////////////////////////END VALIDATING IND
			
		if(empty($errors))
		{
			//hash password
			$md5pass = md5($password1);
			
			$fname =$_POST['fname'];
			$lname =$_POST['lname'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			$corpname =$_POST['corpname'];
			$industry =$_POST['industry'];
			$eemail =$_POST['email'];
			$pphone =$_POST['phone'];
			$fax =$_POST['fax'];
			$aaddress =$_POST['address'];
			$zip =$_POST['zip'];
			$dep =$_POST['dep'];
			$num =$_POST['num'];
			$ccity =$_POST['city'];
						
			//create uniqe activation code
			$activation = md5(uniqid(rand(),true));
			
			//prevent sql injection
			mysqli_real_escape_string($dbc,$fname);
			mysqli_real_escape_string($dbc,$lname);
			mysqli_real_escape_string($dbc,$fax);
			mysqli_real_escape_string($dbc,$password1);
			mysqli_real_escape_string($dbc,$corpname);
			mysqli_real_escape_string($dbc,$industry);
			mysqli_real_escape_string($dbc,$eemail);
			mysqli_real_escape_string($dbc,$ccity);
			mysqli_real_escape_string($dbc,$dep);
			mysqli_real_escape_string($dbc,$num);
				
				if($corp =='corp')
				{
				
				$inserts = "INSERT INTO `corporate`
						   (`uid`,`fname`,`lname`,`corporation`,`industry`,`address`,`city`,`zip`,`email`,`phone`,`employee`,`password`,`type`,`activated`,`activation`) VALUES ('','$fname','$lname','$corpname','$industry','$aaddress','$ccity','$zip','$eemail','$pphone','$num','$md5pass','corporation','0','$activation')";
						
						$results = mysqli_query($dbc,$inserts);
						//if inserted
						if(mysqli_affected_rows($dbc) ==1)
						{
						
						  $sendmessage = "To activvate your account with Limozoor.com, please click on this link\n\n";
						  $sendmessage.='localhost/login/activate.php?email='. urlencode($eemail)."&key=$activation"."&user=$corp";
						  mail($eemail,'Limozoor Registration Confirmation',$sendmessage,'From: limozoor@gmail.com');
							
						  //clean up the form
								$corp = '';
								$fname = '';
								$lname = '';
								$password1='';
								$password2='';
								$corpname = '';
								$industry ='';
								$eemail = '';
								$pphone ='';
								$fax = '';
								$aaddress = '';
								$zip = '';
								$dep = '';
								$num = '';
								$ccity = '';
								$erros = '';
								
							$_SESSION['confirm'] =1;
							/* Redirect to login page */
							header('http://localhost/limozoor/login/successful.php');
							exit();
						}
						//could add to databse
						else
						{
							mysqli_close($dbc1);
							echo "<p>Can not register, please try again.</p>";
							echo '<meta http-equiv="refresh" content="7;URL=\'../login/register.php\'">';
						}
						
				}//end corp
				
				//individual account register
				if($corp =='ind')
				{
					//sql inj
					mysqli_real_escape_string($dbc,$fname);
					mysqli_real_escape_string($dbc,$lname);
					mysqli_real_escape_string($dbc,$password1);
					mysqli_real_escape_string($dbc,$corpname);
					mysqli_real_escape_string($dbc,$industry);
					mysqli_real_escape_string($dbc,$eemail);
					mysqli_real_escape_string($dbc,$ccity);
					mysqli_real_escape_string($dbc,$dep);
					mysqli_real_escape_string($dbc,$num);
					mysqli_real_escape_string($dbc,$pphone);
					
					$indinsert = "INSERT INTO `user` (`uid`,`fname`,`lname`,`email`,`password`,`type`,`phone`,`address`,`city`,`zip`,`activated`,`activation`) VALUES ('','$fname','$lname','$eemail','$md5pass','individual','$pphone','$aaddress','$ccity','$zip','0','$activation')"; 
					
						$indresult = mysqli_query($dbc,$indinsert) or die(mysql_error());
						//if inserted
						if(mysqli_affected_rows($dbc) ==1)
						{	
						  
						  $sendmessage = "To activate your account with Limozoor.com, please click on the link below\n\n";
						  $sendmessage.='http://localhost/limozoor/login/activate.php?email='. urlencode($eemail)."&key=$activation"."&user=$corp";
						  mail($eemail,'Limozoor Registration Confirmation',$sendmessage,'From: limozoor@gmail.com');
							//clean up the form
							$corp = '';
							$fname = '';
							$lname = '';
							$password1='';
							$password2='';
							$corpname = '';
							$industry ='';
							$eemail = '';
							$pphone ='';
							$fax = '';
							$aaddress = '';
							$zip = '';
							$dep = '';
							$num = '';
							$ccity = '';
							$erros = '';
							
							$_SESSION['confirm'] =1;
							//error_reporting(E_ALL);
							header('Location: http://localhost/limozoor/login/successful.php');
							exit;
						}
						else
						{
							mysqli_close($dbc);
							echo "<p>Sorry, could not add to database, try again</p>";
							echo '<meta http-equiv="refresh" content="7;URL=\'../login/register.php\'">';
						}
				}//end ind
		}//if
	}//errors

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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Register</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link rel="stylesheet" href="../images/Envision.css" type="text/css"/>
<meta name="description" content="Register corporate individual town car accounts with Limozoor, for faster reservation and great deals."/>
<meta name="keywords" content="Register at Limozoor for faster reservation and account information"/>
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
<noscript>Your browser does not support JavaScript!, Please enable JavaScript to run this page.</noscript>
<script language="javascript" src="../register.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style40 {color: #FF0000}
.style42 {
	color: #FF0000;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>

<!--tool tip-->

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <style>
    label {
        display: inline-block;
  
    }
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
	    <li class="last"><a href="#">&nbsp;</a></li>
      <li class="last"><a href="#">&nbsp;</a></li>
      <li class="last"><a href="#">&nbsp;</a></li>
	  <li class="last"><a href="#">&nbsp;</a></li>
      <li class="last"><a href="#">&nbsp;</a></li>
    </ul>
  </div>
  <!-- end menu -->
  <div id="content-wrap">
    <div id="sidebar">
	<span>&nbsp;</span>
     <div style="background-image:url(../images/cont.gif); height:90px; padding:20px 10px 5px 15px;">
	<span class="man">Toll-Free: <? include('../phone.php'); echo $toll_free; ?></span><br />
      <span class="man">Bay Area : <? echo $toll_free; ?></span><br/>
      <span class="man"><? echo $email; ?></span>
	 </div>
      <ul class="sidemenu">
       
      </ul>

    </div>
    <!-- End left nav -->
    <div id="main1">	
	
      <div class="man">
        <div style="margin:10px 0px 0px 0px;">	
		<div style="height:auto; background-color:#C4EBF7;" >

		
		<?php 
			//show errors
		if(!empty($errors))
		{
				$m="Please select account type and fix the following errors.";
				echo "<p style='color:red;'>".nl2br($m)."</p>";
				echo "<p style='color:red;'>".nl2br($errors)."</p>";
		}
?>
		</div>
		<div style="width:auto;background-color: #C4EBF7; padding:0px 0px 10px 10px;"><label>CORPORATE, INDIVIDUAL REGISTRATION FORM</label><hr />
		<label><span class="style40">*</span> = Required</label><hr/>	
		</div>
		
		<div style="width:auto; height:auto;" >
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="signin">
    <table width="96%" style="background-color:#C3EBF7;">
	  
	   
	   <tr><td>&nbsp;</td>
	   <td><label style="color:#999900">Already registered? <a href="signin.php">Log In</a></label></td>
	   </tr>
	   <tr>
	   <td width="28%"><label>Account Type <span class="style40">*</span> </label></td>
	   <td width="72%">
	   <select name="corp" id="corp" onchange="hideShow()"  />
	  
	   <option value="none"  >Select</option>
	   <option value="corp"  >Corporation</option>
	   <option value="ind" >Individual</option>
	   </select>	   		</td>
	   </tr>
	   
	   <tr id="corpaccnametr" style="visibility:collapse" >
	   	<td><label>Account Holder </label></td>
		<td>&nbsp;</td>
	   </tr>
	   
	     <tr id="fnametr" style="visibility:collapse" >
	   	<td><label>First Name<span class="style40"> * </span></label></td>
		<td><input type="text" name="fname" id="fname" size="25" value="<? echo htmlentities($fname)?>" title="First Name"/></td>
	     </tr>
	   
	     <tr id="lnametr" style="visibility:collapse" >
	   	<td><label>Last Name <span class="style40">*</span> </label></td>
		<td><input type="text" name="lname" id="lname" size="25" value="<? echo htmlentities($lname)?>" title="Last Name"/></td>
	   </tr>
	      
	   <tr id="password1tr" style="visibility:collapse" >
	   	<td><label>Password <span class="style40">*</span> </label></td>
		<td><input type="password" name="password1" size="15" id="password1" value="<? echo htmlentities($password1)?>" title="6 digit password" /></td>
	   </tr>
	   
	      
	   <tr id="password2tr" style="visibility:collapse" >
	   	<td><label>Retype password <span class="style40">*</span> </label></td>
		<td><input type="password" name="password2" size="15" id="password2" value="<? echo htmlentities($password2)?>" title="6 digit password"/></td>
	   </tr>
	   
	   <tr id="corpnametr" style="visibility:collapse" >
	   	<td><label>Corporation Name <span class="style40">*</span> </label></td>
		<td><input type="text" name="corpname" size="25" id="corpname" value="<? echo htmlentities($corpname)?>"  title="Corporation"/></td>
	   </tr>
	   
	   <tr id="industrytr" style="visibility:collapse" >
	   	<td><label>Industry</label></td>
		<td><input type="text" name="industry" size="25" id="industry" value="<? echo htmlentities($industry)?>"  title="Industry"/></td>
	   </tr>
	   
	   
	   <tr id="emailtr"  style="visibility:collapse">
	   	<td><label>Email <span class="style40">*</span></label></td>
		<td><input type="text" id="email" name="email" size="25" value="<? echo htmlentities($eemail)?>" title="Valid Email " /></td>
	   </tr>
	   
	   <tr id="phonetr"  style="visibility:collapse">
	   	<td><label>Phone<span class="style40">*</span></label></td>
		<td><input type="text" id="phone" name="phone" size="15" value="<? echo htmlentities($pphone)?>" title="in xxx-xxx-xxxx format"/>
		  &nbsp;</td>
	   </tr>
	   
	   <tr id="faxtr"  style="visibility:collapse">
	   	<td><label>Fax</label></td>
		<td><input type="text" id="fax" name="fax" size="15" value="<? echo htmlentities($fax)?>" title="in xxx-xxx-xxxx format"/></td>
	   </tr>
	   
	   <tr id="deptr"  style="visibility:collapse">
	   	<td><label>Department</label></td>
		<td><input type="text" id="dep" name="dep" size="25" value="<? echo htmlentities($dep)?>" title="Department"/></td>
	   </tr>
	   
	    <tr id="numemptr"  style="visibility:collapse">
	   	<td><label>Employees using our Service <span class="style40">*</span> </label></td>
		<td>
		<select name="num" id="num" title="Employees using service ">
		
		<?php 
			$t = array("","","","","","","","","","","","","");
			
			if($num == "select"){
				$t[0]="selected='selected'";
			}
			if($num == "01"){
				$t[1]="selected='selected'";
			}
			if($num == "02"){
				$t[2]="selected='selected'";
			}
			if($num == "03"){
				$t[3]="selected='selected'";
			}
			if($num == "04"){
				$t[4]="selected='selected'";
			}
			if($num == "05"){
				$t[5]="selected='selected'";
			}
			if($num == "06"){
				$t[6]="selected='selected'";
			}
			if($num == "07"){
				$t[7]="selected='selected'";
			}
			if($num == "08"){
				$t[8]="selected='selected'";
			}
			if($num == "09"){
				$t[9]="selected='selected'";
			}
			if($num == "10"){
				$t[10]="selected='selected'";
			}
			if($num == "More than 10"){
				$t[11]="selected='selected'";
			}
?>
		
		
		<option value="select" <? echo $t[0]?>>Select</option>
		<option value="01"<? echo $t[1]?>>01</option>
		<option value="02"<? echo $t[2]?>>02</option>
		<option value="03" <? echo $t[3]?>>03</option>
		<option value="04"<? echo $t[4]?>>04</option>
		<option value="05"<? echo $t[5]?>>05</option>
		<option value="06"<? echo $t[6]?>>06</option>
		<option value="07"<? echo $t[7]?>>07</option>
		<option value="08"<? echo $t[8]?>>08</option>
		<option value="09"<? echo $t[9]?>>09</option>
		<option value="10"<? echo $t[10]?>>10</option>
		<option value="More than 10"<? echo $t[11]?>>More than 10</option>
		</select></td>
	   </tr>
	   
	   
	   <tr id="addresstr" style="visibility:collapse">
	   	<td><label>Address <span class="style40">* </span></label></td>
		<td><input type="text" size="25" name="address" id="address"  value="<? echo htmlentities($aaddress)?>" title="Pick up address"/></td>
	   </tr>
	   <tr id="citytr" style="visibility:collapse">
	   <td><label>City <span class="style40">* </span></label></td>
	   <td><input type="text" id="city" name="city" size="15" value="<? echo htmlentities($ccity)?>" title="City"/></td>
	   </tr>
	   <tr id="ziptr"  style="visibility:collapse">
	   	<td><label>Zip Code <span class="style40">*</span></label></td>
		<td><input type="text" id="zip" name="zip" size="5"  value="<? echo htmlentities($zip)?>" title="Zip Code"/></td>
	   </tr>
	   <tr id="captchamessage" style="visibility:collapse;"><td colspan="2">
<label for='message'>Enter Code <span class="red style40">*</span></label></td></tr>
	   
	   <tr id="captcha" style="visibility:collapse"><td>
<img src="../captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' alt="#" ></td><td><input id="6_letters_code" name="6_letters_code" type="text" title="Captcha Code"></td></tr>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<tr id="refresh" style="visibility:collapse"><td><small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small></td>
<td>&nbsp;</td></tr>

	   <!--individual fields -->
	   <tr >
	   	 <td>&nbsp;</td>
	   	 <td>&nbsp;</td>
	   </tr>
	
	   <tr id="buttontr" style="visibility:collapse"><td>
	   <input type="submit" value="Register" style="background-color:#E93701; font-weight: bold; color:#FFFFFF;" name="submit" id="submit" onchange="hideShow()"/></td></tr>
	     <tr >
	   	 <td>&nbsp;</td>
	   	 <td>&nbsp;</td>
	   </tr>
	 </table>
	  </form>
	 </div>
	 
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
    <p>  &copy;2010 <script type="text/javascript">var date = new Date(); document.write(date.getFullYear());</script>| 
	<a href="../terms.php">Terms and conditions </a>| <a href="../reservation.php">reservation</a> &nbsp;| <a href="../index.php">Home</a>&nbsp;|&nbsp; <a href="../sitemap.php">Site map</a>&nbsp;|&nbsp;</p>
  </div>
</div>
</body>
</html>
