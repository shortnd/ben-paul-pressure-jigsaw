/*-----------------------------------------------------------------------------------

	Theme Name: Ben Pauls Pressure Washing
	Developer: Collin O'Connell

-----------------------------------------------------------------------------------*/

(function($) {
	'use strict';
	var $window = $(window),
		$body = $('body');
	/*!
	 * IE10 viewport hack for Surface/desktop Windows 8 bug
	 * Copyright 2014-2015 Twitter, Inc.
	 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
	 */
	// See the Getting Started docs for more information:
	// http://getbootstrap.com/getting-started/#support-ie10-width
	if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement('style');
		msViewportStyle.appendChild(
			document.createTextNode(
			  '@-ms-viewport{width:auto!important}'
			)
		); document.querySelector('head').appendChild(msViewportStyle);
	}

	$window.ready(function(){

		// Skip to Content
		$('#skip').on('click', function(e){
			e.preventDefault();
			$('#main').focus();
		});

		// Keyboard Navigation: Nav, flyout
		var isClick = false;
		$("#nav li a, #flyout  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
			if( isClick === false ) {
				$(".focused").removeClass("focused");
				$(e.currentTarget).parents("#nav li, #flyout li").addClass("focused");
				$(".opened:not(.focused) ul:visible,.opened2:not(.focused) ul:visible").slideUp().parent().removeClass("opened opened2");
			} else {
				$(".focused").removeClass("focused");
				isClick = false;
			}
		});

		// prevent focused class changes on click - This way arrows wont pop when clicking nav links
		$("#nav a,#flyout a").on('mousedown',function(){
			isClick = true;
		});

		// Search Toggle
		// $('#search-toggle').on('click',function(e){
		// 	$('#search').stop().slideToggle(200);
		// 	$(this).toggleClass('fa-search fa-close');
		// });

		// Navigation Toggle
		$("#nav-toggle").on("click", function(){
			$("#nav").stop().slideToggle();
			$(this).toggleClass("active");
		});

		// Menu Arrows
		$("#nav > li:has(ul)").addClass('first-parent').children("a,span").append('<i class="fa fa-angle-down down-arrow">');

		// Menu Toggles
		$("#nav >li>ul,#flyout >li>ul").addClass('first-level');
		$("#nav  li ul ul").addClass('second-level');
		$("#nav >li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle" tabindex="0">');
		$("#nav li li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle2" tabindex="0">');
		$("#flyout >li:has(ul)").find("a:first").append('<i class="fa fa-angle-down toggle" tabindex="0">');

		function addNavClass() {
			if ($window.width() < 768) {
				$("body").addClass('mobile');
				$("body").removeClass('desktop');
			} else{
				$("body").addClass('desktop');
				$("body").removeClass('mobile');
			}
		}
		addNavClass();
		$window.resize(addNavClass);

		$(".toggle").on("click keypress",function(e) {
				e.preventDefault();
		  var $parent = $(this).parent();
		  var $parentLi = $parent.parent();
		  $parentLi.toggleClass('opened');
	      if($parent.addClass('active').next('.first-level').is(":visible")){
	        $parent.next('.first-level').slideUp();
	      } else {
	        $(".first-level").slideUp("slow");
	        $parent.removeClass('active').next('.first-level').slideToggle();
	      }
	    });

	    $(".toggle2").on("click keypress",function(e) {
				e.preventDefault();
		  var $parent = $(this).parent();
		  var $parentLi = $parent.parent();
		  $parentLi.toggleClass('opened2');
	      if($parent.next('.second-level').is(":visible")){
	        $parent.next('.second-level').slideUp();
	      } else {
	        $(".second-level").slideUp("slow");
	        $parent.next('.second-level').slideToggle();
	      }
	    });
		// Owl Slider
		if(typeof $.fn.owlCarousel !== "undefined"){
			var latestJobsLength = $('.latest-jobs .latest-job').length;
			var latestServicesLength = $('.latest-services .service-card').length;
			$('.latest-jobs').owlCarousel({
				items: latestJobsLength > 3 ? 3 : latestJobsLength,
				margin: 15,
				responsive: {
					991: {
						items: latestJobsLength > 3 ? 3 : latestJobsLength,
					},
					680: {
						items: latestJobsLength > 2 ? 2 : latestJobsLength,
						nav: latestJobsLength > 2,
						navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
					},
					0: {
						items: latestJobsLength > 1 ? 1 : latestJobsLength,
						nav: latestJobsLength > 1,
						navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
					}
				}
			});
			$('.latest-services').owlCarousel({
				items: latestServicesLength > 3 ? 3 : latestServicesLength,
				margin: 15,
				responsive: {
					991: {
						items: latestServicesLength > 3 ? 3 : latestServicesLength,
					},
					680: {
						items: latestServicesLength > 2 ? 2 : latestServicesLength,
						nav: latestServicesLength > 2 ,
						navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
					},
					0: {
						items: latestServicesLength > 1 ? 1 : latestServicesLength,
						nav: latestServicesLength > 1,
						navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
					}
				}
			});
		}

		// bxSlider
		if(typeof $.fn.bxSlider !== "undefined"){
			$('.bxslider').bxSlider({
				mode:'fade',
				auto:($('.bxslider').children().length < 2) ? false : true,
				pager: false
			});
		}
		//#Smooth Scrolling
		$('a[href*=#]:not([href=#],[href*="#collapse"])').click(function() {
			if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
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
	}); // Ready
})(jQuery);
