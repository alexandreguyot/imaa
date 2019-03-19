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
$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})