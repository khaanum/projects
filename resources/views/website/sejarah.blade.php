@extends('website.layout.app2')

@section('page-title')
		Sejarah
@endsection

@section('content')
	<!-- about-slid -->
	<div class="w3about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h4>Sejarah Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</h4>
				@foreach($sejarah as  $data)
				<p>{!!$data->content!!}</p>
				@endforeach
			</div>
		</div>
	</div>
	<!-- //about-slid -->
	<!-- //Stats -->  
	
  @endsection
