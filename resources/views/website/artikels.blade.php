@extends('website.layout.app2')

@section('page-title')
	Artikel
@endsection

@section('content')

<!-- single -->
	<div class="single">
		<div class="container">
		
		<table>
			<thead>
				<tr>
					<th>judul</th>
					<th>artikel</th>
					<th>image</th>
					
					
				</tr>
			</thead>
			<tbody>
				@foreach($artikel as $data)
				<tr>
					<td>{{$data->judul}}</td>
					<td>{{$data->artikel}}</td>
					<td>{{$data->image}}</td>
					
				</tr>
				@endforeach
			</tbody>

		</table>	
			
		</div>
	</div>
	<!-- //single -->

@endsection
