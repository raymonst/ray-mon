var offset;
var colors = ["#FC4236","#FF6B00","#FDC741","#24CE7B","#01B3E3","#DB38B5"];



$(document).ready(function() {
	
	var randomColor = Math.floor(Math.random() * 6);
	$("#nav-link-home span").css({"color":colors[randomColor]});
	
	if ($("body").hasClass("with-cover")) {
		$("nav").addClass("transparent");	
		
		var offset = $(".container").offset().top;

		if ($(window).scrollTop() > (offset - 72)) {
			$("nav").removeClass("transparent");	
		} else {
			$("nav").addClass("transparent");	
		}		

		$(window).scroll(function(){
			
			if ($(window).scrollTop() > (offset - 72)) {
				$("nav").removeClass("transparent");	
			} else {
				$("nav").addClass("transparent");	
			}		
			
		});

	}

});



