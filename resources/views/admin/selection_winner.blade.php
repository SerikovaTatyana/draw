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

					
				@foreach($selection_winner as $winner)
					<tr>
						<td>{{ $winner->id }}</td>
						<td>{{ $winner->user->name }}</td>
						<td>{{ $winner->place }}</td>
						<td>{{ $winner->cod }}</td>
						<td>{{ $winner->city_name() }}</td>
						<td>{{ $winner->get_date() }}</td>
						<td>{{ $winner->month_word($winner->month) }}</td>
		
					</tr>
				@endforeach
					

			</table>

			<p class="message">{{ $message }}</p>
			
			<a href="{{ route('winners_save') }}" class="btn btn-bg btn-center">Отправить</a>
			

	</div>

</div>

@endsection