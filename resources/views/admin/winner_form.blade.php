@extends('admin.layout')	

@section('content')

<div class="content-wrap">



	<div class="form-wrap">

		<div class="panel-title">Выбрать победителей за месяц</div>

		<form method="post" action="{{ route('winners.store') }}" class="form-horizontal">
				
				{{ csrf_field() }}

				<select class="list-decor" name="month">
					
					<option value="6">Июнь</option>
					<option value="7">Июль</option>
					<option value="8">Август</option>

				</select>	

				<div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Выбрать победителей
                        </button>
                    </div>
                </div>

		</form>

	</div>

	

</div>

@endsection