var $themescript = jQuery.noConflict();
jQuery(window).load(function(){

	//jQuery("#preloader").fadeOut("slow");

});
$themescript(function($){

  $(".animsition").animsition({
      inClass               :   'fade-in-down-sm',
      outClass              :   'fade-out-down-sm',
      inDuration            :    400,
      outDuration           :    400,
      linkElement           :   '.animsition-link',
      // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
      loading               :    true,
      loadingParentElement  :   'body',
      loadingClass          :   'animsition-loading',
      unSupportCss          : [ 'animation-duration',
                    '-webkit-animation-duration',
                    '-o-animation-duration'
                  ],
      overlay               :   false,
      overlayClass          :   'animsition-overlay-slide',
      overlayParentElement  :   'body'
  });


     $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


	$('.img-parallax').each(function(){
	  var img = $(this);
	  var imgParent = $(this).parent();
	  function parallaxImg () {
		var speed = img.data('speed');
		var imgY = imgParent.offset().top;
		var winY = $(this).scrollTop();
		var winH = $(this).height();
		var parentH = imgParent.innerHeight();


		// The next pixel to show on screen
		var winBottom = winY + winH;

		// If block is shown on screen
		if (winBottom > imgY && winY < imgY + parentH) {
		  // Number of pixels shown after block appear
		  var imgBottom = ((winBottom - imgY) * speed);
		  // Max number of pixels until block disappear
		  var imgTop = winH + parentH;
		  // Porcentage between start showing until disappearing
		  var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
		}
		img.css({
		  top: imgPercent + '%',
		  transform: 'translate(-50%, -' + imgPercent + '%)'
		});
	  }
	  $(document).on({
		scroll: function () {
		  parallaxImg();
		}, ready: function () {
		  parallaxImg();
		}
	  });
	});

/***************************************************************************************************
Parallax Function
******************************************************************************************************/

	   $('section[data-type="background"]').each(function(){

					var $self = $(this);
					var $self2 = $(this).attr('class');
	//				var section_height = $self.height();
	//				var section_height = $self.attr('data-height');
	//				$self.height(section_height);
					var rate = 0.4;

					var bpos = (- $(this).offset().top) * rate;
					$self.css({'background-position': 'center ' + bpos  + 'px' });

					$(window).bind('scroll', function() {
						var bpos = (- $self.offset().top + $(window).scrollTop()) * rate;
						$self.css({'background-position': 'center ' + bpos  + 'px' });

					});

	 });



    $(window).scroll(function () {
        if ($(window).scrollTop() > 250) {
          $("#navigation").addClass("animated-header");
        } else {
          $("#navigation").removeClass("animated-header");
        }
    });



});


// The plugin code
//$(this).parallax({ 'coeff':-0.65 });
//$('.'+.container').parallax({ 'coeff':1.15 });
(function($){
  $.fn.parallax = function(options){
    var $$ = $(this);
    offset = $$.offset();
    var defaults = {
      'start': 0,
      'stop': offset.top + $$.height(),
      'coeff': 0.95
    };
    var opts = $.extend(defaults, options);
    return this.each(function(){
      $(window).bind('scroll', function() {
        windowTop = $(window).scrollTop();
        if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
          newCoord = windowTop * opts.coeff;
          $$.css({
              'background-position': '0 '+ newCoord + 'px'
          });
        }
      });
    });
  };
})(jQuery);
