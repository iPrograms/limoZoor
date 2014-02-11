// JavaScript Document
/********************************************************************/
//This script used in homepage.php
//Author: Manzoor Ahmed 
//Date Jan,06,2013
//All rights reserved
//
/*************************************************************/

function validate()
{
		var airpick = document.getElementById('airpick');
		var airdrop = document.getElementById('airdrop');

	    var datepicker  = document.getElementById('datepicker');
	    var hour = document.getElementById('hour');
		var minute = document.getElementById('minute');
		var ampm = document.getElementById('ampm');

		var passangers = document.getElementById('passangers');
		var luggage = document.getElementById('luggage');
		var pickupairportnames = document.getElementById('pickupairportnames');
		
		var pickupairlines = document.getElementById('pickupairlines');
		var pickupflights = document.getElementById('pickupflights');
		var pickupterminal = document.getElementById('pickupterminal');
		var pickupaddress  = document.getElementById('pickupaddress');
		var pickupcity = document.getElementById('pickupcity');
		var pickupzip  = document.getElementById('pickupzip');
		
		var dropaddress = document.getElementById('dropaddress');
		var dropcity  = document.getElementById('dropcity');
		var dropzipcode = document.getElementById('dropzipcode');
		
		var cars  = document.getElementById('cars');
		var payment = document.getElementById('payment');
		var comment  = document.getElementById('comment');
		var error ="";
		
		if(airpick.checked == true)
		{		
			if(datepicker.value== ""){
				error+="Please provide pick up date\n";
				
			}
			if(hour.value == ""){
				error+="Please select hour\n";
			}
			if(minute.value == ""){
				error+="Please select minute\n";
			}
			if(ampm.value == ""){
				error+="Please select AM or PM\n";
			}
			alert (error);
			airpick.checked=true;
		}
		
		if(airdrop.checked == true)
		{
			alert("address pickup");
			
		}
}


