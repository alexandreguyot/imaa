$.fn.select2.defaults.set('language', 'fr');
$.fn.select2.defaults.set( "theme", "classic" );

function goBack() {
	window.history.back();
}

function test (event) {
	console.warn('event', event);
	if (window.File && window.FileList && window.FileReader) {
		var files = event.target.files,
		  filesLength = files.length;
		for (var i = 0; i < filesLength; i++) {
		  var f = files[i]
		  var fileReader = new FileReader();
		  fileReader.onload = (function(e) {
			var file = e.target;
			$("<span class=\"pip\">" +
			  "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
			  "<br/><span class=\"remove\">X</span>" +
			  "</span>").insertAfter("#preview_" + event.currentTarget.getAttribute('data-id'));
			$(".remove").click(function(){
			  $(this).parent(".pip").remove();
			});
			
		  });
		  fileReader.readAsDataURL(f);
		}
	} else {
		alert("Your browser doesn't support to File API")
	}
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
});