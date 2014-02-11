<?
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Point to point town car reservation</title>
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
<script language="javascript" src="validate.js" type="text/javascript"></script>
    <!--tabs-->
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
	<style type="text/css">
#toptabs{
width: auto;
background-color:#FF0000;
}

#toptabs{
color:#0099CC;
}
#tabs{
}

#bottomtabs{
}
</style>
<script>
$(function() {
	$("#toptabs" ).tabs({
	collapsible: false
	});
});


$(function() {
	$("#tabs" ).tabs({
	collapsible: false});
});

$(function() {
	$("#bottomtabs" ).tabs({
	collapsible: false});
});


 $(function() {
        $( "#datepicker" ).datepicker({
            showOn: "button",
            buttonImage: "../images/calendar.gif",
            buttonImageOnly: true
        });
    });
</script>

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
<div id="main1">

      <div class="man">Point to Point Reservation
        <div style="margin:10px 0px 0px 0px;">
		<div id="error" style="visibility:collapse">

		</div>
		<div>


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

	  </div>
	  </div>
<div id="holder">
<div>
<form name="airporttoairport" action="" method="post" class="gray">
<table width="147%" cellpadding="2">
		<tr><td colspan="5"><label class="man">3 Steps Quick Reservation</label></td></tr>
		<tr><td colspan="5">
		<div id="toptabs"><ul>
<li><a href="#toptabs">PICK UP INFORMATION</a></li></ul></td></tr>
		<tr>
				<td class="">Pick-up Date:</td>
				<td class="">Time</td>
				<td class="">Passengers:</td>

				<td class="">Luggage</td>
		</tr>
				<tr><td><div style="width:200px;"><input type="text" id="datepicker" value="" name="datepicker"/></div></td>
				<td><div style="width:200px;"><select id="hours" name="hours">
				<option selected="selected" value="0">HH</option>
				<option value="1">01</option>
				<option value="2">02</option>
				<option value="3">03</option>
				<option value="4">04</option>
				<option value="5">05</option>
				<option value="6">06</option>
				<option value="7">07</option>
				<option value="8">08</option>
				<option value="9">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>

				<select id="minutes" name="minutes">
				<option selected="selected" value="0">MM</option>
				<option value="0">00</option>
				<option value="1">01</option>
				<option value="2">02</option>
				<option value="3">03</option>
				<option value="4">04</option>
				<option value="5">05</option>
				<option value="6">06</option>
				<option value="7">07</option>
				<option value="8">08</option>
				<option value="9">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
				</select>

				<select id="ampm" name="ampm">
				<option value="AMPM">AM/PM</option>
				<option value="AM">AM</option>
				<option value="PM">PM</option>
				</select>
				</div>
				</td>
				<td><input type="text" name="passenger" id="passenger"  value="" size="6"/></td>

				<td><input type="text" size="4" name="luggage" id="luggage"/></td>
		</tr>
		<tr><td colspan="5"><label>PICK UP LOCATION</label></td></tr>
		<tr><td colspan="5"><div id="tabs">
<ul>
<li><a href="#tabs-1">Airport</a></li>
<li><a href="#tabs-2">Address</a></li>
</ul>
<div id="tabs-1">
<table>
<tr><td><label>Airport</label></td><td><label>Airline</label></td><td><label>Flight#</label></td></tr>
	<tr>
	<td>
	<select name="airports" id="airports">
		<option value="Select">Select</option>
		<option value="San Jose">San Jose</option>
		<option value="San Francisco">San Francisco </option>
	</select>
	</td>
	<td><input type="text" id="pickupairline"  name="pickupairline" size="20"/></td><td><input type="text" id="pickupflight"  name="pickupflight" size="20"/></td>
</tr>
</table>
</div>
<div id="tabs-2">
<table>
<tr><td><label>Address</label></td><td><label>City</label></td><td><label>Zip Code</label></td></tr>
<tr>
	<td><input type="text" name="pickupaddress" id="pickupaddress" size="25" /></td>
	<td><input type="text" name="pickupcity" id="pickupcity" size="25" /></td>
	<td><input type="text" name="pickupzip" id="pickupzip" size="5" /></td>
</tr>
</table>
</div></div></td></tr>

<!--start Passenger Information-->

<table>

		<tr>
			<td colspan="5"><label>PASSENGER INFORMATION</label></td>
		</tr>
		
		<tr>
			<td><label>First Name</label></td>
			<td><label>Last Name</label></td>
			<td><label>Phone</label></td>
			<td><label>Email</label></td></tr>
			<tr><td><input type="text" name="fname" id="fname" size="15" /></td>
			<td><input type="text" name="lname" id="lname" size="15" /></td>
			<td><input type="text" name="phone" id="phone" size="10" /></td>
			<td><input type="text" name="email" id="email"  /></td>
		</tr>

		<tr>
			<td colspan="5">&nbsp;</td>
		</tr>

		<tr>
		</tr>
</table>


</table>
</form>

</div>
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
