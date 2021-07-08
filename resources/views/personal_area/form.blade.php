@extends('layout')	

	@section('content')

		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
           	 		<div class="panel panel-default form-wrap">




						<div class="panel-heading">
							<label>Регистрируй код и участвуй в розыгрыше призов!</label>
						</div>

						@if(session('code_check'))

							<p class="alert alert-errors">{{ session('code_check') }}</p>

						@endif

						<div class="panel-body">
							<form method="post" action="{{ route('code.store') }}" class="form-horizontal">

								{{ csrf_field() }}
								<label for="name" class="col-md-4 control-label">Введите код</label>
								<input type="text" name="code">

								<input type="submit" class="btn btn-primary" value="Отправить">
								
							</form>



						</div>
					</div>
		        </div>
		    </div>
		</div>
	@endsection