// JavaScript Document
// JavaScript Document
//Author Manzoor Ahmed
//@copy 2011
function hideshow()
{
		var yes = document.getElementById("first");
		var m = document.getElementById("m");
		var first = document.getElementById("firstt");

		//all elements for regular address
		var pickadd = document.getElementById("pickadd");
		var piccity = document.getElementById("pickcity");
		var pickzip = document.getElementById("pickzip");

		//all elements for airports
		var pickair = document.getElementById("pickair");
		var pickflight = document.getElementById("pickflight");
		var pickairline = document.getElementById("pickairline");
		var pickcode = document.getElementById("pickcode");
		var pickmeet = document.getElementById("pickmeet");


		//hide airport information
		
		if(yes.checked == false)
		{
			//show regular address information
			pickadd.style.visibility='visible';
			pickcity.style.visibility='visible';
			pickzip.style.visibility='visible';
			m.innerHTML="Pick up Address Information";
			first.innerHTML="airport pick up?";
			first.style.color='black';
			

			//hide airport information
			pickair.style.visibility='collapse';
			pickflight.style.visibility='collapse';
			pickairline.style.visibility='collapse';
			pickcode.style.visibility='collapse';
			pickmeet.style.visibility='collapse';
		}
		//if first yes is  checked
		if(yes.checked == true)
		{
			//hide regular address information
			pickadd.style.visibility='collapse';
			pickcity.style.visibility='collapse';
			pickzip.style.visibility='collapse';

			//show airport information

			pickair.style.visibility='visible';
			pickflight.style.visibility='visible';
			pickairline.style.visibility='visible';
			pickcode.style.visibility='visible';
			pickmeet.style.visibility='visible';
			
			m.innerHTML="Airport pick up Information";
			first.innerHTML="Airport pick up";
			first.style.color='green';
			
		}
}

function hideshow1()
{
		var yes1 = document.getElementById("secondd");
		var m2 = document.getElementById("m2");
		var second = document.getElementById("second");
		//all elements for regular address
		var pickadd1 = document.getElementById("pickadd1");
		var piccity1 = document.getElementById("pickcity1");
		var pickzip1 = document.getElementById("pickzip1");

		//all elements for airports
		var pickair1 = document.getElementById("pickair1");
		var pickflight1 = document.getElementById("pickflight1");
		var pickairline1 = document.getElementById("pickairline1");
		var pickcode1 = document.getElementById("pickcode1");
		var pickmeet1 = document.getElementById("pickmeet1");


		//hide airport information
		if(yes1.checked == false)
		{

			//show regular address information
			pickadd1.style.visibility='visible';
			pickcity1.style.visibility='visible';
			pickzip1.style.visibility='visible';
			m2.innerHTML="Drop off Address Information";
			second.innerHTML="Airport drop off?";
			second.style.color='black';

			//hide airport information
			pickair1.style.visibility='collapse';
			pickflight1.style.visibility='collapse';
			pickairline1.style.visibility='collapse';
			pickcode1.style.visibility='collapse';
			pickmeet1.style.visibility='collapse';
		}
		//if first yes is  checked
		if(yes1.checked == true)
		{
			//hide regular address information
			pickadd1.style.visibility='collapse';
			pickcity1.style.visibility='collapse';
			pickzip1.style.visibility='collapse';

			//show airport information

			pickair1.style.visibility='visible';
			pickflight1.style.visibility='visible';
			pickairline1.style.visibility='visible';
			pickcode1.style.visibility='visible';
			pickmeet1.style.visibility='visible';
			
			m2.innerHTML="Airport drop ff Information";
			second.innerHTML="Airport drop off";
			second.style.color='green';
		}
}