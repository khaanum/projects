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
					<th>nama pegawai</th>
					<th>nip</th>
					<th>gol</th>
					<th>jabatan</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pegawai as $data)
				<tr>
					<td>{{$data->nama_pegawai}}</td>
					<td>{{$data->nip}}</td>
					<td>{{$data->gol}}</td>
					<td>{{$data->jabatan}}</td>
				</tr>
				@endforeach
			</tbody>

		</table>	
			
		</div>
	</div>
	<!-- //single -->

@endsection
