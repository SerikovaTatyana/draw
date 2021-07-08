@extends('layout')	

	@section('content')

		<div class="main-banner slick-initialized slick-slider">
	        <div class="slick-list draggable">
				<div class="slick-track" style="opacity: 1; width: 1520px;">
					<div class="banner slick-slide slick-current slick-active" id="bx_3215155553_368" style="background-image: url(&quot;img/1dc3c3b93d605ca24485c332812ce4d6.jpg&quot;); width: 1520px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" data-slick-index="0" aria-hidden="false" tabindex="0">
						<div class="mb-info">Участвуйте <br>в розыгрыше</div>
						<img src="img/f86e317cd65600d3df31516897f0b624.png" alt="Страсть к&nbsp;настоящему! — дополнительное фото" class="mb-img paralax-bl" data-scroll-speed="10" style="transform: translateY(0px);">

						@if(Auth::check())
							<a href="{{ route('code.index') }}" class="btn btn-bg">Регистрируй код</a> 

						@endif

						@if(!Auth::check())
							<a href="{{ route('login') }}" class="btn btn-bg">Регистрируй код</a> 

						@endif

					</div>
				</div>
			</div>
	    </div>
		
		<div class="not-container">
			<div class="main-online-store scroll-paralax" style="background-image: url('img/c01b76fb8477488860d1ee0e9c600d63.jpg')">
				<div class="block-content">
					<div class="block">
						<span class="span">
							Выиграй приз					</span>


						@if(Auth::check())

							<a href="{{ route('code.index') }}"  class="btn btn-bg">Регистрируй код</a>

						@endif

						@if(!Auth::check())

							<a href="{{ route('login') }}"  class="btn btn-bg">Регистрируй код</a>

						@endif

					</div>
				</div>
			</div>
		</div>

	@endsection