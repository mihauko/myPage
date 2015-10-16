$(document).ready(function(){
/*Sticky navigation*/ 
	$('.js--section-profile').waypoint(function(direction){
		if(direction == "down"){
			$('nav').addClass('sticky');
		} else {
			$('nav').removeClass('sticky');
		}
	}, {
		offset: '60px'
	});
/*Scroll on buttons*/ 
	$('.js--scroll-to-profile').click(function(){
		$('html, body').animate({scrollTop: $('.js--section-profile').offset().top}, 1000);
	})
	$('.js--scroll-to-hobby').click(function(){
		$('html, body').animate({scrollTop: $('.js--section-hobby').offset().top}, 1000);
	})
	/*navigation scroll*/

	
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});