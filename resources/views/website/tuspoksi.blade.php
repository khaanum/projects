@extends('website.layout.app2')
@section('page-title')
		Tugas Pokok & Fungsi
@endsection

@section('content')

	<!-- about-slid -->
	<div class="w3about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h4>Tugas Pokok & Fungsi Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</h4>
				<dl>
					@foreach($tuspoksi as  $data)
					<p>{!!$data->content!!}</p>
					@endforeach
				</dl>
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<!-- //Stats -->  

  @endsection
