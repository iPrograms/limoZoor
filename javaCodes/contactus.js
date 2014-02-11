// JavaScript Document
function contact()
{
	//var conform = document.contact;
	var first_name = document.contactus.fname.value;
	var last_name = document.contactus.lname.value;
	var phone_number = document.contactus.phone.value;
	var email = document.contactus.email.value;
	var message = document.contactus.textarea.value;
	
	var ck_name1 = /^[A-Za-z ]{3,20}$/;
	var ck_phone1 =/^\d{3}-\d{3}-\d{4}$/;
	var ck_email1 = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	
	var error ="";
	
	if(!ck_name1.test(first_name))
	{
			error+="Invalid First name\n";
	}
	
	if(!ck_name1.test(last_name))
	{
			error+="Invalid Last name\n";
	}
	
	if(!ck_phone1.test(phone_number))
	{
			error+="Invalid phone number\n";		
	}
	
	if(!ck_email1.test(email))
	{
			error+= "Invalid email address\n";
	}
	
	if(message == '' || message == null)
	{
		error+="Please enter your comments\n";
	}
	
	
	if(error != "")
	{
		var ccomments = "Please fix the following error(s)\n";
		var line = "=========================================\n";
		alert(ccomments + line + error + line);
		return false;
	}
	
	else
	{
		return true;
	}

}//End contact
