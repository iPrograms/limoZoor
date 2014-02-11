
/********************************************************************/
//This script runservation.php
//Author: Manzoor Ahmed 
//Date October,12,2011
//All rights reserved
//Code owned by Limozoor.com
/*************************************************************/

/*When the first 'yes' checkbox is selected*/
function hideshow()
{
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
/*When the second 'yes' checkbox is selected*/
function showdrop2()
{
	var dropyes = document.getElementById('dropyes');
	
	var dropaddresstr = document.getElementById('dropaddresstr');
	var dropcitytr = document.getElementById('dropcitytr');
	var dropzipcodetr = document.getElementById('dropzipcodetr');
	//var helppicktr = document.getElementById('helppicktr');
	var dropairporttr = document.getElementById('dropairporttr');
	var dropterminal = document.getElementById('dropterminal');
	var dropairlinename1 = document.getElementById('dropairlinename1');
	
	//not checked
	if(dropyes.checked == false)
	{		
			dropaddresstr.style.visibility ='visible';
			dropcitytr.style.visibility ='visible';
			dropzipcodetr.style.visibility='visible';
			
			dropterminal.style.visibility ='collapse';
			dropairporttr.style.visibility ='collapse';	
			dropairlinename1.style.visibility='collapse';
			//helppicktr.style.visibility ='collapse';
	}
	//if second checkbox is checked
	if(dropyes.checked == true)
	{	
			dropairporttr.style.visibility ='visible';
			dropairlinename1.style.visibility='visible';
			dropterminal.style.visibility ='visible';
			
			dropaddresstr.style.visibility ='collapse';
			dropcitytr.style.visibility ='collapse';
			dropzipcodetr.style.visibility='collapse';
	}
}
////////////////////////////////No Bugs above///////////////////////////////

function  validinput(){
var myform = document.myform;
	var title = document.myform.title.value;
    var lastname = document.myform.lastname.value;
    var firstname = document.myform.firstname.value;
	var email = document.myform.email.value;
	var phone = document.myform.phone.value;
	var cartype = document.getElementById('cartype').value;
	var numpass =document.getElementById('passangers').value;
	var passanggers =document.getElementById('passangers').value;
	var pickupmonth = document.getElementById('pickupmonth').value;
	var pickupday = document.getElementById('pickupday').value;	
	//var year = document.getElementById('year').value;//do we really need to validate the year?	
	var hour = document.getElementById('hour').value;
	var minute = document.getElementById('minute').value;
	var amorpm = document.getElementById('amorpm').value;
	var yes = document.getElementById('yes');
	var pickaddress = document.getElementById('pickaddress').value;
	var pickcity = document.getElementById('pickcity').value;
	var pickzip = document.getElementById('pickzip').value;
	var pickairport = document.getElementById('pickairport').value;
	var pickflight = document.getElementById('pickflight').value;
	var pickairline = document.getElementById('pickairline').value;
	var dropyes = document.getElementById('dropyes');
	var dropaddress = document.getElementById('dropaddress').value;
	var dropcity = document.getElementById('dropcity').value;
	var dropzip = document.getElementById('dropzip').value;
	var dropairport = document.getElementById('dropairport').value;
	var helppicktr = document.getElementById('helppicktr').value;
	var payment = document.getElementById('payment').value;
	var comments = document.getElementById('comments').value;
	var domestic = document.getElementById('domestic');
	var luggagehelp = document.getElementById('luggagehelp');
	var International = document.getElementById('International');
	var dropdomestic = document.getElementById('dropdomestic');
	var dropinternational = document.getElementById('dropinternational');
	var terms = document.getElementById('terms');
	var dropmehere = document.getElementById('dropmehere').value;
	
	var err = document.getElementById('errors');
	
	errorMessage ="\\n\n\n###**FORM UNDER CONSTRUCTION!!!! PLEASE CALL US FOR RESERVATION ####\n\n";
	var ck_name = /^[A-Za-z ]{3,20}$/;
	var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	
	var ck_phone =/^\d{3}-\d{3}-\d{4}$/;
	var ck_zip =/^\d{5}$/;
	
	if(title == 'Title')
	{
		errorMessage+='* Please select TITLE\n';
		
		///FLAG(a);
	}
	
	if(title != 'Title')
	{
		//OK(a);
	}
	
	if(!ck_name.test(firstname))
	{
			errorMessage+='* Invalid FIRST NAME\n';
			//FLAG(b);
	}
	
	if(!ck_name.test(lastname))
	{
			errorMessage+='* Invalid LAST NAME\n';
			//FLAG(c);
	}
	

	if(!ck_email.test(email))
	{
		errorMessage+= '* Invalid EMAIL address\n';
	}
	if(!ck_phone.test(phone))
	{
		errorMessage+='* Invalid PHONE number\n';
	}
	if(cartype =='car')
	{
		errorMessage+='* Please select CAR TYPE\n';
	}
	if(numpass =='--')
	{
		errorMessage+= '* Please select NUMBER OF PASSANGERS\n';
	}
	if(pickupmonth == 'Month')
	{
		errorMessage+= '* Please select PICK UP MONTH\n';
	}
	if(pickupday == 'Day')
	{
		errorMessage+='* Please Select DAY\n';
	}
	if(hour =='Hour')
	{
		errorMessage+='* Please select HOUR\n';
	}
	if(minute == 'Minute')
	{
		errorMessage+='* Please select MINUTE\n';
	}
	if(amorpm =='AM/PM')
	{
		errorMessage+='* Please select AM or PM\n';
	}
	//if the first check box is not checked
	if(yes.checked == false)
	{
		if(pickaddress.length<=0)
		{
			errorMessage+= '* Please enter  PICK UP ADDRESS\n';
		}
		if(pickcity.length<=0)
		{
			errorMessage+= '* Please enter  PICK UP CITY\n';
		}
		if(pickzip.length<=0)
		{
			errorMessage+= '* Please enter PICK UP ZIP\n';
		}
		
		if(!ck_zip.test(pickzip))
		{
			errorMessage+= '* PICK UP ZIP must be 5 digits\n';
		}
	}
	//yes box is checked
	if(yes.checked == true)
	{
		if(pickairport =='airport')
		{
			errorMessage+='* Please select PICK UP AIRPORT\n';
		}
		if(domestic.checked == true && International.checked == true)
		{
			errorMessage+='* Please select ONLY ONE  TERMINAL\n';
		}
		if(domestic.checked == false && International.checked == false)
		{
			errorMessage+='* Please select PICK UP TERMINAL\n';
		}
	}
	
	if(dropyes.checked == false)
	{
		if(dropaddress.length<=0)
		{
			errorMessage+='* Please enter DROP OFF ADDRESS\n';
		}
		if(dropcity.length<=0)
		{
			errorMessage+='* Please enter DROP OFF CITY\n';
		}
		if(dropzip.length<=0)
		{
			errorMessage+='* Please enter DROP OFF ZIP CODE\n';
		}
		if(!ck_zip.test(dropzip))
		{
			errorMessage+='* DROP OFF ZIP CODE must be 5 digits\n';
		}
	}
	//second 
	if(dropyes.checked == true)
	{
		if(dropairport =='airport2')
		{
			errorMessage+='* Please select DROP OFF AIRPORT name\n';
		}
		if(dropinternational.checked == true && dropdomestic.checked == true)
		{
			errorMessage+= '* Please select ONLY ONE drop off terminal\n';
			
		}
		
		if(dropinternational.checked == false && dropdomestic.checked == false)
		{
			errorMessage+='* Please select DROP OFF TERMINAL\n';
		}
		
		if(dropmehere.length<=0){
			errorMessage+='* Invalid DROP off AIRLINE name\n';
		}
	}
	
	if(payment =='payment2')
	{
		errorMessage+='* Please select payment type\n';
	}
	
	if(terms.checked == false)
	{
		errorMessage+= '* Please check TERMS and CONDITION\n';
	}

	if(errorMessage != "")
	{
		var instruction = '****Please correct the following error(s)\n';
		
		//var err = document.getElementById('errors');
		//err.style.visibility='visible';
		//err.innerHTML=errorMessage;
		
		var line = '*============================================================================================*\n';
		alert(instruction + line+ errorMessage +line);
		return false;
	}

}