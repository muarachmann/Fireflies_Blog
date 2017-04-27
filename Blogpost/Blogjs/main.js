
 var sliderInt = 1;
 var sliderNext = 2;

function mua(){
	   
	  
	   count = $("#slider > img").size();
	  
	  var loop = setInterval(function(){
		   
		     $("#slider > img1").fadeOut(300);
			 $("#slider > img#"+sliderNext).fadeIn(300);
			 
			 sliderInt = sliderNext;
			 sliderNext = sliderNext + 1;
		   
	   },3000);
	 
	  
  }
  
$(document).ready(function(){
	
	$("#slider > img#1").fadeIn(300);
	mua();	
});

