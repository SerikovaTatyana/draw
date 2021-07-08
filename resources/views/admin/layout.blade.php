<!DOCTYPE html>
<html lang="ru">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Кондитерская фабрика «ПОБЕДА» - официальный сайт</title>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="192x192" href="img/android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
		
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="css/css_mobile.css" type="text/css" rel="stylesheet" />

	-->

		<link href="/css/all_style.css" type="text/css" rel="stylesheet" />



</head>
<body>
	
	<header id="header">
		<div class="container">
			<div class="logo">
				<span>
					<a href="{{ route('home') }}">
						<img src="/img/ca09fb4aff7b6009cc577afff2c8a6c0.svg" alt="Победа вкуса — на главную" />
					</a>
				</span>			
			</div>
			<div class="content">
				
				<nav role="navigation" class="globalnav">
                    <ul>
						<li class="first"><a href="{{ route('admin.home') }}">Главная</a></li>

						<li><a href="{{ route('winners.index') }}">Победители</a></li>

						<li><a href="{{ route('winners.create') }}">Выбрать победителей</a></li>

						@if(Auth::check())

							<li><form method="post" action="{{ route('logout') }}">

								{{ csrf_field() }}
										
								<input type="submit" name="" value="Выход" class="not-button">

							</form></li>

							<li>{{ Auth::user()->name }}</li>

						@endif

							
						
					</ul>				
				</nav>	
				
				<div class="menu-phone">
					<a href="#" class="sandwich" rel="nofollow" title="Меню"></a>
					<div class="invisible-block">
						<nav role="navigation" class="globalnav-phone">
							<ul>
								<li class="first"><a href="{{ route('home') }}">Главная</a></li>

								@if(Auth::check())

								

									<form method="post" action="{{ route('logout') }}">
										

										{{ csrf_field() }}

										<input type="submit" name="" value="Выход" class="not-button">

									</form>

								@endif
								
							</ul>						
						</nav>
				
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="head-cont">
			<div class="row">
				<a href="https://store.pobedavkusa.ru/" class="btn btn-bg " rel="nofollow" target="_blank" onclick="yaCounter53254456.reachGoal('perehod-kupit'); gtag('event', 'click_kupit', { 'event_category': 'knopka-perehoda', 'event_action': 'click-kupit', });" tabindex="0">Купить онлайн</a>
			</div>
		</div>

	</header>

	<div class="content-parent">

		@yield('content')
		

	</div>

	<footer>
		<div class="developer">
			<div class="info">
				© 2019 ООО «Кондитерская фабрика «ПОБЕДА»		</div>
		</div>
	</footer>

</body>
</html>