

// Jquery Document Ready Section
$(document).ready(function(){
  /*                Layer Slider
  -----------------------------------------------------*/
    $('#layerslider').layerSlider({
        responsive: true,
        autoStart: true,
        navPrevNext: false,
        pauseOnHover: false,
        skin: 'fullwidth',
        hoverPrevNext: false,
        showCircleTimer:false,
        skinsPath: ''
    });
    
    
    /*             Jquery Full Page 
    ___________________________________________________*/
    $('.main-page-wrapper').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors:['firstPage', 'secondPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Welcome To Worban', 'What is Worban ','How To Worban'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true, //Make "true" autoScrolling for wow king wow js
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        resetSliders: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
       /* sectionsColor : ['red', 'green'],*/
        paddingTop: 0,
        paddingBottom: 0,
        fixedElements: '#header, .footer',
        responsiveWidth: 0,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });

	  /*       OLD POP-UP SIGN UP
    Script For sign up section displaing and closing
    -----------------------------------------------------*/
  	$(".user-type-box li").on("click",function(){
  	  var se = $(this).attr('data-reg');
  	    $('#'+se).css("display","block");
  	    $('.user-type-box').css("display","none");
  	});

    $(".back-menu").on("click",function(){
  	  var se = $(this).attr('data-reg');
  	    $('.registration-form').css("display","none");
  	    $('.user-type-box').css("display","block");
  	});

    $(".back-pr-form").on("click",function(){
  	    $('.user-type-box').css("display","none");
  	    $('.personal-reg').css("display","block");
  	});


    /*        Script For Create post box
    -----------------------------------------------------*/
    $(".add-content").on("click",function(){
  	    $('.add-content').css("display","none");
  	    $('.close-content').css("display","inline-block");
  	    $('.more-content').css("display","block");
  	});

    $(".close-content").on("click",function(){
  	    $('.add-content').css("display","inline-block");
  	    $('.close-content').css("display","none");
  	    $('.more-content').css("display","none");
  	});

	  /*           Script For Sticky Top Div
  	____________________________________________________*/
    var stickyNavTop = $('#header-section').offset().top;
    var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) {
        $('header').addClass('top-header-sticky ');
    } else {
        $('header').removeClass('top-header-sticky ');
    }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });

   /*___________________________________________________
   /*|            Script For Post Create Box              |
     ___________________________________________________*/
     //Import Link to iframe
     $("#post-ink").change(function(){
         //Get
          var link = $('#post-ink').val();
         //Set
          $('.wesite-ifream iframe').attr('src', link);
        //
        $('.wesite-ifream iframe').css("display", "inline-block");
    });

    //Import Link Valiodation
    $(".import-link-btn").on("click",function(){
        //Get
        var link = $('#post-ink').val();

        if (link.length > 1) {
            $('#step-two').css("display","block");
            $('#step-one').css("display","none");
       }
       else{
          $('.please-link').html("<big>Please!</big> Import a link on the text box");
       }
    });


     //For Open or Close concent box
     $(".back-pr-form").on("click",function(){
   	    $('.user-type-box').css("display","none");
   	    $('.personal-reg').css("display","block");
   	});

    //For Post Third Options
    $(".pic-vid-types").change("click",function(){
         if ($(this).val() == 'No') {
            $('.google-view-ct').css("display","block");
            $('.google-view-map').css("display","block");
         }
         else if($(this).val() == 'Yes'){
           $('.google-view-ct').css("display","none");
           $('.google-view-map').css("display","none");
         }
   });

    // Set Multiple Step Display View or None
    $("#step-one .import-link-btn").click(function(){
      if (link.length > 1) {
         $('#step-two').css("display","block");
         $('#step-one').css("display","none");
       }
   });

   $("#step-two .post-step-btn").on("click",function(){
      $('#step-three').css("display","block");
      $('#step-two').css("display","none");
      //Conditions
      if($('#step-three').css("display") == "block") {
        $('.next-btn').css("display","none");
      }
  });

        //for post back button
        $("#step-two .back-btn").on("click",function(){
           $('#step-one').css("display","block");
           $('#step-two').css("display","none");
           $('#step-three').css("display","none");
       });

       $("#step-three .back-btn").on("click",function(){
          $('#step-one').css("display","none");
          $('#step-two').css("display","block");
          $('#step-three').css("display","none");
      });


      //User profile name animationing

      $(window).scroll(function() {
         var user_profile = $(".user-board-contents").offset();
         var posdis = $('.user-board-contents').offset().top - $(window).scrollTop();
         var post_wpr_section = $('.post-section-wrapper').offset().top - $(window).scrollTop();
           if (posdis < 50 ){
               $('.user-board-contents').css("top","50px");
               $('.user-board-contents').css("position","fixed");
               $('.user-board-contents').css("height","auto");
               $('ul.control-menu-btn').css("display","none");
               $('p.profile-user-name').css("display","none");
               $('h1.for-fancy-user-name').css("display","block");
               $('h1.for-fancy-user-name').css("top","auto");
               // Post Button Position
               $('.post-btn').css("top","18px");
               // For MAC Computer
               var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
               if (isSafari){
                  $('.user-board-contents').css("top","45px");
               }
           }
           else if(post_wpr_section > 160 ){
             $('.user-board-contents').css("top","-50px");
             $('ul.control-menu-btn').css("display","block");
             /*$('.user-board-contents').css("height","110px");*/
             $('.user-board-contents').css("position","static");
             $('p.profile-user-name').css("display","block");
             $('h1.for-fancy-user-name').css("display","none");
             // Post Button Position
             $('.post-btn').css("top","auto");
           }
      });


      // Detect Safari Browser
      $(window).scroll(function() {
         var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
         if (isSafari) {
           var post_wpr_sectionx = $('.post-section-wrapper').offset().top - $(window).scrollTop();
           if (post_wpr_sectionx < 160 ){
               //console.log(posdisx+"Top Fancy");
               $('.user-board-contents').css("top","45px");
               $('.user-board-contents').css("position","fixed");
               $('.user-board-contents').css("height","auto");
               $('ul.control-menu-btn').css("display","none");
               $('p.profile-user-name').css("display","none");
               $('h1.for-fancy-user-name').css("display","block");
               $('h1.for-fancy-user-name').css("top","auto");
             }
             else if(post_wpr_sectionx > 160 ){
               $('.user-board-contents').css("top","0");
               $('ul.control-menu-btn').css("display","block");
//               $('.user-board-contents').css("height","110px");
               $('.user-board-contents').css("position","static");
               $('p.profile-user-name').css("display","block");
               $('h1.for-fancy-user-name').css("display","none");
               $('h1.for-fancy-user-name').css("transition","all 0s ease 0s");
               $('.user-board-contents').css("transition","all 0s ease 0s");
               //$('body').css("display","none");
             }
         }
      });

});//End Of Jquery Document Ready Section


//Welcome Page Search display Block or None
$("#advance-src-btn").on("click",function(){
   $('.field-for-search').css("display","block");
});


window.addEventListener('mouseup',function(event){
	var pol = document.getElementById('field-for-search');
	var poloptn = document.getElementsByClassName('select-option');
  var polmaster = document.getElementById('advance-src-btn');
  var master_search = document.getElementById('master-search');
  var wpr_search = document.getElementById('door-btn');
	if(event.target != pol && event.target.parentNode != pol && event.target != polmaster && event.target != master_search && event.target != wpr_search){
	 	pol.style.display = 'none';
	}
	});

// $("#category-search option").on("click",function(){
//    $('.field-for-search').css("display","block");
// });


//Script for Menu Sticky
$(window).scroll(function() {
    if ($(this).scrollTop() > 100 ){
      $('.sticky').css("top","0");
    }
    else if ($(this).scrollTop() < 99) {
      $('.sticky').css("top","-60px");
    }


});



/* For Date Picker */
$(function() {
    $( "#datepicker,#datepicker2,#date-search" ).datepicker({
        inline: true,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    });
});

/*       Masonry
______________________________*/
(function($){
	jQuery(window).load(function(){

		/*home post masonry starts*/
		//var gutter = parseInt(jQuery('.post').css('marginBottom'));
		var container = jQuery('#posts');

		// Creates an instance of Masonry on #posts

		container.masonry({
			gutter: 0,
			itemSelector: '.each-post-box-wpr',
			columnWidth: '.each-post-box-wpr'
		});

		/*home post masonry ends*/

	});
})(jQuery);


/* Google Map API */
function initialize() {

    var locationworban = new google.maps.LatLng(23.160930, 89.222679);

    var panorama = new google.maps.StreetViewPanorama(
        document.getElementById('post-street-view'), {
            position: locationworban,
            pov: {
                heading: 34,
                pitch: 10
            },
            disableDefaultUI: true
        });
    map.setStreetView(panorama);
}

google.maps.event.addDomListener(window, 'load', initialize);

/////////////////////////////////////////////////////////
//              One Page Scroll                       //
////////////////////////////////////////////////////////
/*$(".main-page-wrapper").onepage_scroll({
   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
   animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
   keyboard: true,                  // You can activate the keyboard controls
   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                                    // the browser's width is less than 600, the fallback will kick in.
   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
});*/



/*/////////////////////////////
||       WOW JS Scripts      ||
/////////////////////////////*/

new WOW().init();

//WOW JS REVEAL ON SCROLL EVERY TIME
$(function() {

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
        win_height_padded = $window.height() * 1.1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
   $(".revealOnScroll.animated").each(function (index) {
      var $this     = $(this),
          offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
      }
    });
  }

  revealOnScroll();
});
