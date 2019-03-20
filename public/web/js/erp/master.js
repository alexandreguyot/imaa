$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "classic" );

$(document).ready(function(){
    function goBack() {
        window.history.back();
    }

    $('#list_projects').select2({
        placeholder: "Sélectionner des projets",
        tags: true,
	});

	// Initialisation des tabs
	$('ul.tabs li').first().addClass('current');
	$('.tab-content').first().addClass('current');
	console.warn("$('ul.tabs li').first()", $('ul.tabs li').first());
	
	// Pour les changements entre les tabs
	$('ul.tabs li').click(function() {
		var tab_id = $(this).attr('data-tab');
		console.warn('tab_id', tab_id);

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

});