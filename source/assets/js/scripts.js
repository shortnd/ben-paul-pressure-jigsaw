/*-----------------------------------------------------------------------------------

	Theme Name: Website name
	Front-end developer: Collin O'Connell
	Author Design: Samir Alley @samiralley | Kat Wiard | Nasryn Abou-Arabi | Alex Parent
	Author URI: http://www.revize.com/
	Date: mm/dd/yy

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

	// Preloader
	$window.load(function() {

		setTimeout(function(){
			$body.addClass('loaded');
			 $('#loader-wrapper').fadeOut();
		}, 600);

	});

	$window.ready(function(){

		// Skip to Content
		$('#skip').on('click', function(e){
			e.preventDefault();
			$('#main').focus();
		});

		// Keyboard Navigation: Nav, flyout
		var isClick = false;
		$("#nav li a, #flyout  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
			console.log(isClick);
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

		// If template is freeform, add flyout background and position the main tag relative
		if ($('#flyout-wrap').length){
			$('main').css({
				// The freeform template should always have a main tag wrapping the flyout-wrap and the entry
				'position':'relative',
				'z-index':'1'
			});
			$('<div id="flyout-background"></div>').prependTo('main').css({
				'position':'absolute',
				'top':'0',
				'bottom':'0',
				'left':'0',
				'z-index':'0-1',
				'background':'#000' // change background-color of flyout-background here
			});
		}


		// Fill sides script
		function fillSide(){
            var windowWidth = $('body').outerWidth();
            var pixelValue = (windowWidth - $('.container').width()) / 2;
			$('.fillLeft').css({
				'margin-left': -pixelValue
			});

			$('.fillRight').css({
				'margin-right': -pixelValue
			});
			$('.fillLeft.withPadding').css({
				'margin-left': -pixelValue,
				'padding-left': pixelValue
			});

			$('.fillRight.withPadding').css({
				'margin-right': -pixelValue,
				'padding-right': pixelValue
			});

			$('#flyout-background').width($('#flyout-wrap').outerWidth());
		}
        fillSide();
        $window.resize(fillSide);

		// Search Toggle
		$('#search-toggle').on('click',function(e){
			$('#search').stop().slideToggle(200);
			$(this).toggleClass('fa-search fa-close');
		});

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
			if ($window.width() < 992) {
				$("body").addClass('mobile');
				$("body").removeClass('desktop');
			} else{
				$("body").addClass('mobile');
				$("body").removeClass('desktop');
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

		// Flyout
		var flyout = $('#flyout'),
			flyoutwrap = $('#flyout-wrap');

		if (flyout.text().length){
			flyoutwrap.prepend('<div id="flyout-toggle" class="hidden-lg hidden-md"><i class="fa fa-bars"></i> Sub Menu</div>');
		}

		$("#flyout-toggle").on("click", function(){
			flyout.slideToggle();
			$(this).toggleClass("active");
		});

		$("#flyout ul").addClass('flyout-children');

		// var flyoutChildren = $('.flyout-children');


		// Tabs
		$('#tabs li a').click(function(e){
			$('#tabs li, #tabs-content .current').removeClass('current').removeClass('fadeInLeft');
			$(this).parent().addClass('current');

			var currentTab = $(this).attr('href');

			e.preventDefault();
			$(currentTab).addClass('current animated fadeInLeft');
		});

		// Owl Slider
		if(typeof $.fn.owlCarousel !== "undefined"){
			// $("#owl-slider").owlCarousel();
			var latestJobsLength = $('.latest-jobs .latest-job').length;
			$('.latest-jobs').owlCarousel({
				items: latestJobsLength > 3 ? 3 : latestJobsLength,
				margin: 15,
			});
		}

		// matchHeight
		if(typeof $.fn.matchHeight !== "undefined"){
			$('.equal').matchHeight({
				//defaults
				byRow: true,
				property: 'height', // height or min-height
				target: null,
				remove: false
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

		// Sticky
		if(typeof $.fn.sticky !== "undefined"){
			$("#sticky").sticky({
				topSpacing:0
			});
		}

		// Animations http://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
		function onScrollInit( items, trigger ) {
			items.each( function() {
				var osElement = $(this),
					osAnimationClass = osElement.data('os-animation'),
					osAnimationDelay = osElement.data('os-animation-delay');

				osElement.css({
					'-moz-animation-delay':     osAnimationDelay,
					'animation-delay':          osAnimationDelay,
					'-webkit-animation-delay':  osAnimationDelay
				});

				var osTrigger = ( trigger ) ? trigger : osElement;

				if(typeof $.fn.waypoint !== "undefined"){
					osTrigger.waypoint(function() {
						osElement.addClass('animated').addClass(osAnimationClass);
					},{
						triggerOnce: true,
						offset: '100%'
					});
				}
			});
		}
		onScrollInit($('.os-animation'));

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

		/*global jQuery */
		/*!
		* FlexVerticalCenter.js 1.0
		*
		* Copyright 2011, Paul Sprangers http://paulsprangers.com
		* Released under the WTFPL license
		* http://sam.zoy.org/wtfpl/
		*
		* Date: Fri Oct 28 19:12:00 2011 +0100
		*/
		$.fn.flexVerticalCenter = function( options ) {
			var settings = $.extend({
				cssAttribute:   'margin-top', // the attribute to apply the calculated value to
				verticalOffset: 0,            // the number of pixels to offset the vertical alignment by
				parentSelector: null,         // a selector representing the parent to vertically center this element within
				debounceTimeout: 25,          // a default debounce timeout in milliseconds
				deferTilWindowLoad: false     // if true, nothing will take effect until the $(window).load event
			}, options || {});

			return this.each(function(){
				var $this   = $(this); // store the object
				var debounce;

				// recalculate the distance to the top of the element to keep it centered
				var resizer = function () {

					var parentHeight = (settings.parentSelector && $this.parents(settings.parentSelector).length) ?
						$this.parents(settings.parentSelector).first().height() : $this.parent().height();

					$this.css(
						settings.cssAttribute, ( ( ( parentHeight - $this.height() ) / 2 ) + parseInt(settings.verticalOffset) )
					);
				};

				// Call on resize. Opera debounces their resize by default.
				$(window).resize(function () {
					clearTimeout(debounce);
					debounce = setTimeout(resizer, settings.debounceTimeout);
				});

				if (!settings.deferTilWindowLoad) {
					// call it once, immediately.
					resizer();
				}

				// Call again to set after window (frames, images, etc) loads.
				$(window).load(function () {
					resizer();
				});

			});

		};
		$('.v-align').flexVerticalCenter();

	}); // Ready

})(jQuery);
