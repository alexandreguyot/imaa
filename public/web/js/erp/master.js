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

})