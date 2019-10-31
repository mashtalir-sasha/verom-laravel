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
	<title>{{ $item['name'] }} | {{ trans('cart.title') }}</title>
	<meta name="description" content="{{ trans('cart.description') }}">
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
					<a href="/jbi/{{ $item['id'] }}" class="nav-lang__link">Укр</a>
				@elseif (App::isLocale('uk'))
					<a href="/ru/jbi/{{ $item['id'] }}" class="nav-lang__link">Рус</a>
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
						<a href="/">
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
								<a href="/jbi/{{ $item['id'] }}" class="nav-lang__link">Укр</a>
							@elseif (App::isLocale('uk'))
								<a href="/ru/jbi/{{ $item['id'] }}" class="nav-lang__link">Рус</a>
								<a href="#" class="nav-lang__link active">Укр</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section class="cart cart_jbi menuFixed">
			<div class="container">
				<!-- <div class="row">
					<div class="col-xs-auto offset-xl-1 cart-ttl clearfix">
						<h3 class="cart-ttl__name">Описание товаров</h3>
						<span class="cart-ttl__note"></span>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-6">
						<!-- <h3 class="cart-item__ttl">{{ $item['name'] }}</h3> -->
						<div class="cart-item__img cart-item__img_noafter">
							<img src="/{{ $item['image'] }}" alt="verom">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cart-item">
							<h4 class="cart-item__subttl">
								@if (App::isLocale('ru'))
									{{ $item['name'] }}
								@elseif (App::isLocale('uk'))
									{{ $item['nameUkr'] }}
								@endif
							</h4>
							<div class="cart-item-txt">
								<p class="cart-item-txt__txt">
									@if (App::isLocale('ru'))
										{!! $item['text'] !!}
									@elseif (App::isLocale('uk'))
										{!! $item['textUkr'] !!}
									@endif
								</p>
							</div>
							@if (App::isLocale('ru'))
								{!! $item['table'] !!}
							@elseif (App::isLocale('uk'))
								{!! $item['tableUkr'] !!}
							@endif
							<div class="row cart-btn">
								<div class="col-sm-6">
									<a href="#calc" class="cart-item__btn anchor" data-item="{{ $item['name'] }}">{{ trans('cart.btn1') }}</a>
								</div>
								<div class="col-sm-6">
									<a href="#full" class="cart-item__btn fancybox">{{ trans('cart.btn2') }}</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="container" id="calc">
				<div class="row justify-content-center">
					<div class="col-xl-10">
						<div class="calc">
							<div class="row">
								<div class="col-md-5 offset-md-1">
									<h4 class="calc-ttl">{{ trans('cart.calc-ttl') }}</h4>
								</div>
								<div class="col-md-5">
									<span class="calc-note">calculator</span>
								</div>
							</div>
							<form class="form_check calc-form">
								<input type="hidden" name="title" value="Заявка с калькулятора">
								<div class="row">
									<div class="col-md-5 offset-md-1">
										<div class="rline">
											<p>{{ trans('cart.calc-name') }}</p>
											<input type="text" name="item" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>{{ trans('cart.calc-fio') }}</p>
											<input type="text" name="name" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>{{ trans('cart.calc-phone') }}</p>
											<input type="text" name="phone" class="rfield calc-form__input">
										</div>
									</div>
									<div class="col-md-5 offset-md-1">
										<div class="rline">
											<p>{{ trans('cart.calc-email') }}</p>
											<input type="text" name="email" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>{{ trans('cart.calc-file') }}</p>
											<label class="file">
												<input type="file" name="file">
												<span class="file__txt">{{ trans('cart.calc-fileup') }}</span>
											</label>
										</div>
										<button type="submit" class="btnsubmit calc-form__btn">{{ trans('cart.calc-btn') }}</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		@include('contacts')
	</div>

	<div class="d-none">
		<div id="full" class="modal">
			<h3 class="modal-ttl">{{ trans('cart.modal2-ttl') }}</h3>
			<form class="form_check modal-form" data-good="true" data-link="{{ $item['price'] }}">
				<input type="hidden" name="title" value="Получить полный прайс">
				<div class="rline">
					<p>{{ trans('main.form-name') }}</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>{{ trans('main.form-phone') }}</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">{{ trans('cart.modal2-btn') }}</button>
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