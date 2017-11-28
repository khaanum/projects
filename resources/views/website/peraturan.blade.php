@extends('website.layout.app2')

@section('page-title')
	Peraturan
@endsection
@section('content')
<div class="codes">
		<div class="container">  

<div class="about-slid-info"> 
				<h4>Data Pegawai Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</h4>
				<table class="table table-striped">
						<thead>
							<tr>
								<th>Peraturan</th>
							</tr>
						</thead>  
						<tbody>
		                	@foreach($peraturan as $data)
							<tr>
								<td>{{$data->file}}</td>
							</tr>
							@endforeach
		                </tbody> 
  					</table>
			</div>
		</div>
	</div>
@endsection
