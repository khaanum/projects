@extends('website.layout.app2')
@section('page-title')
	Visi & Misi		
@endsection

@section('content')
	<!-- about-slid -->
	<div class="w3about-slid agileits-w3layouts"> 
		<div class="container">
			<div class="about-slid-info"> 
				<h4>Visi & Misi Balai Pemantapan Kawasan Hutan Wilayah III Pontianak</h4>
				@foreach($visimisi as  $data)
				<p>{!!$data->content!!}</p>
				@endforeach
			</div>
		</div>
	</div>
  @endsection
