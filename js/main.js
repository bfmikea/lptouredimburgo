jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

//Para cargar el mapa de google map
jQuery(function($) {
  // replace click with mouseenter if you want to activate the map on mouse hover
  // warning - mobile devices don't have a cursor so they can't trigger "hover"
  $('#my-fast-map a').on('click', function(e) {
    e.preventDefault();
    map = $(this).parent();

    iframe_src = map.data('iframe-src');
    iframe_width = map.data('iframe-width');
    iframe_height = map.data('iframe-height');

    map.html('<iframe src="' + iframe_src + '" width="' + iframe_width + '" height="' + iframe_height + '" allowfullscreen></iframe>');

    return false;
  });
});





