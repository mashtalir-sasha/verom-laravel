<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>{{ $item['name'] }} | Verom - Киевский Завод ЖБИ</title>
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
	<link rel="icon" href="/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#000">
</head>

<body>

	<nav class="mob-mnu d-block d-sm-none">
		<div class="mob-mnu__close">
			<img src="/img/cancel.svg" width="24" height="24" alt="verom">
		</div>
		<div class="mob-mnu__center">
			<div class="mob-mnu__content">
				<ul class="mob-mnu-list">
					<li class="mob-mnu-list__item"><a href="/">Главная</a></li>
					<li class="mob-mnu-list__item"><a href="/jbi">Завод ЖБИ</a></li>
					<li class="mob-mnu-list__item"><a href="/steel">Изделия из металла</a></li>
					<li class="mob-mnu-list__item"><a href="/avtopark">Аренда техники</a></li>
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
						<img src="/img/logo.svg" alt="Verom" class="nav-logo">
					</div>
					<div class="col-6 d-block d-sm-none">
						<div class="mob-mnu__link">
							<span>Меню</span>
							<img src="/img/menu.svg" width="32" height="32" alt="verom">
						</div>
					</div>
					<div class="col-lg-6 col-md-7 col-sm-9 col-6 d-none d-sm-block">
						<ul class="nav-list">
							<li class="nav-list__item"><a href="/">Главная</a></li>
							<li class="nav-list__item"><a href="/jbi">Завод ЖБИ</a></li>
							<li class="nav-list__item"><a href="/steel">Изделия из металла</a></li>
							<li class="nav-list__item"><a href="/avtopark">Аренда техники</a></li>
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

		<section class="cart cart_jbi">
			<div class="container">
				<div class="row">
					<div class="col-xs-auto offset-xl-1 cart-ttl clearfix">
						<h3 class="cart-ttl__name">Описание товаров</h3>
						<span class="cart-ttl__note"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3 class="cart-item__ttl">{{ $item['name'] }}</h3>
						<div class="cart-item__img cart-item__img_noafter">
							<img src="/{{ $item['image'] }}" alt="verom">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cart-item">
							<h4 class="cart-item__subttl">{{ $item['name'] }}</h4>
							<div class="cart-item-txt">
								<p class="cart-item-txt__txt">{!! $item['text'] !!}</p>
							</div>
							{!! $item['table'] !!}
							<div class="row cart-btn">
								<div class="col-sm-6">
									<a href="#calc" class="cart-item__btn anchor" data-item="{{ $item['name'] }}">Заказать</a>
								</div>
								<div class="col-sm-6">
									<a href="#full" class="cart-item__btn fancybox">Полный прайс</a>
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
									<h4 class="calc-ttl">НАПИШИТЕ НАЗВАНИЕ ИЗДЕЛИЯ ДЛЯ ПРОСЧЕТА СТОИМОСТИ</h4>
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
											<p>Название изделия:</p>
											<input type="text" name="item" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>Ваше имя:</p>
											<input type="text" name="name" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>Телефон/viber:</p>
											<input type="text" name="phone" class="rfield calc-form__input">
										</div>
									</div>
									<div class="col-md-5 offset-md-1">
										<div class="rline">
											<p>Ваш e-mail:</p>
											<input type="text" name="email" class="rfield calc-form__input">
										</div>
										<div class="rline">
											<p>Прикрепить чертеж:</p>
											<label class="file">
												<input type="file" name="file">
												<span class="file__txt">загрузить</span>
											</label>
										</div>
										<button type="submit" class="btnsubmit calc-form__btn">Рассчитать</button>
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
		<div id="modal" class="modal">
			<h3 class="modal-ttl">Оставьте заявку и мы просчитаем Вам стоимость</h3>
			<form class="form_check modal-form">
				<input type="hidden" name="title" value="Заказать">
				<input type="hidden" name="subtitle" class="subttl">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Заказать</button>
			</form>
		</div>

		<div id="full" class="modal">
			<h3 class="modal-ttl">Оставьте заявку что бы получить полный прайс продукции</h3>
			<form class="form_check modal-form" data-good="true" data-link="{{ $item['price'] }}">
				<input type="hidden" name="title" value="Получить полный прайс">
				<div class="rline">
					<p>Ваше имя:</p>
					<input type="text" name="name" class="rfield modal-form__input">
				</div>
				<div class="rline">
					<p>Контактный телефон:</p>
					<input type="text" name="phone" class="rfield modal-form__input">
				</div>
				<button type="submit" class="btnsubmit modal-form__btn">Получить прайс</button>
			</form>
		</div>
	</div>

	<link rel="stylesheet" href="/css/main.min.css">
	<script src="/js/scripts.min.js"></script>

</body>
</html>