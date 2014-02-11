<?php 
session_start();
if(!isset($_SESSION['lname'])){
         header("Location: ../login/signin.php");
		 exit();
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $_SESSION['lname'];?>, <?php echo  $_SESSION['fname'];?> Limozoor Home Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="small, corporation" />
	<meta name="Author" content="Manzoor A" />
</head>

<body>
	<div id="content">
		<div id="header">
		</div>
		
		<div  id="errors"><hr / size="1" color="#006699"></div>
		
		<div id="main1">
		<div id="tab-0">
			<table width="100%" class="table table-hover">
			
			<tr class="info">
			<td width="8%"><img src="icons/user.png" class="img-circle" />
			  <td width="19%"><span style="color:#11878D; size:13px;"><? echo strtoupper($_SESSION['lname']); ?>, <? echo strtoupper($_SESSION['fname']); ?></span>
		 
			  
			  <td width="22%"><img src="icons/date.png"/> <span  style="color:#11878D; size:13px;"><?php echo "01/06/1213"; ?></span></td>
			
			  <td width="19%">
				
				<?php 
					if(strcasecmp($_SESSION['type'],'individual')==0){
				 	echo "<img src='icons/company.png'/>";
				 	echo "<span style='color:#11878D; size:13px;'>&nbsp;&nbsp;Individual</span></td>";
				}else{
				 	echo "<img src='icons/'";
				 	echo "</br><span style='color:#11878D; size:13px;'>Corporation</span>";
				}
				?>
			  <td></td>
			<td width="16%"><img src="icons/Log-Out-icon.png" align="absbottom"  />&nbsp;&nbsp;&nbsp;<a href="logout.php">Log Out</a></td>
			
			</tr>
			
			
			<tr class="info">
				<td width="8%"><img src='icons/address.png'/></td>
				<td width="19%">
					 <span style="color:#11878D; size:13px;"><?php echo strtoupper($_SESSION['address']);?></span></br>
					 <span style="color:#11878D; size:13px;"><?php	echo strtoupper($_SESSION['city']);?></span></br>
					 <span style="color:#11878D; size:13px;"><?php	echo $_SESSION['zip'];?></span>
		      </td>
				
				<td width="22%">
					<img src='icons/iPhone-retro-black-icon.png'/><span style="color:#11878D; size:13px;">	<?php
					echo $_SESSION['phone'];
					?>	</span>		</td>
				
				
				
			  <td width="19%"><img src='icons/mail-icon.png'/><span style="color:#11878D; size:13px;"><?php echo $_SESSION['email'];
					?></span></td>
				
			  <td width="16%">&nbsp;</td>
			  <td width="16%">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6">
					<?php	
include_once("dbc.php");
$dbc = mysqli_connect(HOST,NAME,PASSWORD,DATABASE) or die('Error can not connect to database');
$e ='';
?>

				</td>
			</tr>
		  </table> 
			<div>

</div>
		  </div>
			<div style="width:auto">
			<!--validate input-->
			
			<!--End validate input-->
			</div>	
			<!--J-->
			
			<div id="tabs">
<ul>
<li><a href="#tabs-1"><img src="icons/Airplane-icon.png" width="24" height="24" />&nbsp;&nbsp;Airport Reservation</a></li>
<li><a href="#tabs-2"><img src="icons/Trash-Arrows-Empty-icon.png" />&nbsp;&nbsp;Point to Point </a></li>
<li><a href="#tabs-3"><img src="icons/Actions-chronometer-icon.png" />&nbsp;&nbsp;Reservation Status</a></li>
<li><a href="#tabs-4"><img src="icons/Actions-document-close-icon.png" width="24" height="24" />&nbsp;&nbsp;Cancel Reservation</a></li>
<li><a href="#tabs-5"><img src="icons/Files-Edit-file-icon.png" />&nbsp;&nbsp;Edit Profile</a></li>
<li><a href="#tabs-6"><img src="icons/Status-dialog-password-icon.png" width="24" height="24" />&nbsp;&nbsp;Reset Password</a></li>
<li><a href="#tabs-7"><img src="icons/table-tab-search-icon.png" width="24" height="24" />&nbsp; My Reservations</a></li>
<li><a href="#tabs-8"><img src="icons/Document-Copy-icon.png" width="24" height="24" />&nbsp;&nbsp;Print Receipts</a></li>
<li><a href="#tabs-9"><img src="icons/smallcontact.png" width="24" height="24" />&nbsp;&nbsp;Contact Us</a></li>

</ul>
<div id="tabs-1">
<h4>QUICK AIRPORT RESERVATION &nbsp;&nbsp;&nbsp;&nbsp; <img src="icons/Travel-Airplane-icon.png" width="128" height="128"  align="absbottom"/></h4>
<p><em>The fastest limo reservation system in the market </em></p>
<hr /></br>
<!--start form-->

<form name="airport-reservation" action="successful.php">

<table width="100%">
	<tr id ="f0">
	<td colspan="2">Service Type</td>
	</tr>
	<tr id="f1">
		<td colspan="2" class=""><label id="one">Airport Pick Up </label>
		
		  <input type="checkbox" value="Airport" id="airpick" name="airpick" onchange="myhideShow()" <?php if(isset($_POST['airpick'])){echo 'selected="selected"';}?>/> &nbsp;&nbsp;<label id="two">Airport Drop Off</label>
		  <input type="checkbox" value="Airport Drop" id="airdrop" name ="airdrop"onchange="myhideShow()"/></td>
	</tr>
		<tr><td colspan="2" id="dateempty">&nbsp;</td></tr>
		<tr><td colspan="2" class="ui-state-highlight" id="datelabel"><label>PICK UP DATE/TIME</label></td></tr>
		<tr id="f18"><td><label>Date <span class="style1">* </span></label></td><td><label>Time<span class="style1"> * </span></label></td></tr>
	<tr id="datedata">
		<td><input type="text" id="datepicker" size="27" /></td>
		<td><select name="hour">
				<option value=""   selected='selected'>Hour</option>
				<option value="01" >01</option>
                <option value="02" >02</option>
                <option value="03" >03</option>
                <option value="04" >04</option>
                <option value="05" >05</option>
                <option value="06" >06</option>
                <option value="07" >07</option>
                <option value="08" >08</option>
                <option value="09" >09</option>
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
</select>
<select name ="minute">								
                <option value=""   selected='selected'>Minute</option>
                <option value="00" >00</option>
                <option value="05" >05</option>
                <option value="10" >10</option>
                <option value="15" >15</option>
                <option value="20" >20</option>
                <option value="25" >25</option>
                <option value="30" >30</option>
                <option value="35" >35</option>
                <option value="40" >40</option>
                <option value="45" >45</option>
                <option value="50" >50</option>
                <option value="55" >55</option>
          </select>
		  
		  <select name="ampm" >
				                <option value="" selected='selected'>AM/PM</option>
                <option value="AM" >AM</option>
                <option value="PM" >PM</option>
              </select></td>
	</tr>
	<tr id="f19">	
		<td><label>Passengers <span class="style1">* </span></label></td>
		<td><label>Laguage <span class="style1">* </span></label></td>
	</tr>
	<tr id="f20">
	<td>
		<select name="passangers">

				<option value="" selected='selected'>Select</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>
<option value="9" >9</option>
<option value="10" >10</option>
</select></td>
<td><select name="laguage">

				<option value="" selected='selected'>Select</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="more than 5">More than 5</option>
</select></td>
	</tr>
	<tr class="airportpick" id="f2"><td colspan="2">&nbsp;</td></tr>	
	<tr id="pickupinformation">
	 <td colspan="2" class="ui-state-highlight"><label>PICK UP INFORMATION</label></td>
	</tr>
	<tr class="airportpick" id="f3"><td>Airport <span class="style1">*</span></td>
	<td>Airline Name<span class="style1"> *</span> </td>
	</tr>
	<tr class="airportpick" id="f4">
	<td>
	<select name="pickupairportnames" data-native-menu="false" class="search-query">
		<option value="">Select</option>
		<option  value="OAK">Oakland International Airport</option>
		<option  value="SFO">San Francisco International Airport</option>
		<option  value="SJC">San Jose International Airport</option>
		<option  value="SJCTR">San Jose Jet center</option>
	</select>	</td>
	<td>
		<input type="text" id="pickupairline" name="pickupairline" size="20" value="" class="input-medium search-query"/>	</td>
	</tr>
	<tr class="airportpick" id="f5"><td><label>Flight #</label></td><td><label>Terminal/Gate</label></td></tr>
	<tr class="airportpick" id="f6">
		<td>
		  <input type="text" id="pickupflight" name="pickupflight" size="27" class="input-medium search-query"/></td>
		<td><input type="text" id="pickupterminal" name="pickupterminal" size="20" class="input-medium search-query"/></td>
	</tr>
	
	<tr><td colspan="2" id="empty">&nbsp;</td></tr>
	<tr>
	
		<td colspan="2" class="ui-state-highlight" id="dropoffinformation"><label>DROP OFF INFORMATION</label></td>
	</tr>
	<tr class="addresspick" id="f7">
		<td><lable>
		 Address</label> <span class="style1">*</span> </td>
		<td><label>City/Town <span class="style1">* </span></label></td> 
	</tr>
	<tr class="addresspick" id="f8">
	<td><input type="text" name="pickupaddress" id="pickupaddress" size="27" value=""/></td>
	<td><input type="text" name="pickupcity" id="pickupcity" size="20" value=""/></td>
	</tr>
	<tr class="addresspick" id="f9">
		<td><label>Zip Code <span class="style1">* </span></label></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="addresspick" id="f10">
		<td><input type="text" name="pickupzip" id="pickupzip" size="5" value=""/></td>
		<td>&nbsp;</td>
	</tr>
	<tr class ="airportpick" id="f11"><td colspan="2">&nbsp;</td></tr>
	
	<tr class="dropaddress" id="f12">
		<td colspan="2" class="ui-state-highlight">DROP AIRPORT INFORMATION </td>
	</tr>
	<tr class="airdrop" id="f13"><td><label>Airport <span class="style1">* </span></label></td>
	<td><select name="airports" id="airports">
<option value="" selected='selected'>Select</option>
<option value="San Jose Int" >San Jose Int</option>
<option value="San Francisco Int" >San Francisco</option>
<option value="Oakland Int">Oakland</option>
</select>	</td></tr>
	<tr class="addressdrop" id="f14">
		<td><label>Address <span class="style1">*</span> </label></td>
		<td><label>City/Town <span class="style1">* </span></label></td>
	</tr>
	<tr class="addressdrop" id="f15">
	  <td><input type="text" name="dropaddress" id="dropaddress" value="" size="27"/></td>
	  <td><input type="text" name="dropcity" id="dropcity" value="" size="20" /></td>
	</tr>
	
	<tr class="addressdrop" id="f16">
		<td><label>Zip Code <span class="style1">*</span> </label></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="addressdrop" id="f17">
		<td><input type="text" name="dropzipcode" id="dropzipcode" size="5" /></td>
		<td>&nbsp;</td>
	</tr> 
	<tr id="vehiclelabel">
	 <td colspan="2" class="ui-state-highlight"><label>VEHICALE / PAYMENT INFORMATION </label></td>
	</tr>
	<tr id="vehicle"><td ><label>Vehicle <span class="style1">* </span></label></td>
	<td><label>Payment <span class="style1">* </span></label></td>
	</tr>
	<tr id="vehicleinformation"><td><select name="cars">
<option selected="selected" value="">Select</option>
<option value="Town Car">Town Car</option>
<option value="Stretch Limo">Stretch Limo</option>
<option value="SUV">SUV</option>
</select><td><select name="payment">
	<option value="">Select</option>
	<option value="Cash" >Cash</option>
	<option value="Credi/Visa">Credit/Visa</option>
</select>
</tr>
<tr><td colspan="2" class="ui-state-highlight" id="commentlabel"><label>COMMENTS/NOTES</label></td></tr>
<tr>
  <td colspan="2"><textarea name="comment" id="comment" rows="4" cols="100"></textarea></td>
</tr>
<tr id="btn"><td>&nbsp;</td><td align="right"><input type="submit" name="submit" value="Submit"  id="submit"class="btn btn-large btn-success" onclick="validate(this)"/></td></tr>

	
	<!--drop off information start-->
</table>
</form>

<!--end form-->


</div>
<div id="tabs-2">
<h2>Point to Point Reservation &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.rockettheme.com"><img src="icons/point_to_point.png" width="128" height="128" /></a> </h2>
<table width="100%">
	<tr><td colspan="3"><label>Pick up information</label></td></tr>
	<tr><td width="30%"><label>Address</label></td><td width="28%"><label>City</label></td><td width="42%"><label>Zip code</label></td></tr>
	<tr><td><input type="text" size="30"/></td><td><input type="text" size="15"/></td><td><input type="text" size="5"/></td></tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr><td colspan="3"><label>Drop off information</label></td></tr>
	
	<tr><td width="30%"><label>Address</label></td><td width="28%"><label>City</label></td><td width="42%"><label>Zip code</label></td></tr>
	<tr><td><input type="text" size="30"/></td><td><input type="text" size="15"/></td><td><input type="text" size="5"/></td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Reserve" class="btn btn-large btn-success"/></td></tr>
	<tr><td></td><td></td></tr>
</table>
</div>
<div id="tabs-3">
<h2>My Reservation Status  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/Status-mail-task-icon.png" /></h2>

<table width="100%">
<td colspan="2">&nbsp;</td>
<tr>
	<td><label>Please provide reservation code * </label></td>
	<td><input type="text" name="statusreservation" id="statusreservation" value =""/></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="statusreservationbtn" id="statusreservationbtn" value="Check Status" class="btn btn-warning"/></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
</table>
</div>
<div id="tabs-4">
<h2>Cancel My Reservation &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/delete-icon.png" width="128" height="128" /></h2>

<table width="100%">
<td colspan="2">&nbsp;</td>
<tr>
	<td><label>Reservation Code * </label></td>
	<td><input type="text" name="cancelreservation" id="cancelreservation" value =""/></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="cancelreservationbtn" id="cancelreservationbtn" value="Cancel Reservation" class="btn btn-warning"/></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
</table>
</div>

<div id="tabs-5">
<h2>Edit Profile  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/Action-edit-icon.png" width="128" height="128" /></h2>
</div>
<div id="tabs-6">
<h2>Reset Account Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/App-password-icon.png" /></h2>

<table width="100%">
	<tr>
		<td><label>Current Password * </label></td>
		<td><input type="text" name="oldpass" id="oldpass"/></td>
	</tr>
	<tr>
		<td><label>New Password * </label></td>
		<td><input type="password" name="password1" id="password1"/></td>
	</tr>
	<tr>
		<td><label>Retype new Password * </label></td>
		<td><input type="password" name="password2" id="password2"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="changepassword" id="changepassword" value="Update Password" class="btn btn-warning"/></td>
	</tr>
	
</table>
</div>

<div id="tabs-7">
<h2>My Reservations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img src="icons/Mimetype-vcalendar-icon.png" /></h2>
</div>

<div id="tabs-8">
<h2>My Receipts&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img src="icons/document-icon.png" width="128" height="128" /></h2>
</div>

<div id="tabs-9">
<h2>Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img src="icons/contact.png" width="128" height="128" /></h2>

<table width="100%">
  <td colspan="2"><label></label></td>
<tr><td>&nbsp;</td><td><label>Message</label></td></tr>
<tr>
	<td width="42%"><label></label></td>
	<td width="58%"><textarea cols="50" rows="5"></textarea></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="message" id="message" value="Send Message" class="btn btn-warning"/></td>
</tr>
<tr>
	<td colspan="2">&nbsp;</td>
</tr>
</table>
</div>

</div>
			
			<!--End-->
		</div>
		
	    <div id="line">
		<label style="color:#FF0000">Message from LimoZoor : </label>
		</div>
		
		
		<div id="footer">
			<ul id="fr" class="links">
				<li><a href="rss-articles/" title="RSS Articles">RSS Articles</a></li>
				<li><a href="rss-pages/" title="RSS Pages">RSS Pages</a></li>
				<li><a href="rss-comments/" title="RSS Comments">RSS Comments</a></li>
			</ul>
			<div id="fl">
				<p class="links"><a href="#">Home</a><a href="#">About</a><a href="#">Archive</a><a href="#">Sitemap</a></p>
				<p>&nbsp;</p>
		  </div>
		</div>	
	</div>
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
 	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
	<!--<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>-->

	<!--
	<link rel="stylesheet" href="../jquery-ui-1.10.2.custom/development-bundle/themes/custom-theme/jquery-ui.css"/>-->
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="validate.js"></script>
	<script src="jq/hideshow.js"></script>
</body>
</html>