<?php
session_start();

$Random1 = rand(10, 50);
$Random2 = rand(10, 50);
$RandomSum = $Random1 + $Random2;
$RandomSumImg = $Random1 . '+' . $Random2;
$_SESSION['captcha'] = md5($RandomSum);
$_SESSION['RandomSumImg'] = $RandomSumImg;
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>

	<!-- <base href="/"> -->
	<meta charset="utf-8">
	<title>Отель Hotel-Ekzotik</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template meta SEO -->
	<meta name="description" content="Все номера отделаны в домашнем уютном стиле и не вызывают ощущения что вы находитесь в отеле.">
	<meta name="keywords" content="Отель, Сочи, Отель Hotel-Ekzotik, Hotel-Ekzotik, Адлер">

	<meta property="og:title" content="Hotel-Ekzotik">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Все номера отделаны в домашнем уютном стиле и не вызывают ощущения что вы находитесь в отеле.">
	<meta property="og:url" content="http://hotel-ekzotik.ru/">
	
	<meta name="robots" content="index, follow">
	<!-- Template meta SEO -END -->

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="assets/dest/img/header/header-background.jpg">
	<link rel="icon" href="assets/dest/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/dest/img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
	
	<noscript>
		<link rel="stylesheet" href="assets/css/main.min.css">
	</noscript>
</head>

<body>

	<div class="overlay hidden"></div>
	<div class="preloader d-none">
		<div class="preloader-container">
			<div class="preloader_posa sk-rotating-plane"></div>
		</div>
	</div>
	<script>
		// preloader
		document.getElementsByTagName('html')[0].classList.add('overflow-hidden');
		document.querySelector('.preloader').classList.remove('d-none');
		// preloader -END
	</script>


	<!-- КАРТИНКА В ШАПКЕ -->
	<header class="header" style="background: url(assets/dest/img/header/header-background.jpg) no-repeat top center / cover">

		<div class="container-fluid">
			<div class="row flex-column align-content-stretch nowrap">

				<div class="header__header header-container-menu">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-sm-6 d-flex align-items-center">
								<nav class="main-menu header__menu d-mobile-none">
									<ul>
										<li><a href=".section-our-rooms">Номера</a></li>
										<li><a href=".section-about-hotel">Об отеле</a></li>
										<li><a href=".section-video">Видео</a></li>
										<li><a href=".section-gallery">Фотогалерея</a></li>
										<li><a href=".section-reserve-room">Бронировани</a></li>
									</ul>
								</nav>
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="contact-info-container">
									<div class="contact-info header__contact-info">
										<address>г.Сочи, Адлерский район, ул. Чкалова, д. 27</address>
										<a href="tel:(918)401-46-68">тел. (918) 401-46-68,</a>
									</div>
									<div class="header-button-container">
										<a href="/" class="btn btn__header btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="header__content header-content-container">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="header__content header-conatainer-content">
									<img class="logo header__logo" src="assets/dest/img/logo/logo.png" alt="hotel-ekzotik">
									<h1>hotel-ekzotik</h1>
									<h2>Сочи - Адлер</h2>
									<h3>Добро пожаловать</h3>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- header absolute position elements -->
		<div class="header__arrow header-arrow"></div>
		<a href="#" class="toggle-mnu toggle_posa d-lg-none"><span></span></a>
		<!-- header absolute position elements -END -->

	</header>

	<main>

		<section class="section section-our-rooms">
			<div class="container">
				<div class="row">

					<div class="section__title-container col-12 col-md-8">
						<h2>Наши номера</h2>
						<p>
							Мы предлагаем вам три типа номеров. Все наши номера
							оборудованы ванными комнатами и wi-fi.
						</p>
					</div>

					<div class="section__content-container col-12">
						<div class="section__rooms">

							<div class="room section-our-rooms__room">
								<div class="row">
									<div class="col-12 col-md-8 room__slider">
										<!-- Slider main container -->
										<div class="swiper-container section-room-slider ">
											<!-- Additional required wrapper -->
											<div class="swiper-wrapper">
												<!-- Slides -->
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-1.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-1.jpg" alt="номер"></noscript>
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-1.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-1.jpg" alt="номер"></noscript>
											</div>
											<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
											<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
										</div>
									</div>
									<div class="col-12 col-md-4 room__info">
										<h3 class="room__title">Люкс</h3>
										<div class="room__number-of-persons">2 человека</div>
										<div class="room__price">6000 р.</div>
										<div class="room__description">
											Размер 25 кв.м.<br>
											2 кровати<br>
											Быстрый интернет
										</div>
										<a href="/" class="btn btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>

							<div class="room section-our-rooms__room">
								<div class="row">
									<div class="col-12 col-md-8 room__slider">
										<!-- Slider main container -->
										<div class="swiper-container section-room-slider ">
											<!-- Additional required wrapper -->
											<div class="swiper-wrapper">
												<!-- Slides -->
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-2.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-2.jpg" alt="номер"></noscript>
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-2.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-2.jpg" alt="номер"></noscript>
											</div>
											<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
											<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
										</div>
									</div>
									<div class="col-12 col-md-4 room__info">
										<h3 class="room__title">Люкс</h3>
										<div class="room__number-of-persons">3 человека</div>
										<div class="room__price">9000 р.</div>
										<div class="room__description">
											Размер 30 кв.м.<br>
											Большая двуспальная кровать<br>
											Мини-бар, чайник и кофеварка
										</div>
										<a href="/" class="btn btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>

							<div class="room section-our-rooms__room">
								<div class="row">
									<div class="col-12 col-md-8 room__slider">
										<!-- Slider main container -->
										<div class="swiper-container section-room-slider">
											<!-- Additional required wrapper -->
											<div class="swiper-wrapper">
												<!-- Slides -->
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-3.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-3.jpg" alt="номер"></noscript>
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-3.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-3.jpg" alt="номер"></noscript>
											</div>
											<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
											<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
										</div>
									</div>
									<div class="col-12 col-md-4 room__info">
										<h3 class="room__title">Люкс</h3>
										<div class="room__number-of-persons">4 человека</div>
										<div class="room__price">13000 р.</div>
										<div class="room__description">
											Размер 37 кв.м.<br>
											Большая двуспальная кровать<br>
											Мини-бар, чайник и кофеварка<br>
											Вид на город
										</div>
										<a href="/" class="btn btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>

							<div class="room section-our-rooms__room">
								<div class="row">
									<div class="col-12 col-md-8 room__slider">
										<!-- Slider main container -->
										<div class="swiper-container section-room-slider ">
											<!-- Additional required wrapper -->
											<div class="swiper-wrapper">
												<!-- Slides -->
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-4.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-4.jpg" alt="номер"></noscript>
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-4.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript><img class="swiper-slide" src="assets/dest/img/rooms/room-4.jpg" alt="номер"></noscript>
											</div>
											<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
											<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
										</div>
									</div>
									<div class="col-12 col-md-4 room__info">
										<h3 class="room__title">Люкс</h3>
										<div class="room__number-of-persons">3 человека</div>
										<div class="room__price">15000 р.</div>
										<div class="room__description">
											Размер 30 кв.м.<br>
											Большая двуспальная кровать<br>
											Мини-бар, чайник и кофеварка<br>
											Индивидуальный балкон
										</div>
										<a href="/" class="btn btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>

							<div class="room section-our-rooms__room">
								<div class="row">
									<div class="col-12 col-md-8 room__slider">
										<!-- Slider main container -->
										<div class="swiper-container section-room-slider ">
											<!-- Additional required wrapper -->
											<div class="swiper-wrapper">
												<!-- Slides -->
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-5.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript>
													<img class="swiper-slide" src="assets/dest/img/rooms/room-5.jpg"  alt="номер">
												</noscript>
												<img class="swiper-slide b-lazy" data-src="assets/dest/img/rooms/room-5.jpg" src="assets/dest/img/loader.gif" alt="номер">
												<noscript>
													<img class="swiper-slide" src="assets/dest/img/rooms/room-5.jpg" alt="номер">
												</noscript>
											</div>
											<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
											<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
										</div>
									</div>
									<div class="col-12 col-md-4 room__info">
										<h3 class="room__title">Люкс</h3>
										<div class="room__number-of-persons">4 человека</div>
										<div class="room__price">18000 р.</div>
										<div class="room__description">
											Размер 37 кв.м.<br>
											Большая двуспальная кровать<br>
											Мини-бар, чайник и кофеварка<br>
											Вид на город<br>
											Индивидуальный балкон
										</div>
										<a href="/" class="btn btn-scroll-to-order-form">Забронировать</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="section section-about-hotel section__bgc-blue">
			<div class="container">
				<div class="row">

					<div class="col-12 col-sm-12 col-md-6 section__left section-about-hotel__contact-info">
						<h2>Об отеле</h2>
						<address>
							г. Сочи, Адлерский район,<br>
							ул. Чкалова дом 27
						</address>
						<a href="tel:(918)401-46-68">8 (918) 303 60 06</a>
					</div>
					<div class="col-12 col-sm-12 col-md-6 section__right section-about-hotel__description">
						<p>
							HOTEL EKZOTIK - мини гостиница адлер. В номере: кондиционер (или Сплит-система), шкаф, две тумбочки, трельяж, пуфик, холодильник, кровати, столик, стул, телевизор. В 20 номерах есть свои балконы. Все номера отделаны в домашнем уютном стиле и не вызывают ощущения что вы находитесь в отеле. В отеле располагаются три общих лоджии со столами, обычно на лоджиях вечером под теплый ветер с моря легко пьется бутылочка настоящего домашнего вина.
						</p>
						<p>
							На территории отеля уютно обставленные столики переплетаются с изящными цветами и пальмами. Так же есть паркинг для машин. В отеле есть четыре кухни, равномерно распределенные между номерами, в кухне есть: набор посуды, сковородки, чайник, кастрюли, газовая плита, если вы приехали на отдых ,не имея желание готовить, что обычно и бывает: к вашим услугам столовые с четырьмя видами кухонь: узбекская, кавказская, русская, абхазская. Причем если вам не понравилась приготовленная еда в столовой, вы всегда можете выбрать другую столовую с такой же национальной кухней - ведь в радиусе 100м от гостиницы их 17. Так же частная гостиница адлер ежедневно убирается три раза в день.
						</p>
						<p>
							Наш отель все эти годы помогал и помогает людям провести свой отдых так, чтобы заряд той энергии, которую они получили, отдыхая у нас, им хватило на весь год, ведь наш отель дает вам возможность почувствовать домашний уют и гармонию нахождения между горами и морем, а молодежь помимо купания в море и экскурсиями всегда сможет весело провести ночное время в близлежащих заведениях
						</p>
					</div>

				</div>
			</div>
		</section>

		<!-- СЕКЦИЯ С ВИДЕО (YouTube) -->
		<!--
			Убрать "display: none", что бы сделать секцию видимой;
			"background-color" - цвет фона секции;
		-->
		<section class="section section-video section__video">
			<div class="container">
				<div class="row justify-content-center">
					<div class="section__title-container col-12 col-md-5">
						<h2>Видео</h2>
						<p>Адлер-Сочи. Океанариум.</p>
					</div>
					<div class="section__content-container col-12 col-md-7">

						<!-- Slider main container -->
						<div class="swiper-container section-video-slider">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="thumb-wrap swiper-slide">
									<noscript>
										<iframe width="916" height="515" src="https://www.youtube.com/embed/Me6XwaVhfcU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</noscript>
									<iframe class="b-lazy" width="916" height="515" data-src="https://www.youtube.com/embed/Me6XwaVhfcU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="thumb-wrap swiper-slide">
									<noscript>
										<iframe width="916" height="515" src="https://www.youtube.com/embed/Me6XwaVhfcU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</noscript>
									<iframe class="b-lazy" width="916" height="515" data-src="https://www.youtube.com/embed/Me6XwaVhfcU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
							
						</div>

						<div class="section-video-slide__button-container d-flex">
							<div class="swiper-button-prev swiper-button"><img src="assets/dest/img/rooms/arrow-left.png" alt="назад"></div>
							<div class="swiper-button-next swiper-button"><img src="assets/dest/img/rooms/arrow-right.png" alt="вперед"></div>
						</div>

					</div>
				</div>
			</div>
		</section><!-- /.section section-video -->


		<section class="section section-price section__bgc-blue">
			<div class="container">
				<div class="section-price__title-conatiner">
					<h2 class="section-price__title">Цены указаны за номер в сутки.</h2>
					<h3 class="section-price__subtitle">Курортный сбор оплачивается отдельно.</h3>
				</div>
				<div class="section-price__table-conatainer">

					<div class="table section-price__table">
						<div class="table__table">
							<div class="table__row">
								<div class="table__cell"> </div>
								<div class="table__cell table__th">C 1 октября по 31 мая</div>
								<div class="table__cell table__th">C 1 июня по 12 июня</div>
								<div class="table__cell table__th">C 13 июня по 30 июня</div>
								<div class="table__cell table__th">C 1 июля по 10 июля</div>
								<div class="table__cell table__th">C 11 июля по 31 июля</div>
								<div class="table__cell table__th">C 1 августа по 20 августа</div>
								<div class="table__cell table__th">C 21 августа по 31 августа</div>
								<div class="table__cell table__th">C 1 сентября по 20 сентября</div>
								<div class="table__cell table__th">C 21 сентября по 30 сентября</div>
								
							</div>
							<div class="table__row">
								<div class="table__cell">2-х местный номер люкс</div>
								<div class="table__cell">900</div>
								<div class="table__cell">900</div>
								<div class="table__cell">1400</div>
								<div class="table__cell">2000</div>
								<div class="table__cell">2200</div>
								<div class="table__cell">2200</div>
								<div class="table__cell">1900</div>
								<div class="table__cell">1500</div>
								<div class="table__cell">1000</div>
							</div>
							<div class="table__row">
								<div class="table__cell">3-х местный номер люкс</div>
								<div class="table__cell">1200</div>
								<div class="table__cell">1200</div>
								<div class="table__cell">1900</div>
								<div class="table__cell">2400</div>
								<div class="table__cell">2700</div>
								<div class="table__cell">2700</div>
								<div class="table__cell">2300</div>
								<div class="table__cell">1900</div>
								<div class="table__cell">1200</div>
							</div>
							<div class="table__row">
								<div class="table__cell">4-х местный номер люкс</div>
								<div class="table__cell">1500</div>
								<div class="table__cell">1600</div>
								<div class="table__cell">2200</div>
								<div class="table__cell">2900</div>
								<div class="table__cell">3200</div>
								<div class="table__cell">3200</div>
								<div class="table__cell">2700</div>
								<div class="table__cell">2200</div>
								<div class="table__cell">1600</div>
							</div>
							<div class="table__row">
								<div class="table__cell">3-х местный номер люкс с балконом</div>
								<div class="table__cell">1300</div>
								<div class="table__cell">1500</div>
								<div class="table__cell">2100</div>
								<div class="table__cell">2700</div>
								<div class="table__cell">3000</div>
								<div class="table__cell">3000</div>
								<div class="table__cell">2600</div>
								<div class="table__cell">2100</div>
								<div class="table__cell">1500</div>
							</div>
							<div class="table__row">
								<div class="table__cell">4-х местный номер люкс с балконом</div>
								<div class="table__cell">1700</div>
								<div class="table__cell">1800</div>
								<div class="table__cell">2500</div>
								<div class="table__cell">3200</div>
								<div class="table__cell">3500</div>
								<div class="table__cell">3500</div>
								<div class="table__cell">3000</div>
								<div class="table__cell">2500</div>
								<div class="table__cell">1800</div>
							</div>

						</div>
					</div>

				</div><!-- /.section-price__table-conatainer -->
				<div class="section-price__description-container">
					<p>
						Для гарантированной брони требуется сделать предоплату на карту сбербанка 4274 2752 0830 1829 Кахкцян Амбарцум Русланович.
						Размер предоплаты уточняйте по телефону 8 (918) 303 60 06.
					</p>
				</div>
			</div>
		</section><!-- /.section section-price -->

		
		<section class="section section-gallery">
			<div class="container">

				<div class="section-gallery__title-container">
					<h2>Фотогалерея</h2>
					<p>
						Отель "Hotel-Ekzotik" находится в Адлерском районе города Сочи,<br>
						в 5 км от, Олимпийского парка. Всего в 40 км от Красной Поляны.
					</p>
				</div>

			</div>

			<div class="container-fluid">
				<div class="section-gallery__gallery-container popup-gallery">

					<div class="section-gallery__gallery-row">
						<div class="row">
							<div class="col-12 col-md-8 section-gallery__gallery-column">
								<a href="assets/dest/img/gallery/gallery-1.jpg" title="Отель Ekzotik" data-effect="mfp-move-horizontal">
									<img class="b-lazy" data-src="assets/dest/img/gallery/gallery-1.jpg" src="assets/dest/img/loader.gif" alt="Отель Ekzotik">
									<noscript>
										<img class="b-lazy" src="assets/dest/img/gallery/gallery-1.jpg"  alt="Отель Ekzotik">
									</noscript>
								</a>
							</div>
							<div class="col-12 col-md-4 section-gallery__gallery-column section-gallery__gallery-column-left">
								<a href="assets/dest/img/gallery/gallery-2.jpg" title="Отель Ekzotik">
									<img class="b-lazy" data-src="assets/dest/img/gallery/gallery-2.jpg" src="assets/dest/img/loader.gif" alt="Отель Ekzotik">
									<noscript>
										<img class="b-lazy" src="assets/dest/img/gallery/gallery-2.jpg" alt="Отель Ekzotik">
									</noscript>
								</a>
								<a href="assets/dest/img/gallery/gallery-3.jpg" title="Отель Ekzotik">
									<img class="b-lazy" data-src="assets/dest/img/gallery/gallery-3.jpg" src="assets/dest/img/loader.gif" alt="Отель Ekzotik">
									<noscript>
										<img src="assets/dest/img/gallery/gallery-3.jpg" alt="Отель Ekzotik">
									</noscript>
								</a>
							</div>
						</div>
					</div>

					<div class="section-gallery__gallery-row">
						<a href="assets/dest/img/gallery/gallery-4.jpg" title="Отель Ekzotik">
							<img class="b-lazy" data-src="assets/dest/img/gallery/gallery-4.jpg" src="assets/dest/img/loader.gif" alt="Отель Ekzotik">
							<noscript>
								<img src="assets/dest/img/gallery/gallery-4.jpg" alt="Отель Ekzotik">
							</noscript>
						</a>
					</div>

				</div>
			</div>

		</section>

		<section class="section section_padding-0 section-reserve-room" style="background: #000 url(assets/dest/img/order/order__background.jpg) no-repeat center center / cover">
			<div class="section-reserve-room__overlay">
				<div class="container">

					<div class="section__title-container section-reserve-room__title-container">
						<h2>Забронируйте номер</h2>
						<p>
							Заполните форму с информацией<br>
							и мы отправим вам e-mail подтверждение
						</p>
					</div>
					<div class="section__content-container section-reserve-room__content-container">
						<form class="form-reserve-room row justify-content-center	">
							<div class="form-reserve-room__input-hidden">
								<input type="hidden" id="captchaClient">
							</div>
							<div class="col-12 col-md-6 form-reserve-room__input-group">
								<label for="name">Ваше имя</label>
								<input type="text" name="name" id="name" data-placeholder="Ваше имя" placeholder="Ваше имя">
								<div class="form-reserve-room__input-info"></div>
							</div>
							<div class="col-12 col-md-6 form-reserve-room__input-group">
								<label for="phone">Телефон</label>
								<input type="tel" name="phone" id="phone" data-placeholder="Телефон" placeholder="Телефон">
								<div class="form-reserve-room__input-info"></div>
							</div>

							<div class="col-12 col-md-6 col-lg-5 form-reserve-room__input-group form-reserve-room__captcha text-center">
								<label for="captcha">Введите капчу</label>
								<input type="text" name="captcha" id="captcha" placeholder="Введите капчу">
								<div class="form-reserve-room__input-info"></div>
								<div class="form-reserve-room__captcha-title"><span>Посчитайте: </span><img src="captcha.php" alt="captcha"></div>
							</div>

							<div class="col-12 text-center form-reserve-room__button-container">
								<button type="submit" class="btn form-reserve-room__btn">Забронировать</button>
							</div>
							<div class="col-12 form-reserve-room__info"></div>
						</form>
					</div>

				</div>
			</div>
		</section><!-- /.section section-reserve-room -->

		<section class="section section-contact">
			<div class="container">

				<div class="section-contact__title text-center">
					<h2>РФ, г.Сочи, Hotel-Ekzotik</h2>
				</div>
				<div class="section-contact__line-container text-center">
					<div class="section-contact__line line"></div>
				</div>
				<div class="section-contact__contact">
					<a href="tel:(918)401-46-68" >Телефон: 8 (918) 303 60 06</a>
					<a href="mailto:malahit-adler@mail.ru">E-mail: hotel-ekzotik@mail.ru</a>
				</div>
				<div class="section-contact__social">
					<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"><!-- icon --></i></a>
					<a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"><!-- icon --></i></a>
					<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"><!-- icon --></i></a>
					<a href="https://msng.link/wa/79999999999" target="_blank"><i class="fab fa-whatsapp"><!-- icon --></i></a>
				</div>

			</div>
		</section>
		<!-- /.section-contact -->

		<div class="maps section-maps" id="YaMaps">
		</div><!-- /.section-maps -->

	</main>

	<div class="scroll-top">
		<i class="fas fa-angle-up"><!-- icon --></i>
	</div>

	<!--[if lt IE 9]>
	<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
	<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
	<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="assets/libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<!-- Load CSS -->
	<script>
		function loadCSS(hf) {
			var ms=document.createElement("link");ms.rel="stylesheet";
			ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);
		}
		loadCSS("assets/css/main.min.css");   //User Styles + Media Queries
	</script>
	

	<!-- Load Scripts -->
	<script>var scr = {"scripts":[
		{"src" : "assets/js/scripts.min.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>

	<!-- <script src="assets/libs/blaz/blazy.min.js"></script> -->

</body>
</html>