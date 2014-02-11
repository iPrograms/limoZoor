
/***
@Auth  Manzoor Ahmed 
@Date 12/25/12
@Version 1.0
*/


function hideShow(){

var corp = document.getElementById('corp'); //select corp

var corpaccnametr = document.getElementById('corpaccnametr');//corporation empty tr

var fnametr = document.getElementById('fnametr');   //option ind
var fname =  document.getElementById('fname');//corporation 

var lnametr = document.getElementById('lnametr'); //corporation v
var lname =  document.getElementById('lname');//corporation 

var password1tr = document.getElementById('password1tr');
var password2tr = document.getElementById('password2tr');

var corpnametr = document.getElementById('corpnametr');
var corpname = document.getElementById('corpname');//corporation 

var industrytr = document.getElementById('industrytr');

var emailtr = document.getElementById('emailtr'); //select corp
var email = document.getElementById('email'); //select corp

var phonetr = document.getElementById('phonetr'); //select corp
var phone = document.getElementById('phone'); //select corp

var faxtr = document.getElementById('faxtr'); //select faxtr
var fax = document.getElementById('fax'); //select fax

var deptr = document.getElementById('deptr'); //select deptr
var dep = document.getElementById('dep');  //department

var numemptr  =document.getElementById('numemptr');
var num = document.getElementById('num');

var addresstr =  document.getElementById('addresstr');
var address =  document.getElementById('address');

var citytr = document.getElementById('citytr');
var city =  document.getElementById('city');

var ziptr =  document.getElementById('ziptr');
var zip =  document.getElementById('zip');

var message = document.getElementById('captchamessage');
var captchatr = document.getElementById('captcha');
var refreshcap = document.getElementById('refresh');

var buttontr = document.getElementById('buttontr');
	
	if(corp.value=="corp")//if corp selected
	{
		corpaccnametr.style.visibility='visible';
		fnametr.style.visibility='visible';
		lnametr.style.visibility='visible';
		corpnametr.style.visibility='visible';
		emailtr.style.visibility='visible';
		phonetr.style.visibility='visible';
		faxtr.style.visibility='visible';
		deptr.style.visibility='visible';
		numemptr.style.visibility='visible';
		addresstr.style.visibility='visible';
		citytr.style.visibility='visible';
		ziptr.style.visibility='visible';
		buttontr.style.visibility='visible';
		message.style.visibility='visible';
		captchatr.style.visibility='visible';
		refreshcap.style.visibility='visible';
		password1tr.style.visibility='visible';
		password2tr.style.visibility='visible';
		industrytr.style.visibility='visible';	
	}
	//if indv selected
	if(corp.value=="ind"){
		
		//hide
		corpaccnametr.style.visibility='collapse';
		deptr.style.visibility='collapse'; 
		numemptr.style.visibility='collapse';
		corpnametr.style.visibility='collapse';
		industrytr.style.visibility='collapse';
		
		//show
		fnametr.style.visibility='visible';
		lnametr.style.visibility='visible';
		emailtr.style.visibility='visible';
		phonetr.style.visibility='visible';
		faxtr.style.visibility='visible';
		addresstr.style.visibility='visible';
		citytr.style.visibility='visible';
		ziptr.style.visibility='visible';
		buttontr.style.visibility='visible';
		message.style.visibility='visible';
		captchatr.style.visibility='visible';
		refreshcap.style.visibility='visible';
		password1tr.style.visibility='visible';
		password2tr.style.visibility='visible';
		
	}
	
	if(corp.value=="none"){
		
		corpaccnametr.style.visibility='collapse';
		fnametr.style.visibility='collapse';
		lnametr.style.visibility='collapse';
		corpnametr.style.visibility='collapse';
		emailtr.style.visibility='collapse';
		phonetr.style.visibility='collapse';
		faxtr.style.visibility='collapse';
		deptr.style.visibility='collapse';
		numemptr.style.visibility='collapse';
		addresstr.style.visibility='collapse';
		citytr.style.visibility='collapse';
		ziptr.style.visibility='collapse';
		buttontr.style.visibility='collapse';
		
		buttontr.style.visibility='collapse';
		
		message.style.visibility='collapse';
		captchatr.style.visibility='collapse';
		refreshcap.style.visibility='collapse';
		password1tr.style.visibility='collapse';
		password2tr.style.visibility='collapse';
		industrytr.style.visibility='collapse';
	}
}