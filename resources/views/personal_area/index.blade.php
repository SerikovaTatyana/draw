@extends('layout')	

	@section('content')

		<div class="content-wrap">
			
			<h3>Регистрируй коды и участвуй в розыгрыше призов!</h3>

			@if(session('code_status'))

				<p class="alert">{{ session('code_status') }}</p>

			@endif

			<p>Мои коды:</p>



			@foreach($all_codes as $code)

				<p>{{ $code->cod }}</p>

			@endforeach

			<div class="button-wrap">
				
				<a href="{{ route('code.index') }}" class="btn btn-bg" rel="nofollow"  tabindex="0">Регистрируй код</a>


			</div>



		</div>

	@endsection