jQuery(document).ready(function() {
   $('a[href*="#"]:not([href="#"])').click(function() {
   	if (!$(this).hasClass('portfolio-link')){
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	 }
  });
});

// Main variables

  var $developmentWrapper = $('.aside-overlay');
  var developmentIsVisible = false;


/* ####### HERO SECTION ####### */




$(window).scroll( function(){
  
  var bottom_of_window = $(window).scrollTop() + $(window).height();

  
    // Check the location of each element hidden */
  
/*###### SKILLS SECTION ######*/
  
  var middle_of_developmentWrapper = $developmentWrapper.offset().top + $developmentWrapper.outerHeight()/2;
  
  if((bottom_of_window > middle_of_developmentWrapper)&& (developmentIsVisible == false)){
  
    $('.skills-bar-container li').each( function(){

      var $barContainer = $(this).find('.bar-container');
      var dataPercent = parseInt($barContainer.data('percent'));
      var elem = $(this).find('.progressbar');
      var percent = $(this).find('.percent');
      var width = 0;

      var id = setInterval(frame, 15);

      function frame() {
        if (width >= dataPercent) {
            clearInterval(id);
        } else {
          width++;
          elem.css("width", width+"%");
          percent.html(width+" %");
        }
      }
    });
    developmentIsVisible = true;
  }
}); // -- End window scroll --

