@extends('admin.layout')	

@section('content')

	<div class="content-wrap">

		<div class="panel-title">Участники</div>

		<div class="table-parent"> 

			<table>

				<tr>
						
					<th>№</th>
					<th>Имя</th>
					<th>Код</th>
					<th>Город</th>
					<th>Дата</th>		

				</tr>

					
				@foreach($codes as $code)
					<tr>
						<td>{{ $code->id }}</td>

						<td>{{ $code->user->name }}</td>
						<td>{{ $code->cod }}</td>
						<td>{{ $code->city_name() }}</td>
						<td>{{ $code->get_date() }}</td>

					</tr>
				@endforeach
					

			</table>

		</div>

		{{ $codes->links() }}

	</div>
	
@endsection