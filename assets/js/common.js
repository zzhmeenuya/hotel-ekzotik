var captcha_respons = 0;

(function ($) {

	// CAPTCHA AJAX ПРОВЕРКА
	function captchaAjaxValid(){
		$.post(
			"captchaAjax.php",
			{
				param1: $('input[name="captcha"]').val()
			},
			onAjaxSuccess
		);
		function onAjaxSuccess( data ){
			$('#captchaClient').val(data);
			captcha_respons = data;
		}
	}
	$('input[name="captcha"]').on('blur keyup', captchaAjaxValid);
	// CAPTCHA AJAX ПРОВЕРКА -END


	// -------------
	// ВАЛИДАЦИЯ ФОРМЫ
	// -------------
	$(".form-reserve-room").on('submit', captchaAjaxValid, function () {
		var th = $(this);
		var name = $('input[name="name"]');
		var phone = $('input[name="phone"]');
		var formInfo = $('.form-reserve-room__info');
		var formBtnSybmit = $('.form-reserve-room__btn');
		var captcha = $('input[name="captcha"]');
		var fail = false;

		// (func) подбирает регулярное выражение по имени
		function relesFunc(name, el) {
			if (name == 'name') {
				var regn = /^[a-zA-Zа-яёА-ЯЁ]{2,30}$/i;
				return regn.test(el.val());
			}
			if (name == 'phone') {
				var regp = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
				return regp.test(el.val());
			}
		}
		// (func) проверяет по регулярым выражения
		function validateRegExp(varName, relesName, errorText1, errorText2) {
			if (!varName.val()) {
				varName.addClass('error');
				fail = true;
				varName.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html(errorText1);
			}
			else if (!relesFunc(relesName, varName)) {
				varName.addClass('error');
				fail = true;
				varName.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html(errorText2);
			}
			else {
				varName.removeClass('error');
				varName.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html('');
			}
		}
		// проверяет обязательные поля на заполниность
		function requiredInput(nameInput, errorText){
			if(!nameInput.val()){
				nameInput.addClass('error');
				fail = true;
				nameInput.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html(errorText);
			}
			else{
				nameInput.removeClass('error');
				nameInput.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html('');
			}
		}

		//  очищает прошлое сообщение
		formInfo.html('');
		formBtnSybmit.html('Отправка <i class="fas fa-spinner"></i>').addClass('disabled-btn');
		$('.form-reserve-room .form-reserve-room__input-group .form-reserve-room__input-info').html('');


		validateRegExp(name, 'name', 'Обязательное поле! <span>*</span>', 'Некоректное Имя <span>*</span>');
		validateRegExp(phone, 'phone', 'Обязательное поле! <span>*</span>', 'Некоректный телефон <span>*</span>');

		if( captcha_respons == 0 ){
			fail = true;
			captcha.addClass('error');
			captcha.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html('Некорректная капча <span>*</span>');
		}
		else{
			captcha.removeClass('error');
			captcha.closest('.form-reserve-room__input-group').find('.form-reserve-room__input-info').html('');
		}

		
		// console.log({'вывод ошибка': fail});
		// вывод ошибки на экран
		if (fail) {
			formInfo.removeClass('info_acces');
			formInfo.addClass('info_error');
			formInfo.html('<p>Ошибка отправки формы, проверте поля на правильность. <span>*</span></p>');
			formBtnSybmit.html('Забронировать').removeClass('disabled-btn');
			return false;
		}
		else {
			$('.form-reserve-room input').attr('readonly', '');
			formBtnSybmit.attr('readonly', '');
		}

		// отправка формы
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function () {
			// уберает показ ошибок
			$('.form-reserve-room').find('.form-reserve-room__input-group').find('input[name]').removeClass('error');
			$('.form-reserve-room').find('.form-reserve-room__input-group').find('.form-reserve-room__info').html('');
			// показывает сообщение успешной отправки
			formInfo.removeClass('info_error');
			formInfo.addClass('info_acces');
			setTimeout(
				function () {
					formInfo.html('<p>Форма успешно отправлена, спасибо. В ближайшее время мы с Вами свяжемся. Сейчас страница перезагрузится.</p>');
					formBtnSybmit.html('Забронировать').removeClass('disabled-btn');
					$('.form-reserve-room input').removeAttr('readonly');
					formBtnSybmit.removeAttr('readonly');
					th.trigger("reset");
				}, 1000);

			setTimeout(
				function () {
					window.location.reload();
				}, 5000);

		}).fail(function(){

			// уберает показ ошибок
			$('.form-reserve-room').find('.form-reserve-room__input-group').find('input[name]').removeClass('error');
			$('.form-reserve-room').find('.form-reserve-room__input-group').find('.form-reserve-room__info').html('');
			// показывает сообщение ошибки отправки
			formInfo.removeClass('info_acces');
			formInfo.addClass('info_error');
			setTimeout(
				function () {
					formInfo.html('<p>Ошибка отправки формы! Сейчас страница перезагрузится. <span>*</span></p>');
					formBtnSybmit.html('Забронировать').removeClass('disabled-btn');
					$('.form-reserve-room input').removeAttr('readonly');
					formBtnSybmit.removeAttr('readonly');
					th.trigger("reset");
				}, 1000);

			setTimeout(
				function () {
					window.location.reload();
				}, 5000);

		});
		return false;
	});
	// ВАЛИДАЦИЯ ФОРМЫ -END




	//---------------
	// SCROLL TOP BUTTON
	//---------------
	$('.scroll-top').on('click', function () {
		$('html, body').animate({ scrollTop: 0 }, 1500);
	});

	function showBtnScrollTop() {
		if ($(window).scrollTop() > 500 && $(window).scrollTop() > $(window).height()) {
			$('.scroll-top').fadeIn(900);
		}
		else {
			$('.scroll-top').fadeOut(900);
		}
	}
	$(window).on('load scroll', showBtnScrollTop);
	// SCROLL TOP BUTTON -END

	// main menu
	$('.main-menu a').on('click', function () {
		$('.overlay').addClass('hidden');
		$(".toggle-mnu").removeClass("on");
		$(".main-menu").addClass('d-mobile-none');
	});

	$(".toggle-mnu").on('click', function () {
		$(this).toggleClass("on");
		$(".main-menu").toggleClass('d-mobile-none');
		$('.overlay').toggleClass('hidden');
		return false;
	});

	$('.overlay').on('click', function () {
		$(this).toggleClass('hidden');
		$(".toggle-mnu").toggleClass("on");
		$(".main-menu").toggleClass('d-mobile-none');
	});
	// main menu -END

	// scroll to section after header
	$('.header__arrow').on('click', function () {
		let section1OffsetTop = $('.section-our-rooms').offset().top;
		$('html, body').animate({ scrollTop: section1OffsetTop }, 1000);
	});
	// scroll to section after header -END

	// scroll to order form
	$('.btn-scroll-to-order-form').on('click', function (e) {
		e.preventDefault();
		let elemSectionReserveRoom = $('.section-reserve-room').offset().top;
		$('html, body').animate({ scrollTop: elemSectionReserveRoom }, 1000);
	});
	// scroll to order form -END

	// menu auto scroll to section
	$('.main-menu a').on('click', function (e) {
		let elem = $(this).attr('href');
		let elemOffset = $(elem).offset().top;
		e.preventDefault();
		$('html, body').animate({ 'scrollTop': elemOffset }, 1000);
	});
	// menu auto scroll to section -END

	$(window).on('load', function () {
	});

	$(document).ready(function () {

		// $('.main-slider').slick();

		// preloader
		var preloader =  $('.preloader'),
				imageCount = $('img').length,
				persent = 100 / imageCount,
				progress = 0,
				loaded_img = 0;

		for( let i = 0; i < imageCount; i++ ){
			var img_copy = new Image();
			img_copy.src = document.images[i].src;
			img_copy.onload = img_load;
			img_copy.onerror = img_load;
		}

		function img_load(){
			progress += persent;
			loaded_img++;
			if( progress >= 100 || loaded_img == imageCount ){
				$('html').removeClass('overflow-hidden');
				preloader.delay(400).fadeOut('slow');
			}
		}
		// preloader -END

		// -------------
		// INPUT MASK
		// -------------
		$('.form-reserve-room input[name="phone"]').mask('+7 (999) 999-99-99', {
			placeholder: "+7 (999) 999-99-99",
			selectOnFocus: true
		});
		// INPUT MASK -END


		// swipe slider
		var mySwiper = new Swiper('.section-room-slider', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		})

		var sectionVideoSlider = new Swiper('.section-video-slider', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			slidesPerView: 1,
		})

		
		// swipe slider -END

		// magnific popup gallery
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				markup: '<div class="mfp-figure">' +
					'<div class="mfp-close"></div>' +
					'<div class="mfp-img"></div>' +
					'<div class="mfp-bottom-bar">' +
					'<div class="mfp-title"></div>' +
					'<div class="mfp-counter"></div>' +
					'</div>' +
					'</div>',
				verticalFit: true,
				titleSrc: function (item) {
					return item.el.attr('title') + '';
				}
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function (element) {
					return element.find('img');
				}
			}
		});
		// magnific popup gallery -END

		$('body').on('click', '.mfp-arrow.mfp-arrow-left', function () {
			$('.mfp-image-holder .mfp-content').removeClass('slideInRight');
			$('.mfp-image-holder .mfp-content').addClass('slideInLeft');
		});

		$('body').on('click', '.mfp-arrow.mfp-arrow-right', function () {
			$('.mfp-image-holder .mfp-content').removeClass('slideInLeft');
			$('.mfp-image-holder .mfp-content').addClass('slideInRight');
		});

	});


})(jQuery);