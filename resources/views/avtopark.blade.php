<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Аренда техники | Verom - Киевский Завод ЖБИ</title>
	<meta name="description" content="ЖБИ Киев - производим плиты перекрытия, бетонные кольца колодцев, бетонные заборы, фундаментные блоки и другие изделия из железобетона.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#000">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NZQSDZV');</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZQSDZV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<nav class="mob-mnu d-block d-sm-none">
		<div class="mob-mnu__close">
			<img src="img/cancel.svg" width="24" height="24" alt="verom">
		</div>
		<div class="mob-mnu__center">
			<div class="mob-mnu__content">
				<ul class="mob-mnu-list">
					<li class="mob-mnu-list__item"><a href="/">Главная</a></li>
					<li class="mob-mnu-list__item"><a href="jbi">Завод ЖБИ</a></li>
					<li class="mob-mnu-list__item"><a href="steel">Изделия из металла</a></li>
					<li class="mob-mnu-list__item"><a href="#" class="active">Аренда техники</a></li>
					<li class="mob-mnu-list__item"><a href="#contacts" class="anchor">Контакты</a></li>
				</ul>
			</div>
		</div>
		<div class="mob-mnu__bottom clearfix">
			@if (isset($contacts['phone-top']))
				<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone-top']) }}" class="mob-mnu-phone">+38 {{ $contacts['phone-top'] }}</a>
			@endif
			<div class="mob-mnu-lang">
				<a href="#" class="nav-lang__link active">Рус</a>
				<a href="#" class="nav-lang__link">Укр</a>
			</div>
		</div>
	</nav>

	<div class="content">
		<nav class="nav">
			<div class="container">
				<div class="row align-items-center align-items-sm-start">
					<div class="col-lg-3 col-md-2 col-sm-3 col-6">
						<a href="/">
							<img src="img/logo.png" alt="Verom" class="nav-logo">
						</a>
					</div>
					<div class="col-6 d-block d-sm-none">
						<div class="mob-mnu__link">
							<span>Меню</span>
							<img src="img/menu.svg" width="32" height="32" alt="verom">
						</div>
					</div>
					<div class="col-lg-6 col-md-7 col-sm-9 col-6 d-none d-sm-block">
						<ul class="nav-list">
							<li class="nav-list__item"><a href="/">Главная</a></li>
							<li class="nav-list__item"><a href="jbi">Завод ЖБИ</a></li>
							<li class="nav-list__item"><a href="steel">Изделия из металла</a></li>
							<li class="nav-list__item"><a href="#" class="active">Аренда техники</a></li>
							<li class="nav-list__item"><a href="#contacts" class="anchor">Контакты</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 offset-sm-8 offset-md-0 mt80 d-none d-sm-block">
						@if (isset($contacts['phone-top']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone-top']) }}" class="nav-phone">+38 {{ $contacts['phone-top'] }}</a>
						@endif
						<div class="nav-lang">
							<a href="#" class="nav-lang__link active">Рус</a>
							<a href="#" class="nav-lang__link">Укр</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<header class="avtopark">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 offset-xl-1">
						<h1 class="avtopark-ttl">Полный выбор спецтехники<br>под различные задачи в<br>строительстве</h1>
						<a href="#consalt" class="avtopark-btn fancybox">Подробнее</a>
					</div>
				</div>
			</div>
		</header>
		<img src="img/avtopark_bg_xs.jpg" alt="verom" class="d-block d-md-none xs-bg xs-bg_avtopark">

		<section id="catalog" class="park">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-10">
						<div class="row justify-content-center">
							<div class="col-xs-auto">
								<div class="park-ttl clearfix">
									<h3 class="park-ttl__name">наш Автопарк:</h3>
									<span class="park-ttl__note">Our vehicle<br>fleet</span>
								</div>
							</div>
						</div>
						<div class="row justify-content-center d-none d-sm-flex">
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>01 /</span>Малотоннажный автомобиль</div>
									<div class="park-item__img">
										<img src="img/park.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Малотоннажный автомобиль">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>02 /</span>Грузовой фургон</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park2.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Грузовой фургон">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>03 /</span>Полуприцеп (тент, рефрижератор, изотерм)</div>
									<div class="park-item__img">
										<img src="img/park3.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Полуприцеп (тент, рефрижератор, изотерм)">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>04 /</span>Автопоезд</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park4.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Автопоезд">Просчитать</a>
								</div>
							</div>
						</div>
						<div class="row justify-content-center d-none d-sm-flex">
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>05 /</span>Бетоновоз миксер</div>
									<div class="park-item__img">
										<img src="img/park5.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Бетоновоз миксер">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>06 /</span>Контейнеровоз</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park6.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Контейнеровоз">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>07 /</span>Экскаватор погрузчик JCB4CX</div>
									<div class="park-item__img">
										<img src="img/park7.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Экскаватор погрузчик JCB4CX">Просчитать</a>
								</div>
							</div>
						</div>

						<div class="row d-block d-sm-none">
							<div class="park-slider">
								<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>01 /</span>Малотоннажный автомобиль</div>
									<div class="park-item__img">
										<img src="img/park.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Малотоннажный автомобиль">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>02 /</span>Грузовой фургон</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park2.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Грузовой фургон">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>03 /</span>Полуприцеп (тент, рефрижератор, изотерм)</div>
									<div class="park-item__img">
										<img src="img/park3.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Полуприцеп (тент, рефрижератор, изотерм)">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>04 /</span>Автопоезд</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park4.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Автопоезд">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>05 /</span>БЕТОНОВОЗ МИКСЕР</div>
									<div class="park-item__img">
										<img src="img/park5.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Бетоновоз миксер">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>06 /</span>Контейнеровоз</div>
									<div class="park-item__img park-item__img_2">
										<img src="img/park6.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Контейнеровоз">Просчитать</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="park-item">
									<div class="park-item__ttl"><span>07 /</span>ЭКСКАВАТОР ПОГРУЗЧИК JCB4CX</div>
									<div class="park-item__img">
										<img src="img/park7.png" alt="verom">
									</div>
									<a href="#modal" class="park-item__btn fancybox" data-item="Экскаватор погрузчик JCB4CX">Просчитать</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="capability">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 offset-lg-1 col-md-6">
						<div class="capability-ttl clearfix">
							<h3 class="capability-ttl__name">Наши возможности</h3>
							<span class="capability-ttl__note">our opportunities</span>
						</div>
						<p class="capability-txt">Мы торговый дом VEROM - компания, которая объединила в себе 3 собственных завода ЖБИ. Мы предоставляем полный перечень товаров и услуг, от изготовления изделий из железобетона и металла, до аренды спецтехники, что позволит Вам найти надежного партнёра и решить все задачи по строительству.<br><br>Наш автопарк насчитывает 35 единиц техники, которые своевременно доставят груз к Вам на объект. Это позволит добиться большой экономии на логистике, и значительно снизить общую стоимость товара для Вас. Все ЖБИ вы можете забрать самостоятельно в Киев с завода, либо мы привезём ЖБИ по Украине за 1 день.<br><br>Мы имеем собственный автопарк в который входят: манипуляторы, спецтехника типа JCB, тягачи 10 и 20 т., самосвалы, миксера, которые решат все ваши задачи при строительстве.</p>
						<a href="#form" class="capability-btn fancybox">Расчет стоимости</a>
					</div>
					<div class="col-md-6">
						<img src="img/capability_img.png" alt="verom" class="capability-img">
					</div>
				</div>
			</div>
		</section>

		<section class="about about_avtopark">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-6 order-md-2">
						<div class="about-ttl">
							<h3 class="about-ttl__name">о нас</h3>
							<span class="about-ttl__note">about us</span>
						</div>
						<p class="about-txt">Завод VEROM- Вся наша продукция соответствуют стандартам ГОСТ и ДСТУ.<br><br>Сотрудники нашей компании помогут арендовать спецтехнику, подобрать необходимый вид транспорта, провести необходимые расчеты, и правильно оформить всю сопроводительную документацию.<br><br>Наши клиенты оценят скорость расчета стоимости, качество техники и её наименование.<br><br>Мы решаем задачи, которые непосильны другим! С нами застройщик экономит квадратные метры, ускоряет процесс строительства и экономит деньги.</p>
						<a href="#consalt" class="about-btn fancybox">Получить консультацию</a>
					</div>
					<div class="col-lg-6 col-md-6 offset-lg-1  order-md-1">
						<img src="img/video_avtopark.jpg" alt="verom" class="about-video">
					</div>
				</div>
			</div>
		</section>

		<section class="gallery gallery_steel">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto gallery-ttl">
						<h3 class="gallery-ttl__name">Галерея</h3>
						<span class="gallery-ttl__note">gallery</span>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="gallery-slider">
							@if(!empty($galleries['images']))
								@foreach($galleries['images'] as $item)
									<a href="{{ $item }}" data-fancybox="gallery" class="gallery-slider__slide fancybox" style="background-image: url({{ '/images/uploads/small/'.basename($item) }})"></a>
								@endforeach
							@endif
						</div>
					</div>
				</div>
				<div class="row align-items-center justify-content-between">
					<div class="col-md-1 col-2">
						<div class="gallery-slider__arrow gallery-slider__arrow-prev"></div>
					</div>
					<!-- <div class="col-md-10 col-8">
						<div class="gallery-slider__dots"></div>
					</div> -->
					<div class="col-md-1 col-2">
						<div class="gallery-slider__arrow gallery-slider__arrow-next"></div>
					</div>
				</div>
			</div>
		</section>

		@include('contacts')
	</div>

	<div class="d-none">
		<div id="modal" class="modal">
			<h3 class="modal-ttl">Оставьте заявку и мы просчитаем Вам стоимость аренды авто</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Расчет стоимости аренды авто">
				<input type="hidden" name="subtitle" class="subttl">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Просчитать</button>
			</form>
		</div>

		<div id="form" class="modal">
			<h3 class="modal-ttl">Оставьте заявку и мы просчитаем Вам стоимость аренды авто</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Расчет стоимости аренды авто">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Просчитать</button>
			</form>
		</div>

		<div id="consalt" class="modal">
			<h3 class="modal-ttl">Оставьте заявку и наш менеджер предоставит Вам полную информацию</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Получить консультацию">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Получить консультацию</button>
			</form>
		</div>
	</div>

	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>

</body>
</html>