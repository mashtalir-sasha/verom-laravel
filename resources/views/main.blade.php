<!DOCTYPE html>
@if (App::isLocale('ru'))
	<html lang="ru">
@elseif (App::isLocale('uk'))
	<html lang="uk">
@endif

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.title') }}</title>
	<meta name="description" content="{{ trans('main.description') }}">
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
					<li class="mob-mnu-list__item"><a href="#" class="active">{{ trans('main.menu1') }}</a></li>
					<li class="mob-mnu-list__item"><a href="{{ localization()->getLocalizedURL(null, 'jbi') }}">{{ trans('main.menu2') }}</a></li>
					<li class="mob-mnu-list__item"><a href="{{ localization()->getLocalizedURL(null, 'steel') }}">{{ trans('main.menu3') }}</a></li>
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
					<a href="/" class="nav-lang__link">Укр</a>
				@elseif (App::isLocale('uk'))
					<a href="/ru" class="nav-lang__link">Рус</a>
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
							<li class="nav-list__item"><a href="#" class="active">{{ trans('main.menu1') }}</a></li>
							<li class="nav-list__item"><a href="{{ localization()->getLocalizedURL(null, 'jbi') }}">{{ trans('main.menu2') }}</a></li>
							<li class="nav-list__item"><a href="{{ localization()->getLocalizedURL(null, 'steel') }}">{{ trans('main.menu3') }}</a></li>
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
								<a href="/" class="nav-lang__link">Укр</a>
							@elseif (App::isLocale('uk'))
								<a href="/ru" class="nav-lang__link">Рус</a>
								<a href="#" class="nav-lang__link active">Укр</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</nav>

		<header class="head menuFixed">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="/img/head_ttl.png" alt="verom" class="head-img d-none d-md-block">
						<h1 class="head-ttl">{{ trans('main.head-ttl') }}</h1>
						<h2 class="head-subttl">{{ trans('main.head-subttl') }}</h2>
					</div>
					<div class="col-md-8">
						<img src="/img/head_gif.gif" alt="verom" class="head-gif">
					</div>
				</div>
			</div>
		</header>

		<section class="directions">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="row">
							<div class="col directions-ttl">
								<h3 class="directions-ttl__name">{{ trans('main.directions-ttl') }}</h3>
								<span class="directions-ttl__note">our directions</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="directions-img">
									<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}"><img src="/img/blank.gif" data-src="/img/directions_img1.gif" alt="verom"></a>
								</div>
								<h3 class="directions-item__ttl"><span>01 /</span> {{ trans('main.directions-item1') }}</h3>
								<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}" class="directions-item__btn">{{ trans('main.directions-btn') }}</a>
							</div>
							<div class="col-sm-4">
								<div class="directions-img">
									<a href="{{ localization()->getLocalizedURL(null, 'avtopark') }}"><img src="/img/blank.gif" data-src="/img/directions_img2.gif" alt="verom"></a>
								</div>
								<h3 class="directions-item__ttl"><span>02 /</span> {{ trans('main.directions-item2') }}</h3>
								<a href="{{ localization()->getLocalizedURL(null, 'avtopark') }}" class="directions-item__btn">{{ trans('main.directions-btn') }}</a>
							</div>
							<div class="col-sm-4">
								<div class="directions-img">
									<a href="{{ localization()->getLocalizedURL(null, 'steel') }}"><img src="/img/blank.gif" data-src="/img/directions_img3.gif" alt="verom"></a>
								</div>
								<h3 class="directions-item__ttl"><span>03 /</span> {{ trans('main.directions-item3') }}</h3>
								<a href="{{ localization()->getLocalizedURL(null, 'steel') }}" class="directions-item__btn last">{{ trans('main.directions-btn') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="opportunities">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto opportunities-ttl">
						<h3 class="opportunities-ttl__name">{{ trans('main.opportunities-ttl') }}</h3>
						<span class="opportunities-ttl__note">opportunities</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<p class="opportunities-txt">{!! trans('main.opportunities-txt1') !!}</p>
					</div>
					<div class="col-md-4">
						<img src="/img/opportunities_img.svg" alt="verom" class="opportunities-img">
					</div>
					<div class="col-md-4">
						<p class="opportunities-txt">{!! trans('main.opportunities-txt2') !!}</p>
					</div>
				</div>
			</div>
		</section>

		<section class="opportunities-items scroll">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 offset-xl-1 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img1.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt">{!! trans('main.opportunities-item1') !!}</p>
						<div class="opportunities-items__dots anim1">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="col-xl-2 offset-xl-2 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img2.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt">{!! trans('main.opportunities-item2') !!}</span></p>
						<div class="opportunities-items__dots anim2">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="col-xl-2 offset-xl-2 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img3.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt">{!! trans('main.opportunities-item3') !!}</p>
						<div class="opportunities-items__dots opportunities-items__dots_bottom anim3">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
				<div class="row opportunities-items__margin">
					<div class="col-xl-2 offset-xl-1 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img4.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt">{!! trans('main.opportunities-item4') !!}</p>
						<div class="opportunities-items__dots anim5">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="opportunities-items__dots opportunities-items__dots_top anim6">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="col-xl-2 offset-xl-2 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img5.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt">{!! trans('main.opportunities-item5') !!}</span></p>
						<div class="opportunities-items__dots anim4">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="col-xl-2 offset-xl-2 col-md-4">
						<div class="opportunities-items__wrap">
							<img src="/img/opportunities_img6.png" alt="verom" class="opportunities-items__img">
						</div>
						<p class="opportunities-items__txt last">{!! trans('main.opportunities-item6') !!}</p>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto portfolio-ttl">
						<h3 class="portfolio-ttl__name">{{ trans('main.portfolio-ttl') }}</h3>
						<span class="portfolio-ttl__note">completed projects</span>
					</div>
				</div>
				@foreach ($portfolios as $item)
					@if($loop->iteration % 2 == 0)
						<div class="row portfolio-item align-items-center">
							<div class="col-lg-5 col-md-6 order-2 order-md-1">
								<h3 class="portfolio-item__ttl">
									<span>{{ $item['numb'] }} /</span> 
									@if (App::isLocale('ru'))
										{{ $item['name'] }}
									@elseif (App::isLocale('uk'))
										{{ $item['nameUkr'] }}
									@endif
								</h3>
								<p class="portfolio-item__txt">
									@if (App::isLocale('ru'))
										{!! $item['text'] !!}
									@elseif (App::isLocale('uk'))
										{!! $item['textUkr'] !!}
									@endif
								</p>
								<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}/1#calc" class="portfolio-item__btn">{{ trans('main.portfolio-btn') }}</a>
							</div>
							<div class="col-lg-6 offset-lg-1 col-md-6 order-1 order-md-2">
								<img src="/{{ $item['image'] }}" alt="verom" class="portfolio-item__img">
							</div>
						</div>
					@else
						<div class="row portfolio-item align-items-center">
							<div class="col-lg-6 col-md-6">
								<img src="/{{ $item['image'] }}" alt="verom" class="portfolio-item__img">
							</div>
							<div class="col-lg-5 offset-lg-1 col-md-6">
								<h3 class="portfolio-item__ttl">
									<span>{{ $item['numb'] }} /</span> 
									@if (App::isLocale('ru'))
										{{ $item['name'] }}
									@elseif (App::isLocale('uk'))
										{{ $item['nameUkr'] }}
									@endif
								</h3>
								<p class="portfolio-item__txt">
									@if (App::isLocale('ru'))
										{!! $item['text'] !!}
									@elseif (App::isLocale('uk'))
										{!! $item['textUkr'] !!}
									@endif
								</p>
								<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}/1#calc" class="portfolio-item__btn">{{ trans('main.portfolio-btn') }}</a>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</section>

		<section class="gallery">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto gallery-ttl">
						<h3 class="gallery-ttl__name">{{ trans('main.gallery-ttl') }}</h3>
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
					<!-- <div class="col-md-7 col-8">
						<div class="gallery-slider__dots"></div>
					</div> -->
					<div class="col-md-1 col-2">
						<div class="gallery-slider__arrow gallery-slider__arrow-next"></div>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 offset-lg-1 col-md-6">
						<div class="about-ttl">
							<h3 class="about-ttl__name">{{ trans('main.about-ttl') }}</h3>
							<span class="about-ttl__note">about us</span>
						</div>
						<p class="about-txt">{!! trans('main.about-txt') !!}</p>
						<a href="#consalt" class="about-btn fancybox">{{ trans('main.about-btn') }}</a>
					</div>
					<div class="col-lg-6 col-md-6">
						<img src="/img/video_pattern.jpg" alt="verom">
					</div>
				</div>
			</div>
		</section>

		<section class="clients">
			<div class="container">
				<div class="row">
					<div class="col-xs-auto clients-ttl clearfix">
						<h3 class="clients-ttl__name">{{ trans('main.clients-ttl') }}</h3>
						<span class="clients-ttl__note">clients</span>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="clients-slider">
							@if(!empty($clients['images']))
								@foreach($clients['images'] as $item)
									<div class="clients-slider__slide">
										<div>
											<img src="/{{ $item }}" alt="">	
										</div>
									</div>
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</section>

		@include('contacts')
	</div>

	<div class="d-none">
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