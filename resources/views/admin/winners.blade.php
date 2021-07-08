@extends('admin.layout')	

@section('content')

	<div class="content-wrap">

		


		<div class="panel-title">Победители</div>

		<div class="table-parent"> 

			<table>

				<tr>
						
					<th>№</th>
					<th>Имя</th>
					<th>Место</th>
					<th>Код</th>
					<th>Город</th>
					<th>Дата</th>
					<th>Месяц</th>		

				</tr>

					
				@foreach($winners as $winner)


					<?php //var_dump($winner->updated_at ); ?>

					<tr>
						<td>{{ $winner->id }}</td>

						<td>{{ $winner->user->name }}</td>
						<td>{{ $winner->place }}</td>
						<td>{{ $winner->cod }}</td>
						<td>{{ $winner->city_name() }}</td>
						<td>{{ $winner->get_date() }}</td>
						<td>{{ $winner->month_word($winner->updated_at) }}</td>

					</tr>
				@endforeach
					

			</table>

		</div>

		{{ $winners->links() }}

			

	</div>
	
@endsection