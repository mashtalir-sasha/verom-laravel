<?php
if(isset($_GET['utm_source'])){$utm_source=$_GET['utm_source'];setcookie("utm_source",$utm_source,time()+3600*24*30);}
if(isset($_GET['utm_medium'])){$utm_medium=$_GET['utm_medium'];setcookie("utm_medium",$utm_medium,time()+3600*24*30);}
if(isset($_GET['utm_term'])){$utm_term=$_GET['utm_term'];setcookie("utm_term",$utm_term,time()+3600*24*30);}
if(isset($_GET['utm_content'])){$utm_content=$_GET['utm_content'];setcookie("utm_content",$utm_content,time()+3600*24*30);}
if(isset($_GET['utm_campaign'])){$utm_campaign=$_GET['utm_campaign'];setcookie("utm_campaign",$utm_campaign,time()+3600*24*30);}
if(isset($_GET['gclid'])){$gclid=$_GET['gclid'];setcookie("gclid",$gclid,time()+3600*24*30);}
?>
<!DOCTYPE html>
@if (App::isLocale('ru'))
	<html lang="ru">
@elseif (App::isLocale('uk'))
	<html lang="uk">
@endif

<head>
	<meta charset="utf-8">
	<title>{{ trans('jbi.title') }}</title>
	<meta name="description" content="{{ trans('jbi.description') }}">
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
					<li class="mob-mnu-list__item"><a href="#" class="active">{{ trans('main.menu2') }}</a></li>
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
					<a href="/jbi" class="nav-lang__link">Укр</a>
				@elseif (App::isLocale('uk'))
					<a href="/ru/jbi" class="nav-lang__link">Рус</a>
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
							<li class="nav-list__item"><a href="#" class="active">{{ trans('main.menu2') }}</a></li>
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
								<a href="/jbi" class="nav-lang__link">Укр</a>
							@elseif (App::isLocale('uk'))
								<a href="/ru/jbi" class="nav-lang__link">Рус</a>
								<a href="#" class="nav-lang__link active">Укр</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</nav>

		<header class="head-jbi menuFixed">
			<div class="container">
				<div class="row">
					<div class="col offset-md-3">
						<h1 class="head-jbi__ttl">{!! trans('jbi.head-ttl') !!}</h1>
						<a href="#consalt" class="head-jbi__btn fancybox">{{ trans('jbi.head-btn') }}</a>
					</div>
				</div>
			</div>
		</header>
		<img src="/img/jbi_bg_xs.png" alt="verom" class="d-block d-md-none xs-bg">

		<section class="jbi">
			<div class="container">
				<div class="row">
					<div class="col-xs-auto offset-xl-1 jbi-ttl clearfix">
						<h3 class="jbi-ttl__name">{{ trans('jbi.catalog-ttl') }}</h3>
						<span class="jbi-ttl__note"></span>
					</div>
				</div>
				<div class="row justify-content-center d-none d-sm-flex">
					<div class="col-xl-10">
						<div class="row">
							@foreach ($catalog as $item)
								<div class="col-md-3 col-sm-6">
									<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}/{{ $item['id'] }}" class="jbi-item" style="display:block;color:#000">
										<div class="jbi-item__ttl">
											<span>{{ $item['numb'] }} /</span>
											@if (App::isLocale('ru'))
												{{ $item['name'] }}
											@elseif (App::isLocale('uk'))
												{{ $item['nameUkr'] }}
											@endif
										</div>
										<div class="jbi-item__img">
											<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
										</div>
										<button href="{{ localization()->getLocalizedURL(null, 'jbi') }}/{{ $item['id'] }}" class="jbi-item__btn" style="cursor:pointer">{{ trans('jbi.catalog-btn') }}</button>
									</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="row d-block d-sm-none">
					<div class="jbi-slider">
						@foreach ($catalog as $item)
							<div class="col">
								<a href="{{ localization()->getLocalizedURL(null, 'jbi') }}/{{ $item['id'] }}" class="jbi-item" style="display:block;color:#000">
									<div class="jbi-item__ttl">
										<span>{{ $item['numb'] }} /</span>
										@if (App::isLocale('ru'))
											{{ $item['name'] }}
										@elseif (App::isLocale('uk'))
											{{ $item['nameUkr'] }}
										@endif
									</div>
									<div class="jbi-item__img">
										<img src="{{ '/images/uploads/small/'.basename($item['image']) }}" alt="verom">
									</div>
									<button href="{{ localization()->getLocalizedURL(null, 'jbi') }}/{{ $item['id'] }}" class="jbi-item__btn" style="cursor:pointer">{{ trans('jbi.catalog-btn') }}</button>
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>

		<section class="individ">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-6">
						<img src="/img/individ.png" alt="verom" class="individ-img">
					</div>
					<div class="col-lg-6 offset-lg-1 col-md-6">
						<div class="individ-ttl clearfix">
							<h3 class="individ-ttl__name">{{ trans('jbi.individ-ttl') }}</h3>
							<span class="individ-ttl__note">individual<br>concrete</span>
						</div>
						<p class="individ-txt">
							{!! trans('jbi.individ-txt') !!}
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 offset-lg-1 col-md-6">
						<div class="about-ttl">
							<h3 class="about-ttl__name">{{ trans('jbi.about-ttl') }}</h3>
							<span class="about-ttl__note">about us</span>
						</div>
						<p class="about-txt">{!! trans('jbi.about-txt') !!}</p>
						<a href="#consalt" class="about-btn fancybox">{{ trans('jbi.about-btn') }}</a>
					</div>
					<div class="col-lg-6 col-md-6">
						<img src="/img/video_jbi.jpg" alt="verom">
					</div>
				</div>
			</div>
		</section>

		<section class="gallery gallery_jbi" id="gallery">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xs-auto gallery-ttl">
						<h3 class="gallery-ttl__name">{{ trans('jbi.gallery-ttl') }}</h3>
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