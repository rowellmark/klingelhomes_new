(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			runPopup();
			BurgerMenu();
			/// specific for homepage
			if ($(b).hasClass('home')) {
				initCounter();
				runTestimonials();
				runInstagram();
			}

			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}
		
		runPopup = () => {

			const $popup = $('.globPopup');
			const $close = $('.globPopupClose');

			$close.on('click', function () {
				
				$popup.fadeOut();
			});
	

		}

		BurgerMenu = () => {

			const $expandedMenuWrapper = $('.expandedMenuWrapper');
			const $expandedMenuContainer = $('.expandedMenuContainer');
			const $expandedMenuBttn = $('.expanded-menu-bttn');
			const $expandedMenuClose = $('.expandedMenuClose');


			$(window).on("load", function () {
				$expandedMenuContainer.mCustomScrollbar();
			});

			
			let mouse_is_inside = false;

			$expandedMenuContainer.hover(function () {
				mouse_is_inside = true;
				console.log('inside');
			}, function () {
				mouse_is_inside = false;
				console.log('outside');
			});


			$expandedMenuBttn.on('click', function () {
				$expandedMenuWrapper.addClass('active');
			});

			$expandedMenuClose.on('click', function () {
				$expandedMenuWrapper.removeClass('active');
			});
			
			// if mouse_in_inside is false remove active class to hide expanded menu
			$expandedMenuWrapper.on('click', function () {
				if (mouse_is_inside == false) {
					$expandedMenuWrapper.removeClass('active');
				}
			});

		}
		commaSeparateNumber = (val) => {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		initCounter = () => {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hpWhyWorkWithUs");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".work-with-us em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}
		runTestimonials = () => {

			
			var testimonials = new Splide('.testi-lists', {
				type: 'loop',
				drag: 'free',
				snap: true,
				perPage: 1,
				pagination: false
			});

			testimonials.mount();

		}
		runInstagram = () => {


			var instagram = new Splide('.igLists', {
				type: 'loop',
				perPage: 6,
				pagination: false,
				arrows: false
			});

			$('.ig-prev').on('click', function (e) {
				instagram.go('>');

			});

			$('.ig-next').on('click', function (e) {
				instagram.go('<');
			});

			instagram.mount();


		}
		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');