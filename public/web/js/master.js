$(document).ready(function(){
	

	$(".nav-bar-active").each(function() {
		this.onclick = function() {
			$('.collapsingNavbar').toggleClass( "on" );
			$('body').toggleClass( "on" );
       		return false;
		}
	});


});