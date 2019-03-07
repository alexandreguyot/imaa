$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "bootstrap" );

$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

	function goBack() {
		window.history.back();
	}

	$('#list_projects').select2({
		allowClear: true,
		placeholder: "Sélectionner des projets",
	});

})