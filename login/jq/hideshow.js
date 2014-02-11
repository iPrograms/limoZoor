// JavaScript Document
//Author Manzoor A
//version 1.0

$(function() {
$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
});


$(function() 
{
	$( "#datepicker" ).datepicker({
	changeMonth: true,
	changeYear: true
	});
});

$(function() {
        $("#tabs" ).tabs();
    });
//By defaul hide everything
$(document).ready(function(){
	
	//pick airport infor
	$("#f2").hide();			   
	$("#f3").hide();
	$("#f4").hide();
	$("#f5").hide();
	
	//pick address
	$("#f6").hide();
	$("#f7").hide();
	$("#f8").hide();
	$("#f9").hide();
	
	//airport drop address
	$("#f10").hide();
	$("#f11").hide();
	
	//address drop info
	$("#f12").hide();
	$("#f13").hide();
	$("#f14").hide();
	$("#f15").hide();
	$("#f16").hide();
	$("#f17").hide();
	$("#f18").hide();
	$("#f19").hide();
	$("#f20").hide();
	$("#datedata").hide();
	$("#pickupinformation").hide();
	$("#dropoffinformation").hide();
	$("#empty").hide();
	$("#datelabel").hide();
	$("#vehicle").hide();
	$("#vehicleinformation").hide();
	$("#vehiclelabel").hide();
	$("#comment").hide();
	$("#commentlabel").hide();
	$("#btn").hide();
	
	$("#two").css('color','black','font-size','100%');
	$("#one").css('color','black','font-size','100%');
	
});

function myhideShow()
 {
   //hide
   var airpick = document.getElementById('airpick');
   var airdrop = document.getElementById('airdrop');
   
   //show airport pick up information
   if(airpick.checked == true)
   {
	$("#one").css('color','green','font-size','150%');
	$("#dateempty").show(2000);
	$("#datelabel").show(2000);
	$("#f18").show(2000);
	$("#datedata").show(2000);
	$("#f19").show(3000);
	//$("#f2").show(3000);
	$("#f3").show(3000);
	$("#f4").show(3000);
	$("#f5").show(3000);
	$("#f6").show(3000);
	$("#f20").show(3000);
	$("#pickupinformation").show(3000);
	$("#dropoffinformation").show(3000);
   // $("#empty").show(3000); 
	//show drop off address
	$("#f7").show(4000);
	 $("#f8").show(4000);
	 $("#f9").show(4000);
	 $("#f10").show(4000);
	 $("#vehicle").show(5000);
	$("#vehicleinformation").show(5000);
	$("#vehiclelabel").show(5000);
	$("#comment").show(6000);
	$("#commentlabel").show(6000);
	$("#btn").show(7000);
	
	}
	
  if(airdrop.checked == true)
	{
	$("#two").css('color','green','font-size','150%');
	$("#dateempty").show(2000);
	$("#datelabel").show(2000);
	$("#f18").show(2000);
	$("#datedata").show(2000);
	$("#f19").show(2000);
	$("#f20").show(2000);
	 $("#f7").show(2000);
	 $("#f8").show(2000);
	 $("#f9").show(2000);
	 $("#f10").show(2000);
	 
	 $("#f13").show(2000);
	  //$("#f11").show(2000);
	 $("#f12").show(2000);	
	 $("#vehicle").show(4000);
	$("#vehicleinformation").show(4000);
	$("#vehiclelabel").show(4000);
	$("#comment").show(5000);
	$("#commentlabel").show(5000);
	$("#pickupinformation").show(5000);
	$("#btn").show(7000);
	 
	 $("#f3").hide();
	 $("#f4").hide();
	 $("#f5").hide();
	 $("#f6").hide();
	 $("#dropoffinformation").hide();
	}
	
	if(((airpick.checked == false) && (airdrop.checked == false))){
	
	//pick airport infor
	$("#f2").hide();			   
	$("#f3").hide();
	$("#f4").hide();
	$("#f5").hide();
	
	//pick address
	$("#f6").hide();
	$("#f7").hide();
	$("#f8").hide();
	$("#f9").hide();
	
	//airport drop address
	$("#f10").hide();
	$("#f11").hide();
	
	//address drop info
	$("#f12").hide();
	$("#f13").hide();
	$("#f14").hide();
	$("#f15").hide();
	$("#f16").hide();
	$("#f17").hide();
	$("#f18").hide();
	$("#f19").hide();
	$("#f20").hide();
	$("#datedata").hide();
	$("#pickupinformation").hide();
	$("#dropoffinformation").hide();
	$("#dateempty").hide();
	$("#datelabel").hide();
	$("#vehicle").hide();
	$("#vehicleinformation").hide();
	$("#vehiclelabel").hide();
	$("#commentlabel").hide();
	$("#comment").hide();
	$("#btn").hide();
	
	$("#two").css('color','black');
	$("#one").css('color','black');
	
	}
	if(((airpick.checked == true) && (airdrop.checked == true))){
	
	//pick airport infor
	$("#f2").hide();			   
	$("#f3").hide();
	$("#f4").hide();
	$("#f5").hide();
	
	//pick address
	$("#f6").hide();
	$("#f7").hide();
	$("#f8").hide();
	$("#f9").hide();
	
	//airport drop address
	$("#f10").hide();
	$("#f11").hide();
	
	//address drop info
	$("#f12").hide();
	$("#f13").hide();
	$("#f14").hide();
	$("#f15").hide();
	$("#f16").hide();
	$("#f17").hide();
	$("#f18").hide();
	$("#f19").hide();
	$("#f20").hide();
	$("#datedata").hide();
	$("#pickupinformation").hide();
	$("#dropoffinformation").hide();
	$("#dateempty").hide();
	$("#datelabel").hide();
	$("#vehicle").hide();
	$("#vehicleinformation").hide();
	$("#vehiclelabel").hide();
	$("#comment").hide();
	$("#commentlabel").hide();
	$("#btn").hide();
	
	$("#two").css('color','black','font-size','100%');
	$("#one").css('color','black','font-size','100%');
	}
 }