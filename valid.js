// JavaScript Document

function validateForm(){

var title = document.getElementById('title').value;
var firstname = document.getElementById('firstname').value;
var lastname = document.getElementById('lastname').value;
var phone = document.getElementById('phone').value;
var faxnumber = document.getElementById('faxnumber').value;
var companyname = document.getElementById('companyname').value;
var cartype = document.getElementById('cartype').value;
var passanggers =document.getElementById('passangers').value;
var pickupmonth = document.getElementById('pickupmonth').value;
var pickupday = document.getElementById('pickupday').value;	
var hour = document.getElementById('hour').value;
var minute = document.getElementById('minute').value;
var amorpm = document.getElementById('amorpm').value;

}































function hideShow(){
var yes = document.getElementById("yes");
		//regular address
		var picktr = document.getElementById('picktr');
	    var citytr = document.getElementById("citytr");
	    var zipcodetr = document.getElementById("zipcodetr");
		//airport address
		var airporttr = document.getElementById("airporttr");
		var flighttr = document.getElementById("flighttr");
		var airlinetr = document.getElementById("airlinetr");
		var domeorint = document.getElementById('domeorint');
		var helppicktr = document.getElementById('helppicktr');
		//if not checked	
		if(yes.checked == false)
		{		
			picktr.style.visibility ='visible';
			citytr.style.visibility ='visible';
			zipcodetr.style.visibility='visible';
			
			domeorint.style.visibility ='collapse';
			airporttr.style.visibility ='collapse';	
			flighttr.style.visibility ='collapse';	
			airlinetr.style.visibility ='collapse';	
			helppicktr.style.visibility ='collapse';
		}
		//if first yes is  checked
		if(yes.checked == true)
		{
			picktr.style.visibility ='collapse';
			citytr.style.visibility ='collapse';
			zipcodetr.style.visibility='collapse';
			
			domeorint.style.visibility ='visible';
			airporttr.style.visibility ='visible';	
			flighttr.style.visibility ='visible';	
			airlinetr.style.visibility ='visible';	
			helppicktr.style.visibility ='visible';//here
		}
}