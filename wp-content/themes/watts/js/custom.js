// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
		

		
				
		
		
	
	 /* Modernizr - check if browser supports webp. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    jQuery('#section_one img').each(function () {
	    
				if (result) {
    
					if (jQuery(this).attr('data-webp')) {
          
          	var img = jQuery(this).data('webp');
          
						jQuery(this).attr('src', img);
        	
        	}
      
   			}
  
	 			else {
		 			
		 			if (jQuery(this).attr('data-jpg')) {
          
          	var img = jQuery(this).data('jpg');
          
						jQuery(this).attr('src', img);
        	
        	}
    
    		
  	
  			}
  		
  		});
  		
  		console.log(result);
	
		});





    /* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }


    createWaypoint('section_one', '.sticky_header', 'visible', 0, null, true);
    createWaypoint('section_one', 'nav', 'move', 0, null, true);
    
    
   
    
    
        
    
    
    
    
      
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    jQuery(function() {
      jQuery('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
      jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
      });
    }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)







    /* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      jQuery('img').each(function () {
        
        if (jQuery(this).attr('data-src')) {
          
          var img = jQuery(this).data('src');
          
          jQuery(this).attr('src', img);
        
        }
      
      });

      // background images
      
      jQuery('div, section').each(function () {
       
        if (jQuery(this).attr('data-src')) {
          
          var backgroundImg = jQuery(this).data('src');
          
          jQuery(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);
    
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('.sec_one_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	prevArrow:".sec_one_button_left",
	nextArrow:".sec_one_button_right",
	responsive: [
    {
      breakpoint: 1130,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 767,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
     }
   }
   
	]
 });
 
 
 
 
 
 $('.reviews_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:true,
	prevArrow:".reviews_slider_left",
	nextArrow:".reviews_slider_right",
	adaptiveHeight: true
 });
 
 
 
 
 $('.about_pa').slick({
  infinite: true,
  mobileFirst:true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:false,
	responsive: [
    {
      breakpoint: 699,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
     }
   },
   {
      breakpoint: 1290,
      settings: "unslick"
   }
   
	]
 });


 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");




/* Sidebar
--------------------------------------------------------------------------------------- */


$('.sidebar_wrapper ul.menu > li.menu-item-has-children > a').on('click', function(e) {
	
	$(this).next('ul.sub-menu').slideToggle(400);
  
});


$('.sidebar_wrapper h3').on('click', function(e) {
	
	$(this).next('ul').slideToggle(400);
  
});


/* banner check, if banner add class to body that styles header a certain way
--------------------------------------------------------------------------------------- */


	if ($(".internal_banner")[0]){
   	
   	$('body').addClass('banner');
   	
   	 // fires the sticky header right after you scroll to the internal_banner div on templates with a banner
	  
	  createWaypoint('banner_trigger', '.sticky_header', 'visible', 0, null, true);
    createWaypoint('banner_trigger', 'nav', 'move', 0, null, true);
   
  }
  
  
  else {
	  
	  $('body').addClass('no-banner');
	  
	  // fires the sticky header right after you scroll to the internal_main div on templates without a banner
	  
	  createWaypoint('internal_main', '.sticky_header', 'visible', 0, null, true);
    createWaypoint('internal_main', 'nav', 'move', 0, null, true);

	 }
  

/* Case Results Page Read More
--------------------------------------------------------------------------------------- */


$('a.cr_read_more').on('click', function(e) {
  
	$(this).parents('.single_case_results').addClass('fade').find('.read_more_cr_content').delay(800).slideDown(400);

});


/* Nav
--------------------------------------------------------------------------------------- */



var windowWidth = $(window).width();



	function checkWidthmenu() {
    
    if (windowWidth > 767) {
        
      
    	$('.menu_wrapper').on('click', function(e) {
  
				$('nav').addClass('show');
	
				$('.nav_close_wrapper').addClass('show');
	
				$('.sticky_header').addClass('no_transition');
	    
  		});

	
			$('.nav_close_wrapper').on('click', function(e) {
  
				$('nav').addClass('close');
	
				$('.nav_close_wrapper').removeClass('show');
	
				$('nav').delay(1000).queue(function(){
     
					$(this).removeClass('show close').dequeue();
  
				});
	
				$('.sticky_header').removeClass('no_transition');

			});


			$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
  
				$(".sub_menu_container").empty();
	
				$(this).next('ul.sub-menu').clone().appendTo('.sub_menu_container').fadeIn();
				
				$('nav ul.menu > li.menu-item-has-children > a').removeClass('active');
				
				$(this).addClass('active');

			});

    	   		
    }
    
    else {
	    
	    
	    $('.menu_wrapper').on('click', function(e) {
		    
		    $('nav').slideDown(500);
  
				$('.nav_close_wrapper').addClass('show');
	
				$('.sticky_header').addClass('no_transition');
	    
  		});

	
			$('.nav_close_wrapper').on('click', function(e) {
				
				$('nav').slideUp(500);
				
				$('.nav_close_wrapper').removeClass('show');
  
				$('.sticky_header').removeClass('no_transition');

			});
			
			$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
			  
				$('nav ul.menu > li.menu-item-has-children > a').removeClass('active');
				
				$(this).addClass('active');
				
				$(this).next('ul.sub-menu').toggleClass('open');
			
			});

	    
	  } 
    
  };
	

checkWidthmenu();




  
}); // document ready