/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	//  $('a').click(function(){
	//     $('html, body').animate({
	//         scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	//     }, 500);
	//     return false;
	// });

	$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
		if (
		  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		  && 
		  location.hostname == this.hostname
		) {
		  // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  // Does a scroll target exist?
		  if (target.length) {
		    // Only prevent default if animation is actually gonna happen
		    event.preventDefault();
		    $('html, body').animate({
		      scrollTop: target.offset().top
		    }, 1000, function() {
		      // Callback after animation
		      // Must change focus!
		      var $target = $(target);
		      $target.focus();
		      if ($target.is(":focus")) { // Checking if the target was focused
		        return false;
		      } else {
		        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		        $target.focus(); // Set focus again
		      };
		    });
		  }
		}
	});



	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();
	var $template = $('.error-404, .template-page, .template-sitemap');
	if($template.length>0){
		var $window = $(window);	
		$window.on('resize scroll',function(){
			var $header = $template.find('>.row-2 >.wrapper >.row-1');
			var $footer = $('#colophon');
			if($header.length>0){
				var anchor_top = $header.offset().top;
				var anchor_bottom = $footer.offset().top;
				var $body = $('body');
				var $aside = $template.find('>.row-2 >.wrapper >.row-2 >.col-2');
				var $col_1 = $template.find('>.row-2 >.wrapper >.row-2 >.col-1');
				if($col_1.outerHeight()>$aside.outerHeight()){
					var width = $body.innerWidth()>=1500 ? .25*(1500-(.11*$body.innerWidth())) + "px" : '22.25%';
					var right = $body.innerWidth()>=1500 ? .055*$body.innerWidth() + 1/2*($body.innerWidth()-1500) + "px": '5.5%';
					var padding = $body.innerWidth()>=1500 ? "0 "+.045*(1500-(.11*$body.innerWidth())) + "px": '0 4.005%';
					if($window.scrollTop() > anchor_top && $body.innerWidth() > 900 
						&& ($aside.outerHeight() + $header.outerHeight() + $window.scrollTop()) < anchor_bottom ){
						$aside.css({
							width: width,
							position: 'fixed',
							top: $header.outerHeight(),
							right: right,
							bottom: 'initial',
							padding: padding
						});
					} else if($window.scrollTop() > anchor_top && $body.innerWidth() > 600 
						&& ($aside.outerHeight() + $header.outerHeight() + $window.scrollTop()) < anchor_bottom){
						$aside.css({
							width: width,
							position: 'fixed',
							bottom: 'initial',
							top: $header.outerHeight(),
							right: right,
							padding: ''
						});
					} else if($window.scrollTop() > anchor_top && $body.innerWidth() > 900 
						&& ($aside.outerHeight() + $header.outerHeight() + $window.scrollTop()) >= anchor_bottom){
						$aside.css({
							width: width,
							position: 'fixed',
							top: 'initial',
							bottom: window.innerHeight + $window.scrollTop() - anchor_bottom,
							right: right,
							padding: padding
						});
					} else if($window.scrollTop() > anchor_top && $body.innerWidth() > 600 
						&& ($aside.outerHeight() + $header.outerHeight() + $window.scrollTop()) >= anchor_bottom){
						$aside.css({
							width: width,
							position: 'fixed',
							top: 'initial',
							bottom: window.innerHeight + $window.scrollTop() - anchor_bottom,
							right: right,
							padding: ''
						});
					} else {
						$aside.css({
							width: '',
							position: '',
							top: '',
							bottom: '',
							right: '',
							padding: ''
						});
					}
				}
			}
		});
	}

});// END #####################################    END