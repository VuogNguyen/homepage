var Home = {
	init: function() {
		var self = this;
		self.projectSlider = "";

		self.animsition();
		self.fullHeightScreen();
		self.toggleHamburgerBtt();
		self.handleClick();

		self.addSlick();
		$(window).resize(function(){
			self.addSlick();
		});
	},

	animsition: function() {
		$(".animsition").animsition({
			inDuration: 3500
		});
	},

	addSlick: function() {
		var self = this;
		width = $(window).width();
		if (self.projectSlider === "") {
			self.projectSlider = $('.slick-slider').clone();
		}

		$('.slick-slider').on('init', function(event, slick){
			var height = $(".porfolio-block").height()/2 - $(this).height()/2;
			$(this).css({
				"margin-top": height
			});
		});
		if (width > 768) {
			$(".slick-slider").slick({
				centerMode: true,
				speed: 0,
				slidesToShow: 5,
				slidesToScroll: 5,
				infinite: true,
				responsive: [
				{
					breakpoint: 1280,
					settings: {
						slidesToShow: 4,
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 768,
					settings: "unslick"
				}
				]
			});
		} else {
			$(".slick-slider.slick-initialized").slick('unslick');
			$(".porfolio-block > ul").replaceWith(self.projectSlider);
		}

	},

	// Toggle subnav when click on menu button
	// in mobile screen
	toggleHamburgerBtt: function() {
		var self = this;
		$('.menu').on('click', function(event) {
			$('.menu-top').toggleClass('menu-top-click');
			$('.menu-middle').toggleClass('menu-middle-click');
			$('.menu-bottom').toggleClass('menu-bottom-click');
			event.preventDefault();
		});
	},

	fullHeightScreen: function() {
		// First check to see if the platform is an iPhone or iPod
		if(/iP/.test(navigator.platform) && /Safari/i.test(navigator.userAgent)){
			var mobileSafari = "Safari";
		}
		// Set the div height
		function setHeight($fullHeight) {
			var new_height = $(this).height();
			if (typeof mobileSafari === 'string')
				new_height += 0;
			$fullHeight.css('height', new_height);
		}
		setHeight($('.full-height'));
		$(window).resize(function() {
			setHeight.call(this, $('.full-height'));
		});
	},

	handleClick: function() {
		var self = this;
		$('.js-btn').click(function(){
			var action = $(this).attr("data-action");
			switch (action) {
				case "slide-up":
					$(this).closest('.slide-up').toggleClass("bottom-up");
					break;
				case "slide-down":
					$(".nav-block").toggleClass("bottom-up");
					break;
				default:
					break;
			}
		});
	}
};

$(function() {
	// load the jquery functions on page load
	Home.init();
});
