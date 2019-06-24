<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Изделия из металла | Verom - Киевский Завод ЖБИ</title>
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
					<li class="mob-mnu-list__item"><a href="#" class="active">Изделия из металла</a></li>
					<li class="mob-mnu-list__item"><a href="avtopark">Аренда техники</a></li>
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
						<img src="img/logo.png" alt="Verom" class="nav-logo">
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
							<li class="nav-list__item"><a href="#" class="active">Изделия из металла</a></li>
							<li class="nav-list__item"><a href="avtopark">Аренда техники</a></li>
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

		<header class="steel">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 offset-md-3">
						<h1 class="steel-ttl">Изделия из металла - придадим формы и изготовим любые типовые изделия по вашему индивидуальному заказу!</h1>
						<a href="#consalt" class="steel-btn fancybox">Подробнее</a>
					</div>
				</div>
			</div>
		</header>
		<img src="img/steel_bg_xs.png" alt="verom" class="d-block d-md-none xs-bg">

		<section id="catalog" class="catalog">
			<div class="container">
				<div class="row">
					<div class="col-xs-auto offset-xl-1 catalog-ttl clearfix">
						<h3 class="catalog-ttl__name">Наши изделия</h3>
						<span class="catalog-ttl__note"></span>
					</div>
				</div>
			</div>
			<div class="catalog-slider d-none d-sm-block">
				<div class="catalog-slider__slide">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-10">
								<div class="row">
									@foreach ($catalog as $item)
										<div class="col-md-3 col-sm-6">
											<div class="catalog-item">
												<div class="catalog-item__ttl"><span>{{ $item['numb'] }} /</span>{{ $item['name'] }}</div>
												<div class="catalog-item__img">
													<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
												</div>
												<a href="/steel/{{ $item['id'] }}" class="catalog-item__btn">Просчитать</a>
											</div>
										</div>
										@if($loop->iteration % 12 == 0 && !$loop->last)
											</div></div></div></div></div>
											<div class="catalog-slider__slide">
												<div class="container">
													<div class="row justify-content-center">
														<div class="col-xl-10">
															<div class="row">
										@endif
										@if($loop->last)
											</div></div></div></div></div>
										@endif
									@endforeach
			</div>
			<div class="container">
				<div class="row d-block d-sm-none">
					<div class="catalog-slider_xs">
						@foreach ($catalog as $item)
							<div class="col">
								<div class="catalog-item">
									<div class="catalog-item__ttl"><span>{{ $item['numb'] }} /</span>{{ $item['name'] }}</div>
									<div class="catalog-item__img">
										<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
									</div>
									<a href="/steel/{{ $item['id'] }}" class="catalog-item__btn">Просчитать</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- <div class="container d-none d-sm-block">
				<div class="row justify-content-center">
					<div class="col-xl-10">
						<div class="catalog-slider__dots"></div>
					</div>
				</div>
			</div> -->
		</section>

		<section id="service" class="service">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="service-ttl clearfix">
							<h3 class="service-ttl__name">Наши услуги</h3>
							<span class="service-ttl__note"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service1.png);">
								<div class="service-item__ttl"><span>01 /</span><p>Изготовление металлоформ для применения в сфере производства ЖБИ</p></div>
							</div>
							<p class="service-item__txt">Формы и оборудование для ЖБИ являются основным направлением деятельности нашей компании. Мы предлагаем изготовление металлоформ и оборудования как для строительства жилых, так и промышленных помещений. Формы и оборудование ЖБИ, производимые в нашей компании, могут иметь различные модификации:</p>
							<ul class="service-item__list">
								<li>силовые, с раскрывающимися бортами (с гибкими бортами);</li>
								<li>многоместные переналаживаемые;</li>
								<li>с фасонной поверхностью поддона, со съемными вкладышами и проемообразователями.</li>
							</ul>
							<p class="service-item__txt">Металлоформы и оборудование ЖБИ изготавливаются в соответствии с требованиями стандартов по утвержденной рабочей документации.</p>
							<a href="#modal" class="service-item__btn fancybox" data-item="Изготовление металлоформ для применения в сфере производства ЖБИ">Расчет</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service2.png);">
								<div class="service-item__ttl"><span>02 /</span><p>Изготовление металлоконструкций</p></div>
							</div>
							<p class="service-item__txt">Наша компания занимается:</p>
							<ul class="service-item__list">
								<li>проектированием, производством и монтажом металлоконструкций;</li>
								<li>производством металлических форм и опор;</li>
								<li>производством ограждений, заборов;</li>
								<li>производством лестниц, перил;</li>
								<li>производством рекламных щитов;</li>         
								<li>производством беседок, скамеек, козырьков;</li>
								<li>производством металлокаркасов под мебель.</li>
							</ul>
							<a href="#modal" class="service-item__btn fancybox" data-item="Изготовление металлоконструкций">Расчет</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service3.png);">
								<div class="service-item__ttl"><span>03 /</span><p>Архитектурная резка металла</p></div>
							</div>
							<p class="service-item__txt">Мы предоставляем услуги по эксклюзивной, художественной резке листового металла:</p>
							<ul class="service-item__list">
								<li>указателей и декоративных элементов, металлических вывесок, адресных табличек, декоративных изделий из металла для ландшафтного дизайна, фасадов, скамеек, навесов, мангалов, для применения в кованных изделиях;</li>
								<li>изготовление рамок, решеток, ограждений;</li>
								<li>резка букв и элементов декора;</li>
								<li>мы выполняем работы по нашим примерам, либо индивидуальным чертежам. Все заказы оцениваются индивидуально.</li>
							</ul>
							<a href="#modal" class="service-item__btn fancybox" data-item="Архитектурная резка металла">Расчет</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service4.png);">
								<div class="service-item__ttl"><span>04 /</span><p>Производство кладочной сетки</p></div>
							</div>
							<p class="service-item__txt">Кладочная сетка ВР относится к сварным армирующим сеткам, сделанным из стальной низкоуглеродистой проволоки ВР 1.</p>
							<p class="service-item__txt">В отличие от рулонных материалов, сетка кладочная изготавливается плоскими двухметровыми листами с разной шириной, необходимая под различные задачи при строительстве.</p>
							<p class="service-item__txt">В основном, она применяется для защиты бетонных полов, кирпичной кладки и дорожных покрытий от разрушений и растрескиваний.</p>
							<a href="#modal" class="service-item__btn fancybox" data-item="Производство кладочной сетки">Расчет</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service5.png);">
								<div class="service-item__ttl"><span>05 /</span><p>Плазменная резка и гибка металла</p></div>
							</div>
							<p class="service-item__txt">Услуги по плазменной резке листового металла, а именно:</p>
							<ul class="service-item__list">
								<li>выполнение всевозможных заготовок, украшений для изготовления стальных заборов, ворот, ограждений, перил и лестниц;</li>
								<li>изготовление рамок, решеток, ограждений;</li>
								<li>резка и гибка букв, элементов декора, гербов и логотипов. Изготовление деталей и их гибка для типовых металлоконструкций.</li>
							</ul>
							<a href="#modal" class="service-item__btn fancybox" data-item="Плазменная резка и гибка металла">Расчет</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item__img" style="background-image: url(img/service6.png);">
								<div class="service-item__ttl"><span>06 /</span><p>Изготовление изделий для интерьера</p></div>
							</div>
							<p class="service-item__txt">Все виды металлоконструкций для мебели и интерьера. Наше производство имеет большие возможности. Мы предлагаем Вам «ПОД ЗАКАЗ» изготовить изделия по Вашим эскизам ЛЮБОЙ СЛОЖНОСТИ по индивидуальному производству дизайнерских металлоконструкций для дома и офиса.</p>
							<a href="#modal" class="service-item__btn fancybox" data-item="Изготовление изделий для интерьера">Расчет</a>
						</div>
					</div>
				</div>
			</div>
		</section> 

		<section class="about about_steel">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-6 order-md-2">
						<div class="about-ttl">
							<h3 class="about-ttl__name">о нас</h3>
							<span class="about-ttl__note">about us</span>
						</div>
						<p class="about-txt">Предоставляем ряд услуг по металлообработке и изготовлению кладочной сетки.<br><br>Решаем любые задачи для заводов ЖБИ и помогаем решить индивидуальные задачи архитекторам и дизайнерам.<br><br>Наша основная цель – это поиск технических решений, направленных на комфортное и универсальное использование металлоизделий в любой сфере применения.<br><br>Все наши сотрудники - профессионалы своего дела с многолетним опытом работы. Они помогут Вам подобрать все необходимое для вашего объекта и учтут все пожелания при оформлении заказа.</p>
						<a href="#consalt" class="about-btn fancybox">Получить консультацию</a>
					</div>
					<div class="col-lg-6 col-md-6 offset-lg-1 order-md-1">
						<img src="img/video_steel.jpg" alt="verom" class="about-video">
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
			<h3 class="modal-ttl">Оставьте заявку и мы расчитаем Вам стоимость</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Расчет стоимости">
				<input type="hidden" name="subtitle" class="subttl">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Получить расчет</button>
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