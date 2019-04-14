$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "classic" );

function goBack() {
	window.history.back();
}

$(document).ready(function(){
   

    $('#list_projects').select2({
        placeholder: "Sélectionner des projets",
        tags: true,
	});

	// Initialisation des tabs
	$('ul.tabs li').first().addClass('current');
	$('.tab-content').first().addClass('current');
	
	// Pour les changements entre les tabs
	$('ul.tabs li').click(function() {
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
		return false;
	});
	var toggle = false;
	$('#finish').click(function() {
		toggle = !toggle;
		if(toggle) {
			$('.project_not_finish').hide();
			$('.project_finish').show();
		} else {
			$('.project_finish').hide();
			$('.project_not_finish').show();
		}
	});
	$('#carouselExampleIndicators-1').carousel({
	  interval: 4000,
	  cycle: true
	});
});

$(document).ready(function(){
	
	$(".nav-bar-active").each(function() {
		this.onclick = function() {
			$('.collapsingNavbar').toggleClass( "on" );
			$('body').toggleClass( "on" );
       		return false;
		}
	});

});

$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});