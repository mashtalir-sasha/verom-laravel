<section class="contacts" id="contacts">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-4 offset-xl-1 col-md-6">
				<div class="contacts-ttl clearfix">
					<h3 class="contacts-ttl__name">Контакты</h3>
					<span class="contacts-ttl__note">contacts</span>
				</div>
				<h4 class="contacts-subttl">Адрес:</h4>
				<p class="contacts-addr">{{ $contacts['addr'] }}</p>
				<a href="mailto:{{ $contacts['mail'] }}" class="contacts-eml">{{ $contacts['mail'] }}</a>
				<div class="clearfix">
					<div class="contacts-left">
						<h4 class="contacts-subttl">Отдел продаж:</h4>
						@if (isset($contacts['phone1']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone1']) }}" class="contacts-phone">тел. {{ $contacts['phone1'] }}</a> 
						@endif
						@if (isset($contacts['phone2']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone2']) }}" class="contacts-phone">тел. {{ $contacts['phone2'] }}</a>
						@endif
						@if (isset($contacts['phone3']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone3']) }}" class="contacts-phone">тел. {{ $contacts['phone3'] }}</a>
						@endif
						@if (isset($contacts['phone4']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone4']) }}" class="contacts-phone">тел. {{ $contacts['phone4'] }}</a>
						@endif
						@if (isset($contacts['phone5']))
							<a href="tel:+38{{ preg_replace('~[^0-9]~','',$contacts['phone5']) }}" class="contacts-phone">тел. {{ $contacts['phone5'] }}</a>
						@endif
					</div>
					<div class="contacts-right">
						@if (isset($contacts['facebook']))
							<a href="{{ $contacts['facebook'] }}" class="contacts-soc">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.5001 0.0727539C7.83516 0.0727539 0 7.90792 0 17.5729C0 26.2412 6.30913 33.42 14.5814 34.8101V21.2239H10.3599V16.3347H14.5814V12.7296C14.5814 8.54672 17.1362 6.26728 20.8682 6.26728C22.6556 6.26728 24.1917 6.40046 24.6376 6.45913V10.8314L22.0492 10.8326C20.02 10.8326 19.6288 11.7967 19.6288 13.2119V16.3322H24.4706L23.8391 21.2213H19.6288V34.927C28.2873 33.8732 35 26.5115 35 17.5678C35 7.90792 27.1648 0.0727539 17.5001 0.0727539Z" fill="black"/>
								</svg>
							</a>
						@endif
						@if (isset($contacts['instagram']))
							<a href="{{ $contacts['instagram'] }}" class="contacts-soc">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.8496 17.5C20.8496 19.35 19.35 20.8496 17.5 20.8496C15.65 20.8496 14.1504 19.35 14.1504 17.5C14.1504 15.65 15.65 14.1504 17.5 14.1504C19.35 14.1504 20.8496 15.65 20.8496 17.5Z" fill="black"/>
									<path d="M25.3336 11.5734C25.1726 11.1371 24.9157 10.7421 24.582 10.418C24.2578 10.0842 23.8631 9.82729 23.4265 9.66627C23.0724 9.52875 22.5405 9.36506 21.5608 9.32047C20.501 9.27213 20.1832 9.26172 17.5001 9.26172C14.8167 9.26172 14.499 9.27187 13.4394 9.3202C12.4597 9.36506 11.9275 9.52875 11.5737 9.66627C11.1371 9.82729 10.7421 10.0842 10.4182 10.418C10.0844 10.7421 9.82755 11.1368 9.66627 11.5734C9.52875 11.9275 9.36506 12.4597 9.32047 13.4394C9.27213 14.499 9.26172 14.8167 9.26172 17.5001C9.26172 20.1832 9.27213 20.501 9.32047 21.5608C9.36506 22.5405 9.52875 23.0724 9.66627 23.4265C9.82755 23.8631 10.0842 24.2578 10.418 24.582C10.7421 24.9157 11.1368 25.1726 11.5734 25.3336C11.9275 25.4714 12.4597 25.6351 13.4394 25.6797C14.499 25.7281 14.8165 25.7382 17.4998 25.7382C20.1835 25.7382 20.5012 25.7281 21.5605 25.6797C22.5403 25.6351 23.0724 25.4714 23.4265 25.3336C24.3029 24.9956 24.9956 24.3029 25.3336 23.4265C25.4712 23.0724 25.6349 22.5405 25.6797 21.5608C25.7281 20.501 25.7382 20.1832 25.7382 17.5001C25.7382 14.8167 25.7281 14.499 25.6797 13.4394C25.6351 12.4597 25.4714 11.9275 25.3336 11.5734ZM17.5001 22.6599C14.6501 22.6599 12.3398 20.3498 12.3398 17.4998C12.3398 14.6498 14.6501 12.3398 17.5001 12.3398C20.3498 12.3398 22.6602 14.6498 22.6602 17.4998C22.6602 20.3498 20.3498 22.6599 17.5001 22.6599ZM22.8642 13.3417C22.1982 13.3417 21.6583 12.8017 21.6583 12.1357C21.6583 11.4698 22.1982 10.9298 22.8642 10.9298C23.5301 10.9298 24.0701 11.4698 24.0701 12.1357C24.0698 12.8017 23.5301 13.3417 22.8642 13.3417Z" fill="black"/>
									<path d="M17.5 0C7.83649 0 0 7.83649 0 17.5C0 27.1635 7.83649 35 17.5 35C27.1635 35 35 27.1635 35 17.5C35 7.83649 27.1635 0 17.5 0ZM27.4882 21.643C27.4396 22.7127 27.2695 23.443 27.0212 24.0823C26.4991 25.4321 25.4321 26.4991 24.0823 27.0212C23.4433 27.2695 22.7127 27.4393 21.6432 27.4882C20.5716 27.5371 20.2293 27.5488 17.5003 27.5488C14.771 27.5488 14.4289 27.5371 13.357 27.4882C12.2876 27.4393 11.557 27.2695 10.918 27.0212C10.2472 26.7688 9.64001 26.3734 9.13799 25.862C8.6269 25.3603 8.23143 24.7528 7.97909 24.0823C7.73075 23.4433 7.56065 22.7127 7.51205 21.6432C7.46265 20.5714 7.45117 20.229 7.45117 17.5C7.45117 14.771 7.46265 14.4286 7.51179 13.357C7.56039 12.2873 7.73022 11.557 7.97855 10.9177C8.2309 10.2472 8.62663 9.63974 9.13799 9.13799C9.63974 8.62663 10.2472 8.23116 10.9177 7.97882C11.557 7.73048 12.2873 7.56065 13.357 7.51179C14.4286 7.46292 14.771 7.45117 17.5 7.45117C20.229 7.45117 20.5714 7.46292 21.643 7.51205C22.7127 7.56065 23.443 7.73048 24.0823 7.97855C24.7528 8.2309 25.3603 8.62663 25.8623 9.13799C26.3734 9.64001 26.7691 10.2472 27.0212 10.9177C27.2698 11.557 27.4396 12.2873 27.4885 13.357C27.5373 14.4286 27.5488 14.771 27.5488 17.5C27.5488 20.229 27.5373 20.5714 27.4882 21.643Z" fill="black"/>
								</svg>
							</a>
						@endif
						@if (isset($contacts['youtube']))
							<a href="{{ $contacts['youtube'] }}" class="contacts-soc">
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.3203 20.7784L21.0128 17.4998L15.3203 14.2212V20.7784Z" fill="black"/>
									<path d="M17.5 0C7.83649 0 0 7.83649 0 17.5C0 27.1635 7.83649 35 17.5 35C27.1635 35 35 27.1635 35 17.5C35 7.83649 27.1635 0 17.5 0ZM28.4348 17.5179C28.4348 17.5179 28.4348 21.067 27.9846 22.7784C27.7323 23.7151 26.9937 24.4537 26.0569 24.7058C24.3456 25.1562 17.5 25.1562 17.5 25.1562C17.5 25.1562 10.6723 25.1562 8.94306 24.6879C8.00632 24.4358 7.26772 23.6969 7.01538 22.7602C6.5649 21.067 6.5649 17.5 6.5649 17.5C6.5649 17.5 6.5649 13.9512 7.01538 12.2398C7.26746 11.3031 8.02422 10.5463 8.94306 10.2942C10.6544 9.84375 17.5 9.84375 17.5 9.84375C17.5 9.84375 24.3456 9.84375 26.0569 10.3121C26.9937 10.5642 27.7323 11.3031 27.9846 12.2398C28.453 13.9512 28.4348 17.5179 28.4348 17.5179Z" fill="black"/>
								</svg>
							</a>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="map" id="map"></div>
			</div>
		</div>
	</div>
</section>

<footer class="foot">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-6">
				<img src="/img/logo-white.png" alt="Verom" class="foot-logo">
			</div>
			<div class="col-md-2 col-sm-4 col-6 align-self-center align-self-sm-start">
				<a href="/" class="foot-main">Главная</a>
				<a href="/#about" class="foot-main">О нас</a>
				<a href="/jbi" class="foot-main">Галерея ЖБИ</a>
				<a href="#contacts" class="foot-main anchor">Контакты</a>
			</div>
			<div class="w-100 d-block d-sm-none"></div>
			<div class="col-md-2 col-sm-4 col-6">
				<a href="/jbi" class="foot-main">ЖБИ изделия</a>
				<a href="/jbi/3" class="foot-link">плиты перекрытия</a>
				<a href="/jbi/11" class="foot-link">бетонный забор</a>
				<a href="/jbi/11" class="foot-link">фундаментные блоки</a>
				<a href="/jbi/6" class="foot-link">плита заборная</a>
				<a href="/jbi/1" class="foot-link">бетонные кольца</a>
				<a href="/jbi/8" class="foot-link">дорожные плиты</a>
			</div>
			<div class="w-100 d-none d-sm-block d-md-none"></div>
			<div class="col-md-2 col-sm-4 col-6">
				<a href="/avtopark" class="foot-main">Аренда спецтехники</a>
				<a href="/avtopark#catalog" class="foot-link">аренда экскаватора</a>
				<a href="/avtopark#catalog" class="foot-link">аренда строительной техники</a>
				<a href="/avtopark#catalog" class="foot-link">услуги спецтехники</a>
				<a href="/avtopark#catalog" class="foot-link">аренда автокрана</a>
				<a href="/avtopark#catalog" class="foot-link">аренда самосвала</a>
				<a href="/avtopark#catalog" class="foot-link">аренда фронтального погрузчика</a>
			</div>
			<div class="w-100 d-block d-sm-none"></div>
			<div class="col-md-2 col-sm-4 col-6">
				<a href="/steel" class="foot-main">Изделия из металла</a>
				<a href="/steel#catalog" class="foot-link">cетка кладочная</a>
				<a href="/steel#catalog" class="foot-link">сетка металлическая</a>
				<a href="/steel#catalog" class="foot-link">металлоконструкции</a>
			</div>
			<div class="col-md-2 col-sm-4 col-6">
				<a href="/steel#service" class="foot-main">Резка металла</a>
				<a href="/steel#service" class="foot-link">лазерная резка металла</a>
				<a href="/steel#service" class="foot-link">архитектурная резка</a>
				<a href="/steel#service" class="foot-link">плазменная резка</a>
				<a href="http://wamp.com.ua" rel="nofollow" target="_blank" class="dev">
					<span>Разработанно командой:</span>
					<img src="/img/dev-logo.png" alt="verom">
				</a>
			</div>
		</div>
	</div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcKXBKsIMkew7SppGI1p-MKSBteq60bBY"></script>
<script>
	google.maps.event.addDomListener(window, 'load', init);
	function init() {
		var mapOptions = {
			zoom: 17,
			scrollwheel: true,
			scaleControl: false,
			draggable: true,
			streetViewControl: false,
			mapTypeControl: false,
			center: new google.maps.LatLng({{ $contacts['longitude'] }},{{ $contacts['latitude'] }})
		};
		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng({{ $contacts['longitude'] }},{{ $contacts['latitude'] }}),
			map: map,
		});
	}
</script>