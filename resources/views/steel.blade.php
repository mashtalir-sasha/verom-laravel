<!DOCTYPE html>
@if (App::isLocale('ru'))
	<html lang="ru">
@elseif (App::isLocale('uk'))
	<html lang="uk">
@endif

<head>
	<meta charset="utf-8">
	<title>{{ trans('steel.title') }}</title>
	<meta name="description" content="{{ trans('steel.description') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->
	<link rel="icon" href="/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
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
			<img src="/img/cancel.svg" width="24" height="24" alt="verom">
		</div>
		<div class="mob-mnu__center">
			<div class="mob-mnu__content">
				<ul class="mob-mnu-list">
					<li class="mob-mnu-list__item"><a href="{{ localization()->getLocalizedURL(null, '/') }}">{{ trans('main.menu1') }}</a></li>
					<li class="mob-mnu-list__item"><a href="{{ localization()->getLocalizedURL(null, 'jbi') }}">{{ trans('main.menu2') }}</a></li>
					<li class="mob-mnu-list__item"><a href="#" class="active">{{ trans('main.menu3') }}</a></li>
					<li class="mob-mnu-list__item"><a href="{{ localization()->getLocalizedURL(null, 'avtopark') }}">{{ trans('main.menu4') }}</a></li>
					<li class="mob-mnu-list__item"><a href="#contacts" class="anchor">{{ trans('main.menu5') }}</a></li>
				</ul>
			</div>
		</div>
		<div class="mob-mnu__bottom clearfix">
			@if (isset($contacts['phone-top']))
				<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone-top']) }}" class="mob-mnu-phone">+38 {{ $contacts['phone-top'] }}</a>
			@endif
			<div class="mob-mnu-lang">
				@if (App::isLocale('ru'))
					<a href="#" class="nav-lang__link active">Рус</a>
					<a href="/steel" class="nav-lang__link">Укр</a>
				@elseif (App::isLocale('uk'))
					<a href="/ru/steel" class="nav-lang__link">Рус</a>
					<a href="#" class="nav-lang__link active">Укр</a>
				@endif
			</div>
		</div>
	</nav>

	<div class="content">
		<nav class="nav">
			<div class="container">
				<div class="row align-items-center align-items-sm-start">
					<div class="col-lg-3 col-md-2 col-sm-3 col-6">
						<a href="{{ localization()->getLocalizedURL(null, '/') }}">
							<img src="/img/logo.png" alt="Verom" class="nav-logo">
						</a>
					</div>
					<div class="col-6 d-block d-sm-none">
						<div class="mob-mnu__link">
							<span>Меню</span>
							<img src="/img/menu.svg" width="32" height="32" alt="verom">
						</div>
					</div>
					<div class="col-lg-6 col-md-7 col-sm-9 col-6 d-none d-sm-block">
						<ul class="nav-list">
							<li class="nav-list__item"><a href="{{ localization()->getLocalizedURL(null, '/') }}">{{ trans('main.menu1') }}</a></li>
							<li class="nav-list__item"><a href="{{ localization()->getLocalizedURL(null, 'jbi') }}">{{ trans('main.menu2') }}</a></li>
							<li class="nav-list__item"><a href="#" class="active">{{ trans('main.menu3') }}</a></li>
							<li class="nav-list__item"><a href="{{ localization()->getLocalizedURL(null, 'avtopark') }}">{{ trans('main.menu4') }}</a></li>
							<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.menu5') }}</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 offset-sm-8 offset-md-0 mt80 d-none d-sm-block">
						@if (isset($contacts['phone-top']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone-top']) }}" class="nav-phone">+38 {{ $contacts['phone-top'] }}</a>
						@endif
						<div class="nav-lang">
							@if (App::isLocale('ru'))
								<a href="#" class="nav-lang__link active">Рус</a>
								<a href="/steel" class="nav-lang__link">Укр</a>
							@elseif (App::isLocale('uk'))
								<a href="/ru/steel" class="nav-lang__link">Рус</a>
								<a href="#" class="nav-lang__link active">Укр</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</nav>

		<header class="steel menuFixed">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 offset-md-3">
						<h1 class="steel-ttl">{{ trans('steel.head-ttl') }}</h1>
						<a href="#consalt" class="steel-btn fancybox">{{ trans('steel.head-btn') }}</a>
					</div>
				</div>
			</div>
		</header>
		<img src="/img/steel_bg_xs.png" alt="verom" class="d-block d-md-none xs-bg">

		<section id="catalog" class="catalog">
			<div class="container">
				<div class="row">
					<div class="col-xs-auto offset-xl-1 catalog-ttl clearfix">
						<h3 class="catalog-ttl__name">{{ trans('steel.catalog-ttl') }}</h3>
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
												<div class="catalog-item__ttl">
													<span>{{ $item['numb'] }} /</span>
													@if (App::isLocale('ru'))
														{{ $item['name'] }}
													@elseif (App::isLocale('uk'))
														{{ $item['nameUkr'] }}
													@endif
												</div>
												<div class="catalog-item__img">
													<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
												</div>
												<a href="{{ localization()->getLocalizedURL(null, 'steel') }}/{{ $item['id'] }}" class="catalog-item__btn">{{ trans('steel.catalog-btn') }}</a>
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
									<div class="catalog-item__ttl">
										<span>{{ $item['numb'] }} /</span>
										@if (App::isLocale('ru'))
											{{ $item['name'] }}
										@elseif (App::isLocale('uk'))
											{{ $item['nameUkr'] }}
										@endif
									</div>
									<div class="catalog-item__img">
										<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
									</div>
									<a href="{{ localization()->getLocalizedURL(null, 'steel') }}/{{ $item['id'] }}" class="catalog-item__btn">{{ trans('steel.catalog-btn') }}</a>
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
							<h3 class="service-ttl__name">{{ trans('steel.service-ttl') }}</h3>
							<span class="service-ttl__note"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-item" id="service1">
							<div class="service-item__img" style="background-image: url(/img/service1.png);">
								<div class="service-item__ttl"><span>01 /</span><p>{{ trans('steel.serviceItem1-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem1-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="{{ trans('steel.serviceItem1-ttl') }}">{{ trans('steel.serviceItem-btn') }}</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item" id="service2">
							<div class="service-item__img" style="background-image: url(/img/service2.png);">
								<div class="service-item__ttl"><span>02 /</span><p>{{ trans('steel.serviceItem2-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem2-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="Изготовление металлоконструкций">{{ trans('steel.serviceItem-btn') }}</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item" id="service3">
							<div class="service-item__img" style="background-image: url(/img/service3.png);">
								<div class="service-item__ttl"><span>03 /</span><p>{{ trans('steel.serviceItem3-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem3-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="Архитектурная резка металла">{{ trans('steel.serviceItem-btn') }}</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-item" id="service4">
							<div class="service-item__img" style="background-image: url(/img/service4.png);">
								<div class="service-item__ttl"><span>04 /</span><p>{{ trans('steel.serviceItem4-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem4-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="{{ trans('steel.serviceItem4-ttl') }}">{{ trans('steel.serviceItem-btn') }}</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item" id="service5">
							<div class="service-item__img" style="background-image: url(/img/service5.png);">
								<div class="service-item__ttl"><span>05 /</span><p>{{ trans('steel.serviceItem5-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem5-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="{{ trans('steel.serviceItem5-ttl') }}">{{ trans('steel.serviceItem-btn') }}</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-item" id="service6">
							<div class="service-item__img" style="background-image: url(/img/service6.png);">
								<div class="service-item__ttl"><span>06 /</span><p>{{ trans('steel.serviceItem6-ttl') }}</p></div>
							</div>
							{!! trans('steel.serviceItem6-info') !!}
							<a href="#modal" class="service-item__btn fancybox" data-item="{{ trans('steel.serviceItem6-ttl') }}">{{ trans('steel.serviceItem-btn') }}</a>
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
							<h3 class="about-ttl__name">{{ trans('steel.about-ttl') }}</h3>
							<span class="about-ttl__note">about us</span>
						</div>
						<p class="about-txt">{!! trans('steel.about-txt') !!}</p>
						<a href="#consalt" class="about-btn fancybox">{{ trans('steel.about-btn') }}</a>
					</div>
					<div class="col-lg-6 col-md-6 offset-lg-1 order-md-1">
						<img src="/img/video_steel.jpg" alt="verom" class="about-video">
					</div>
				</div>
			</div>
		</section>

		<section class="gallery gallery_steel">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto gallery-ttl">
						<h3 class="gallery-ttl__name">{{ trans('steel.gallery-ttl') }}</h3>
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
			<h3 class="modal-ttl">{{ trans('steel.modal-ttl') }}</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Расчет стоимости">
				<input type="hidden" name="subtitle" class="subttl">
				<div class="rline">
					<p>{{ trans('main.form-name') }}</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>{{ trans('main.form-phone') }}</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">{{ trans('steel.modal-btn') }}</button>
			</form>
		</div>

		<div id="consalt" class="modal">
			<h3 class="modal-ttl">{{ trans('main.mainModal-ttl') }}</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Получить консультацию">
				<div class="rline">
					<p>{{ trans('main.form-name') }}</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>{{ trans('main.form-phone') }}</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">{{ trans('main.mainModal-btn') }}</button>
			</form>
		</div>
	</div>

	<link rel="stylesheet" href="/css/main.min.css">
	@if (App::isLocale('ru'))
		<script src="/js/scripts.min.js"></script>
	@elseif (App::isLocale('uk'))
		<script src="/js/scripts-ukr.min.js"></script>
	@endif

</body>
</html>